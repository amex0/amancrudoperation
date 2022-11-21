<?php
  $conn = mysqli_connect('localhost','root','','register');
  if($conn){
      //echo "success";
  }else{
    die(mysqli_error($conn));
  }
?>
