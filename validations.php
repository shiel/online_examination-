<script src="assets/js/jquery-1.7.2.min.js"></script>
<script>
	function check_fname(){
		var name =document.getElementById('fname').value;
		if(name.length > 0) {
			document.getElementById('err_fname').innerHTML='';
			return true;
		}else {
			document.getElementById('err_fname').innerHTML='Please enter your Name';
			return false;
		}
	}
	function check_mname(){
		var mname=document.getElementById('mname').value;
		if(mname.length > 0){
	document.getElementById('err_mname').innerHTML=' ';
			return true;
		}else{
			document.getElementById('err_mname').innerHTML='Please enter your Middle Name';
			return false;
		}
	}
	function check_surname(){
		var surname=document.getElementById('lname').value;
		if(surname.length > 0){
		document.getElementById('err_surname').innerHTML = '';
			return true;
		}else {
			document.getElementById('err_surname').innerHTML = 'Please enter your Surname';
			return false;
		}
	}
	function check_email(){
		var email =document.forms['form']['email'].value;
		if(email.length == 0){
			document.getElementById('err_email').innerHTML ='';
			return false;
		}else {
			document.getElementById('err_email').innerHTML ='Please enter your Email';
			return true;
		}
	}
	function check_pass(){
		var pwd =document.getElementById('pwd').value;
		if(pwd.length > 0){
			document.getElementById('err_pwd').innerHTML = '';
			return true;
		}else{
			document.getElementById('err_pwd').innerHTML = 'Enter your password atleast 6 characters';
			return false;
		}
	}
	function check_cpass(){
		var pass =document.getElementById('pwd').value;
		var pass1 =document.getElementById('pwd1').value;
		if(pass == pass1 && pass1.length > 0){
			document.getElementById('err_pwd1').innerHTML='';
			return true;
		}else{
			document.getElementById('err_pwd1').innerHTML='Invalid Password';
			return false;
		}
	}
	function check_all(){
		if(check_fname() && check_mname() && check_surname() && check_email() && check_pass() && check_cpass()){
			return true;
		}else{
			alert('Answer the required field/s correctly.');
			return false;
		}
	}
</script>
