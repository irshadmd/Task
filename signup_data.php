<?php
session_start();
include 'includes/conn.php';

$status="";
if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    
    $sql = "INSERT INTO user (name,email,password)
            VALUES('$name','$email','$password')";
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Registered Successfully!';
    } else {
        $_SESSION['error'] = $conn->error; 
    }
}
header('location:signup.php');
