<?php 
  

  session_start();

  include './config.php';

  $id = $_GET['sid'];
 

 include './config.php';

 $first_name = $_POST['firstName'];
 $last_name = $_POST['lastName'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phone_number = $_POST['phoneNumber'];
 $course = $_POST['course'];



$sql = "UPDATE student SET first_name = '$first_name', last_name = '$last_name', email= '$email', password='$password', phone_number = '$phone_number', course ='$course' where id='$id'";
echo $sql;

$result = mysqli_query($conn,$sql);


if($result == 1){
    header("Location:../frontend/student.php?er='update success'");
    
}
else{
    header("Location:../frontend/student.php?er='something went wrong'");
  

}




  ?>