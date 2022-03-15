<?php 
session_start();

if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$appointment_request  = $_REQUEST['appointment_request'];
		$morning_desired      = $_REQUEST['morning_desired'];
		$afternoon_desired    = $_REQUEST['afternoon_desired'];
		$afternoon_desired    = $_REQUEST['afternoon_desired'];

		if($name != ""){
			if($email != ""){
				if($phone != ""){
					if(strlen($name)<3){
						echo "Error";
					}
					
					else{
						/*$_SESSION['fname']=$fname;
						$_SESSION['gender']=$gender;*/
						$myfile = fopen('../models/cancel_appointment.txt', 'a');
						$book_appointment = $name."|".$email ."|".$phone."|".$appointment_request."|".$morning_desired."|".$afternoon_desired."\r\n";
						fwrite($myfile, $book_appointment);
						fclose($myfile);
					
						header('location: ../views/cancel_appointment.html');
					}
					
				}else{
					echo "Give an Name";
				}
			}else{
				echo "Give an email";
			}
		}else{
			echo "Give a phone";
		}
	}
?>