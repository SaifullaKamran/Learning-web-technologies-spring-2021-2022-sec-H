<?php 
session_start();

if(isset($_REQUEST['submit'])){
		$fname = $_REQUEST['fname'];
		$gender = $_REQUEST['gender'];
		$blood_type = $_REQUEST['blood_type'];
		if($fname != ""){
			if($gender != ""){
				if($blood_type != ""){
					if(strlen($fname)<3){
						echo "Error";
					}
					
					else{
						/*$_SESSION['fname']=$fname;
						$_SESSION['gender']=$gender;*/
						$myfile = fopen('../models/blood.txt', 'a');
						$blood = $fname."|".$gender."|".$blood_type."\r\n";
						fwrite($myfile, $blood);
						fclose($myfile);
					
						header('location: ../views/add_blood_type.html');
					}
					
				}else{
					echo "Give an Name";
				}
			}else{
				echo "Give a gender";
			}
		}else{
			echo "Give a blood_type";
		}
	}
?>