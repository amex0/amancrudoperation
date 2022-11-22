<?php
include("config.php");
// include("session.php");
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO student(firstname, middlename, lastname, birthdate, age, email) 
VALUES('$firstname', '$middlename', '$lastname', '$birthdate', '$age', '$email')";
if(mysqli_query($conn, $sql)){
    echo '<script language="javascript">';
	echo 'alert("New student was added!");';
	echo 'window.location="students.php";'; //GARA WINDOW registeritti deebisuuf 
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>