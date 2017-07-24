<?php

session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }
      $_SESSION['counter'] += 1;
   }

include 'config.php';

$name = $_POST["name"];
$subject = $_POST["subject"];
$place = $_POST["place"];
$numberofguests = $_POST["numberofguests"];
$cuisine = $_POST["cuisine"];
$religon = $_POST["religon"];
$theme = $_POST["theme"];


	$sql = "INSERT INTO input(name,subject,place,numberofguests,cuisine,religon,theme) VALUES ('$name','$subject','$place','$numberofguests','$cuisine','religon','theme')";
	$conn->query($sql) or die("FATAL ERROR OCCURED");
	header("LOCATION:result.php")
?>