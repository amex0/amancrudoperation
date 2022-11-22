<?php
include("config.php");

$email = $_GET['email'];


$sql = "DELETE FROM student WHERE email='$email'";
if(mysqli_query($conn, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="students.php";';
	echo '</script>';

} 
else {
	echo '<script language="javascript">';
	echo 'alert("Error While Deleting!");';
	echo 'window.location="students.php";';
	echo '</script>';
}
?>