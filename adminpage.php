<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
}
?>
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
        <a  href="logout.php">Logout</a>
        <form name="frm" method="POST" enctype="multipart/form-data" action="diffplace.php">
	<table border="0" width="100" align="center" class="demo-table">
		
		<tr>
			<td>Name</td>
                        <td><input type="text" class="demoInputBox" name="Name"> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" class="demoInputBox" name="Address"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td><input type="text" class="demoInputBox" name="Area" ></td>
		</tr>

		<tr>
			<td>Tag</td>
                        <td>
			<select name="tag">
                            <option>Select any one</option>
                                <option value="landscape">landscape</option>
                                    <option value="beach">beach</option>
                                    <option value="fort">fort</option>
                                    <option value="temple">temple</option>
                                    <option value="water sports">water sports</option>
                                    <option value="hill station">hill station</option>
                                    <option value="museum">museum</option>
                                    <option value="aviation">aviation</option>
                                <option value="adventerous">adventerous</option>
                            <option value="waterfall">waterfall</option>
                        </select></td>
                        
                       
		</tr>
                <tr>
			<td>Latitude</td>
			<td><input type="text" class="demoInputBox" name="lat" ></td>
		</tr>
                <tr>
			<td>Longitude</td>
			<td><input type="text" class="demoInputBox" name="lon" ></td>
		</tr>
                
                <tr>
                    <td>Description</td>
		<td><textarea rows="4" cols="50" name="comment" >
                    </textarea></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image"></td>
        </tr>
		<tr>
			<td colspan=2>
			<input type="submit" name="submit" value="Register" class="btnRegister"></td>
		</tr>
	</table>
</form>
         </body>
</html>