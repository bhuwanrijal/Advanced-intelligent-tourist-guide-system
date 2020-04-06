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
    <th>Id</th>
    <th>Name</th> 
    <th>Email</th> 
    <th>Phone No</th> 
    <th>Address</th> 
    <th>Area</th> 
</thead>
<tbody>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');

        $dispquery="SELECT * FROM user_registration";
        $disp= mysqli_query($con, $dispquery);  
        while($res= mysqli_fetch_array($disp))
        {
          ?>  
    <tr>
        <td><?php  echo $res['id'];?></td>
        <td><?php  echo $res['name'];?></td>
        <td><?php  echo $res['email'];?></td>
        <td><?php  echo $res['phone'];?></td>
        <td><?php  echo $res['address'];?></td>
        <td><?php  echo $res['area'];?></td>
    </tr>
    <?php
}
?>
</tbody>
</table>
</form>
</body>
</html>

