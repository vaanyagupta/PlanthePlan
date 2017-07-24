<?php

include 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$regID = $_POST["regID"];
$sql= "CREATE TABLE user1(name varchar(30), email varchar(40))";
$conn->query($sql);

if($password === $c_password){
	$sql = "INSERT INTO user(name,email,password,regID) VALUES ('$name','$email','$password','$regID')";
	$conn->query($sql) or die("FATAL ERROR OCCURED");
	header("LOCATION:login.php");
}

?>