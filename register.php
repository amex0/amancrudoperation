<?php
// include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css" /> 
</head>
<body>
<form action="registeration.php" method="POST">
  <div class="container bdy">
    <h2>Register </h2>
    <hr>
    <form action="registeration.php" method ="POST">
          <input type="text" placeholder="First name" name="firstname" required>
          <input type="text" placeholder="Middle name" name="middlename" required>
          <input type="text" placeholder="Last name" name="lastname" required>
          <input type="date" name="birthdate" required>
          <input type="num" placeholder="age" name="age" required>
          <input type="email" placeholder="email" name="email" required>
          <div class="clearfix">
          <button type="submit" class="signupbtn">Register</button>
          <button type="reset" class="cancelbtn">Cancel</button>
    </form>
    </div>
  </div>
</form>