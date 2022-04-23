<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "patient";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	function logincheck($username, $password){
		$conn = getConnection();
		$sql = "select * from login where username='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signupcheck($username, $password, $email){
		$conn = getConnection();
		$sql = "insert into signup values('{$username}', '{$password}', '{$email}')";
		$loginSql =  "insert into login values('{$username}', '{$password}')";

		if(mysqli_query($conn, $sql)){
			if(mysqli_query($conn, $loginSql)){
				echo "Signup Successful!";
				return true;
			}
		}else{
			return false;
		}
	}

	function book_appointment($name, $email, $phone, $appointment_date, $shift_desired, $confirmation_requested_by){
		$conn = getConnection();
		$sql = "insert into book_appointment (name, email, phoneNumber, appointment_date, appointment_shift, confirmation_requested_by) values('{$name}', '{$email}', '{$phone}', '{$appointment_date}', '{$shift_desired}', '{$confirmation_requested_by}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function cancel_appointment($name, $email, $phone, $cancel_requested_by){
		$conn = getConnection();
		$sql = "insert into cancel_appointment (name, email, phone, cancel_requested_by) values('{$name}', '{$email}', '{$phone}', '{$cancel_requested_by}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	// function getAllUser(){
	// 	$conn = getConnection();
	// }

	// function getUserById($id){
	// 	$conn = getConnection();
	// }

	// function updateUser($user){
	// 	$conn = getConnection();
	// }

?>