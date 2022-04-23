<?php 
	session_start();
	require('../models/userModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			//$user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
			//$_SESSION['user'] = $user;

			/*$user = $username."|".$password."|".$email;
			$file = fopen("../model/user.txt", 'w');
			fwrite($file, $user);
			fclose($file);*/
			
			$status = signupcheck($username, $password, $email);

			if($status){
				//header('location: ../controllers/logincheck.php');
				echo "signup complete!";
			}else{
				//header('location: ../controllers/signupcheck.php');
				echo "signup failed!";
			}

		}else{
			echo "null submission..";
		}
	}	
?>