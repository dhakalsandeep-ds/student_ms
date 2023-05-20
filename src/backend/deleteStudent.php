<?php 
  
  include './config.php';

//  echo $_SERVER['QUERY_STRING'];
$id =  $_GET['sid'];

 echo $id;

//  print_r($_SERVER['QUERY_STRING']);

 $sql = "delete from student where id='$id'";

 $sfw = mysqli_query($conn,$sql);

  if($sfw){
    echo "deleted";
    header("Location:../frontend/student.php");
  }else{
    echo "not deleted";
  }

?>