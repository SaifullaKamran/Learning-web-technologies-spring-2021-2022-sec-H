<?php 
session_start();
require('../models/userModel.php');

if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$appointment_date  = $_REQUEST['appointment_date'];
		$shift_desired = $_REQUEST['shift_desired'];
		$confirmation_requested_by      = $_REQUEST['confirmation_requested_by'];

		if($name != ""){
			if($email != ""){
				if($phone != ""){
					if(strlen($name)<3){
						echo "Error";
					}
					
					else{
						/*$_SESSION['fname']=$fname;
						$_SESSION['gender']=$gender;*/
						// $myfile = fopen('../models/book_appointment.txt', 'a');
						// $book_appointment = $name."|".$email ."|".$phone."|".$appointment_request."|".$morning_desired."|".$afternoon_desired."\r\n";
						// fwrite($myfile, $book_appointment);
						// fclose($myfile);
					
						// header('location: ../views/book_appointment.html');

						if(book_appointment($name, $email, $phone, $appointment_date, $shift_desired, $confirmation_requested_by)){
							echo "Appointment Successfully Booked!";
						}else{
							echo "Failed to book appointment!";
						}
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