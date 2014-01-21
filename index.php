<?php
include 'validations.php';
?>
<html>
<head>
	<center>Register Here!</center>
	<title>Registration Page</title>
</head>
<body>
	<form method='get' action='adduser.php' name='form'>
	<center>
		<table>
			<tr>
				<td>First Name :</td>
				<td><input type='text' name ='fname' id='fname' onblur='check_fname()'></td>
				<td><span id ='err_fname'></span></td>
			</tr>
			<tr>
				<td>Middle Name :</td>
				<td><input type='text' name='mname' id='mname' onblur='check_mname()'></td>
				<td><span id='err_mname'></span></td>
			</tr>
			<tr>
				<td>Last Name :</td>
				<td><input type='text' name='lname' id='lname' onblur='check_surname()'></td>
				<td><span id='err_surname'></span></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type='text' name='email' id='email' onblur='check_email()'></td>
				<td><span id='err_email'></span></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type='password' name='pwd' id='pwd' onblur='check_pass()'></td>
				<td><span id='err_pwd'></span></td>
			</tr>
			<tr>
				<td>Confirm Password :</td>
				<td><input type='password' name='pwd1' id='pwd1' onblur='check_cpass()'></td>
				<td><span id='err_pwd1'></span></td>
			</tr>
			<tr>
				<td><input type='submit' value='Submit' name='submit' onclick='return check_all()'></td>
				<td><input type='reset' value='Clear' name='clear'></td>
			</tr>
		</table>
	</center>
</form>
<center>
<table>
	<tr>
		<td>Already have an Account?</td>
	</tr>
	<tr>
		<td><a href="loginpage.php"><button>Login</button></a></td>
	</tr>
</table>
</center>
</body>
</html>
