<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="frmRegistration" method="POST" action="user_regdata.php">
	<table border="0" width="500" align="center" class="demo-table">
		
		<tr>
			<td>Name</td>
                        <td><input type="text" class="demoInputBox" name="name" required> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" class="demoInputBox" name="email" required></td>
		</tr>
		<tr>
			<td>Phone No</td>
			<td><input type="text" class="demoInputBox" name="phone" required></td>
		</tr>

		<tr>
			<td>Address</td>
			<td><input type="text" class="demoInputBox" name="address" required></td>
		</tr>
                
                <tr>
		<tr>
			<td>Area</td>
			<td><input type="text" class="demoInputBox" name="area" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" class="demoInputBox" name="password" required></td>
		</tr>
		<tr>
			<td colspan=2>
			<input type="submit" name="submit" value="Register" class="btnRegister"></td>
		</tr>
	</table>
</form>
        
         </body>
</html>