<?php
	$servername = "localhost";
    $username = "username";
    $password = "";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error)
{
    die("connection failed");
}   
$sql = "INSERT INTO `login details`(`email`, `password`) VALUES ($username,$password))";
$conn ->close();
?>

