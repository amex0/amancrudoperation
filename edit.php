<?php
include('config.php');
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql= "update student set firstname=\"$firstname\", middlename=\"$middlename\",
 lastname=\"$lastname\", birthdate=\"$birthdate\", age=$age, email=\"$email\" 
 where email =\"$email\"";
if(mysqli_query($conn,$sql)){
    echo '<script language="javascript">';
	echo 'alert("student info updated!");';
	echo 'window.location="students.php";'; //GARA WINDOW registeritti deebisuuf 
	echo '</script>';
	
}
else{
    echo "could't updated".mysqli_error($conn);
}
?>