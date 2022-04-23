<?php 
	session_start();
	require('../models/userModel.php');

	$conn = getConnection();
	$phone= $_GET['phone'];
		$sql = "select * from book_appointment where phoneNumber='{$phone}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			echo '<b> Congratulations! Number Found </b>';
		}else{
			echo '<b> Sorry! Number not Fouund </b>';
		}
?>