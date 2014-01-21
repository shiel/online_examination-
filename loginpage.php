<?php
include 'config.php';
include 'validateLogin.php';

?>
<html>
<head>Login Here.
	<title>Login Page</title>
</head>
<body>
	<form method='get' action='questionspage.php'>
		<table>
			<tr>
				<td>Email :</td>
				<td><input type='text' name='email1' id ='email1' onblur='check_email()'></td>
				<td><span id='err_email1'></span></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type='password' name='pass' id='pass1' onblur='check_pass()'></td>
				<td><span id='err_pass1'></span></td>
			</tr>
			<tr>
				<td><input type='submit' name='submit' value='Log In'></td>
			</tr>
		</table>
	</form>

</body>
</html>
