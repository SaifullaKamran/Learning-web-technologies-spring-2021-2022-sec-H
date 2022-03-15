<?php 
session_start();
if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					if(strlen($username)<3){
						echo "Error";
					}
					else if(!strpos($password, "#")){
						echo "Need a special character like #";
					}
					else{
						/*$_SESSION['username']=$username;
						$_SESSION['password']=$password;*/
						$myfile = fopen('../models/test.txt', 'a');
						$user = $username."|".$password."|".$email."\r\n";
						fwrite($myfile, $user);
						fclose($myfile);
					
						header('location: ../views/login.html');
					}
					
				}else{
					echo "Give an Email";
				}
			}else{
				echo "Give a Password";
			}
		}else{
			echo "Give a Username";
		}
	}








?>