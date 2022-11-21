<?php
	// include("session.php");
	include("config.php");
	$email = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<h2>Update</h2>
<hr/>

<form action="edit.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($conn,"SELECT * FROM student WHERE email ='$email'");
	while($row = mysqli_fetch_array($result))
	{
    echo"<input type='text' placeholder='First name' name='firstname' value='{$row['firstname']}' required>";
    echo"<input type='text' placeholder='Middle name' name='middlename' value='{$row['middlename']}' required>";
    echo"<input type='text' placeholder='Last name' name='lastname' value='{$row['lastname']}' required>";
  	echo"<label><b>Birthday</b>";
    echo"<input type='date' name='birthdate' value='{$row['birthdate']}'required>";
    echo"</label>";
    echo"<input type='num' placeholder='age' name='age' value='{$row['age']}' required>";
    echo"<input type='email' placeholder='email' name='email' value='{$row['email']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
	echo"</div>";
	}?>
  </div>
</form>