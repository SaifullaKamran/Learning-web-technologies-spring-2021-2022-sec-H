<?php 
session_start();

if(isset($_REQUEST['submit'])){
		$department = $_REQUEST['department'];
		if($department != ""){
			
						/*$_SESSION['fname']=$fname;
						$_SESSION['gender']=$gender;*/
						$myfile = fopen('../models/select_department.txt', 'a');
						$department = $department."\r\n";
						fwrite($myfile, $department);
						fclose($myfile);
					
						header('location: ../views/select_department.html');
					
		}else{
			echo "Give a select_department";
		}
	}
?>