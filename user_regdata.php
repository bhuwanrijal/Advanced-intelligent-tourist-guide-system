<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   <?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
   $username= $_POST['name'];
    $useremail= $_POST['email'];
     $userphone= $_POST['phone'];
      $useraddress= $_POST['address'];
$userarea= $_POST['area'];
      $userpassword= $_POST['password'];
        $qry="INSERT INTO `user_registration`(`name`, `email`, `phone`, `address`, `area`, `pass`) VALUES ('$username','$useremail','$userphone','$useraddress','$userarea','$userpassword')";
        mysqli_query($con, $qry);  
        $data="SELECT `id` FROM `user_registration` WHERE name='$username'";
        $rev=mysqli_query($con, $data);
        while($go=mysqli_fetch_assoc($rev))
        {
            $text = $go['id']; 
        }
}
       ?>
    <body>
        <form name="frmRegistration" method="POST" action="user_tagdata.php">
	<table border="0" width="500" align="center" class="demo-table">
            <tr>
                <td><input type="hidden" class="demoInputBox" name="uname" value="<?=$text;?>"> </td>
            </tr>
		<tr>
                    
			<td>Would you like to go to beach?</td>
                        <td>
                        <select name ="beach">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
		</tr>
				<tr>
			<td>Would you like to visit Hill Station?</td>
                        <td>
                        <select name ="hill_station">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit museum?</td>
                        <td>
                        <select name ="museum">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to have landscape view?</td>
                        <td>
                        <select name ="landscape">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Temple?</td>
                        <td>
                        <select name ="temple">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Fort?</td>
                        <td>
                        <select name ="fort">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Adventurous Place?</td>
                        <td>
                        <select name ="adventurous">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Water Sports?</td>
                        <td>
                        <select name ="water_sports">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Waterfalls?</td>
                        <td>
                        <select name ="Waterfalls">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        <tr>
			<td>Would you like to visit Aviation museum?</td>
                        <td>
                        <select name ="aviation">
                            <option>Select any one</option>
                                <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                        </select>
                        </td>
        </tr>
        
		<tr>
			<td colspan=2>
			<input type="submit" name="submit" value="Submit" class="btnRegister"></td>
		</tr>
	</table>
</form>
         </body>
</html>
