<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE email = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Register First!!';
		}
		else{
			$row = $query->fetch_assoc();
			if($password == $row['password']){
				$_SESSION['user'] = $row['email'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
	}

	header('location: login.php');
