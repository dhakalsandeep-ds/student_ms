<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:./user.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>

   <link rel="stylesheet" href="./form.css">

    <style>
         body{
        background-color: #3700B3;
    }
    
    label{
        color:white;
    }

    </style>

</head>
<body>
   
    <form method="post" action="../backend/login.php">
        <h3>Login Here</h3>

        <label for="Email">Email</label>
        <input type="text" placeholder="Email " name="email" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

       <input type="submit" name="submit"
       class="button"
       value="Log In">
       
    </form>
</body>
</html>
