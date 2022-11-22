<?php
	// include("session.php");
	include("config.php");
    $query = "SELECT *FROM student";
    $result = mysqli_query($conn, $query)
    // $filter_result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 

</head>
<body>
<a href="login.html"> Login </a>
<h2>students List</h2>
<hr/>
<div class="container">
<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Search">
<button type="submit" class="signupbtn" name="search" >Search</button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Birth Date</th>
<th>Age</th>
<th>Email</th>
<th>Update</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['middlename'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['birthdate'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td><a href='update.php?email=".$row['email']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?email=".$row['email']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";

?>
<a href="register.php">Add Student</a>


</body>
</html> 