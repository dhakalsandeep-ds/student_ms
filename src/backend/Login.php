<?php
 session_start();
  include './config.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  
  if(!isset($email) || !isset($password)){
    header("location:../frontend/Login.php?err='notset'");
  }

  

  $sql = "select id from users where password='$password' and email='$email'";
  echo $password;

  $result = mysqli_query($conn,$sql);
  echo $sql;

  $row = mysqli_fetch_assoc($result);
  $count = mysqli_num_rows($result);

  if($count == 1){
     $_SESSION['email'] = $email;
     $_SESSION['id'] = $row['id'];
     $_SESSION['name'] = $row['first_name'];
     header("Location:../frontend/user.php");
  }
  else{
    header("Location:../frontend/Login.php?err='passoremail'");
  }





?>