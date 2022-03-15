<?php 
session_start();
if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		

		if($username != ""){
			if($password != ""){
				$myfile = fopen('../models/test.txt', 'r');

				while(!feof($myfile)){
					$data = fgets($myfile);
					$myuser = explode('|', $data);
					if(trim($myuser[0]) == $username && trim($myuser[1]) == $password){
						$_SESSION['flag']="true";
						header('location:index.php');
				}
			}
			echo "Everything went wrong" ;
			}else{
				echo "Give a Password";
			}
		}else{
			echo "Give a Username";
		}
	}
?>