<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');
$id=$_GET['id'];
$sql="select * from places where id= '$id'";
$query= mysqli_query($con, $sql);
$get= mysqli_fetch_array($query);
?>
    <body>
        <form method="POST" enctype="multipart/form-data">
	<table border="0" width="500" align="center" class="demo-table" >
		<tr>
			<td>Name</td>
                        <td><input type="text" class="demoInputBox" name="Name" value="<?=$get['name'];?>"> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" class="demoInputBox" name="Address" value="<?=$get['Address'];?>"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td><input type="text" class="demoInputBox" name="Area" value="<?=$get['area'];?>"></td>
		</tr>
		<tr>
			<td>Tag</td>
			<td><input type="text" class="demoInputBox" name="Tag"value="<?=$get['tag'];?>" ></td>
		</tr>               
                <tr>
                    <td>Description</td>
		<td><textarea rows="4" cols="50" name="text"><?php echo $get['des'];?>
                    </textarea></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image">
                <img src="<?=$get['image'];?>" height="50px" width="100px"></td>
        </tr>
		<tr>
			<td colspan=2>
			<input type="submit" name="update" value="Update" class="btnRegister"></td>
		</tr>
	</table>
<?php
if(isset($_POST['update'])){
    $place= $_POST['Name'];
    $add= $_POST['Address'];
     $ara= $_POST['Area'];
      $tg= $_POST['Tag'];
       $descr= $_POST['text']; 
    $filetmp= $_FILES['image']['tmp_name']; 
    $filename=$_FILES['image']['name'];
    if($filename==""){
     $update= "update places set name='$place',Address='$add',area='$ara',tag='$tg',des='$descr' where id='$id' ";
   $updatequery= mysqli_query($con, $update);   
    }
 else {
 $destinationfile='upload/'.$filename;
$update= "update places set name='$place',Address='$add',area='$ara',tag='$tg',des='$descr',image='$destinationfile' where id='$id' ";
   $updatequery= mysqli_query($con, $update);
           move_uploaded_file($filetmp, $destinationfile);
 }
        }?>
         <?php echo $_SESSION['user']?> what's up?
         <a href="diffplace.php">Home</a>
         </form>
         </body>
</html>