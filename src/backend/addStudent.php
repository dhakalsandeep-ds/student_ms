<?php

 include './config.php';

 $name = $_POST['firstName'];
 $last_name = $_POST['lastName'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phone_number = $_POST['phoneNumber'];
 $course = $_POST['course'];


$sql = "insert into student (first_name,last_name,email,phone_number,password,course) values ('$name','$last_name','$email','$phone_number','$password','$course')";
echo $sql;

$result = mysqli_query($conn,$sql);


if($result == 1){
    header("Location:../frontend/student.php?er='sucess'");
}
else{
    header("Location:../frontend/student.php?er='something went wrong'");
}

?>