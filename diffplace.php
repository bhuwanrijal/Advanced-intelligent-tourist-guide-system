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
        <form action="con.php">
<table style="width:50%">
    <thead>
    <th>Id</th>
    <th>Place Name</th> 
    <th>Address</th> 
    <th>Area</th> 
    <th>Tag</th> 
     <th>Description</th> 
    <th>image</th>
     <th>Option</th> 
</thead>
<tbody>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
   $placename= $_POST['Name'];
    $address= $_POST['Address'];
     $area= $_POST['Area'];
      $tag1= $_POST['tag'];
      $description= $_POST['comment'];
      $lat=$_POST['lat'];
      $long=$_POST['lon'];
    $filetmp= $_FILES['image']['tmp_name']; 
    $filename=$_FILES['image']['name'];
    $fileext=explode('.', $filename);
    $filecheck= strtolower(end($fileext));      
    $fileexestored=array('png','jpg','jpeg'); 
    if(in_array($filecheck, $fileexestored))
    {
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetmp, $destinationfile);
        $qry="INSERT INTO `places`(`name`, `Address`,`area`,`tag`, `des`, `latitude`, `longitude`, `image`) VALUES ('$placename','$address','$area','$tag1','$description','$lat','$long','$destinationfile')";
        $qery= mysqli_query($con, $qry);
        
    }
}
        $dispquery="SELECT * FROM places";
        $disp= mysqli_query($con, $dispquery);  
        while($res= mysqli_fetch_array($disp))
        {
          ?>  
    <tr>
        <td><?php  echo $res['id'];?></td>
        <td><?php  echo $res['name'];?></td>
        <td><?php  echo $res['Address'];?></td>
        <td><?php  echo $res['area'];?></td>
        <td><?php  echo $res['tag'];?></td>
        <td><?php  echo $res['des'];?></td>
        <td><img src="<?php  echo $res['image'];?>" height="100" width="100"</td>
        <td><a href="update_details.php?id=<?php echo $res['id'];?>"><input type="button" name="edit" value="Edit"></a>
            <a href="diffplace.php?id=<?php echo $res['id'];?>" onClick="history.go(0)"><input type="button" name="delete" value="Delete"></a></td>
            
    </tr>
    <?php
}
if(isset($_GET['id']))
{
    $delete_id=$_GET['id'];
    mysqli_query($con, "delete from places where id='$delete_id'");
}
?>
    <?php echo $_SESSION['user']?> what's up?
</tbody>
</table>
        </form>
</body>
</html>