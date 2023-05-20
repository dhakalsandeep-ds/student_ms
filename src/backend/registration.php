<?php

 include './config.php';

 $name = $_POST['firstName'];
 $last_name = $_POST['lastName'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phone_number = $_POST['phoneNumber'];


$sql = "insert into users (first_name,last_name,email,phone_number,password) values ('$name','$last_name','$email','$phone_number','$password')";
echo $sql;

$result = mysqli_query($conn,$sql);


if($result == 1){
    header("Location:../frontend/Login.php?er='sucess'");
}
else{
    header("Location:../frontend/registration.php?er='something went wrong'");
}

?>