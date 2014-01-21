<?php
include 'config.php';
include 'ExamDAO.php';

$fname =(isset($_GET['fname'])) ? $_GET['fname']:false;
$mname=(isset($_GET['mname'])) ? $_GET['mname']:false;
$lname=(isset($_GET['lname'])) ? $_GET['lname']:false;
$email=(isset($_GET['email'])) ? $_GET['email']: false;
$password =(isset($_GET['pwd'])) ? $_GET['pwd']:false;
$password1 =(isset($_GET['pwd1'])) ? $_GET['pwd1']: false;

$email_pattern ='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
 preg_match($email_pattern,$email,$matches);

//no input validations yet
 if($matches){
 	if($password == $password1){
	$user = ExamDAO::createUser($fname,$mname,$lname,$email,$password);
	echo "<script>alert('Welcome.You may now proceed to the Login page.');window.location.href='loginpage.php'</script>";
	}
 else{
	echo "<script>alert('Password didn\'t match.);window.location.href='index.php'</script>";
	}
}else{
	echo "<script>alert('Invalid Email.');window.location.href='index.php'</script>";
}
?>
