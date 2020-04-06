<?php
session_start();
if(!isset($_SESSION['user'])){
header('location:index.php');
}?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="adminpage.php">Add Places</a>
        <a href="diffplace.php">View places</a>
        <a href="userinfo.php">View users</a>
        <a href="showfeedback.php">Feedback</a>
        <a href="logout.php">Logout</a>
<table style="width:50%">
    <thead>
    <th>Name</th> 
    <th>FeedBack</th> 
</thead>
<tbody>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');

        $dispquery="SELECT * FROM feedback_info";
        $disp= mysqli_query($con, $dispquery);  
        while($res= mysqli_fetch_array($disp))
        {
          ?>  
    <tr>
        <td><?php  echo $res['name'];?></td>
        <td><?php  echo $res['feedback'];?></td>
        
    </tr>
    <?php
}
?>
</tbody>
</table>
</body>
</html>


