<?php
include 'config.php';
include 'ExamDAO.php';

$email=(isset($_GET['email1'])) ?  $_GET['email1']:false;
$password=(isset($_GET['pass'])) ? $_GET['pass']: false;

$authen =ExamDAO::authenticate($email,$password);
if(!$authen){
	echo "<script>alert('Wrong email/password');window.location.href='loginpage.php'</script>";
}else{
	echo 'Welcome';
}
?>
