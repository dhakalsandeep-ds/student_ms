<?php 
  
  include './config.php';

//  echo $_SERVER['QUERY_STRING'];
$id =  $_GET['sid'];

 echo $id;

//  print_r($_SERVER['QUERY_STRING']);

 $sql = "delete from teacher where id='$id'";

 $sfw = mysqli_query($conn,$sql);

  if($sfw){
    echo "deleted";
    header("Location:../frontend/teacher.php");
  }else{
    echo "not deleted";
  }

?>