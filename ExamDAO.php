<?php
	class ExamDAO {
		public static function getUser($id) {
			global $db;
			$query = "SELECT user_id,fname,mname,lname,email FROM user WHERE fname = '{$fname}' AND password = '{$password}'";
			$result = $db->query($query);
			if($result->num_rows > 0) {
				$user =$result->fetch_assoc();
				$result->free();
				return $user;
			}else{
				return false;
			}
		}
		public static function getQuestion($id){
			global $db;
			$query = "SELECT * FROM questions_tb WHERE q_id = '{$id}'";
			$result = $db->query($query);
			if($result->num_rows > 0) {
				$question = $result->fetch_assoc();
				$result->free();
				return $question;
			}else {
				return false;
			}
		}
		public static function createUser($fname,$mname,$lname,$email,$password){
			global $db;
			if(!$email) return false;
			if(!$password) return false;

			$query = "INSERT INTO user (fname , mname , lname , email , password) VALUES('$fname', '$mname', '$lname', '$email', '$password')";
				$result = $db->query($query);
		}
		public static function authenticate($email,$password){
			global $db;
			$query="SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}' ";
			$result =$db->query($query);
			if($result){
				if($result->num_rows > 0){
					$user=$result->fetch_assoc();
					$result->free();
					return $user;
				}else{
					return false;
				}
			}else{
				echo "<script> alert('Error Logging In.Check your email/password.')</script>";
				return false;
			}
		}
	}

?>
