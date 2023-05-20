

<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location:./Login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add student here</title>
   
    <style>
     *{
        margin:0;
        padding:0;
        box-sizing: border-box;
     }

           body{
        background-color: #3700B3;
    }

  
    
    .header{
        display:flex;
        color:white;
        backdrop-filter: blur(5.5px);
        background-color: rgba(250,250,250,0.25);
        height:15px;
       justify-content: space-between;
       border-bottom: 1px solid white;
       height:50px;
       padding:10px;
       
    }


    .main {
        backdrop-filter: blur(5.5px);
        background-color: rgba(250,250,250,0.25);
        
        max-width:70%;
        height:80vh;
        margin:auto;
        margin-top:60px;
        color:white;
        border-radius:15px;
        
       
    }

    nav{
        display:flex;
        flex-direction:column;
        position:fixed;
       
        backdrop-filter: blur(5.5px);
        background-color: rgba(250,250,250,0.25);
        border-radius:15px;
        padding:10px;
        height:100vh;
        margin-bottom:10px;

    }

    nav div{
        padding:10px;
        border-bottom:1px solid white;
    }

    nav div a {
        color:white;
        text-decoration: none;
    }

    nav span{
        font-size:18px;
        cursor:default;
        color:white;
    }

    nav div:hover{
        background-color: purple;
    }
    
   

    </style>

<link href="../../fontawesome-free-6.4.0-web/css/all.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <div class="title"> Student management system</div>
        <div class="profile"><i class="fa-solid fa-user"></i> profile hello,</div>
    </div>

    <nav>
        
        <span>Dashboard</span>
        
        <div>
        
            <a href="/exam">
            <i class="fa-solid fa-list-check"></i> exam</a>
        </div>
        <div>
            
            <a href="./subject">
            <i class="fa-solid fa-book"></i>  
            subject</a>
        </div>
        <div>
            
            <a href="./teacher.php">
            <i class="fa-solid fa-person-chalkboard"></i>
    
            teacher</a>
        </div>
        <div>
            
            <a href="./student.php"><i class="fa-solid fa-children"></i> student</a>
        </div>
        <div>
            
            <a href="../backend/Logout.php">Logout</a>
        </div>
    </nav>

    <div class="main">

    
       <div> <a href="./addStudent.php" style="color:white;">add</a></div>

         <table border="1">
            <tr>
                <td>first_name</td>
                <td>last_name</td>
                <td>email</td>
                <td>phone_number</td>
                <td>password</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
            <?php 

   include '../backend/config.php';

   $sql = "select * from student";

   $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){

           echo "<tr>

             <td>$row[first_name] </td>

             <td>  $row[last_name]</td>
             <td>  $row[email] </td>
             <td>  $row[phone_number] </td>
             <td> $row[course]  </td>
             <td> $row[password] </td>
             <td> $row[created_at] </td>
             <td> $row[updated_at] </td>
             <td> <a href='../backend/deleteStudent.php?sid=$row[id]' style='color:white;'> delete</a> 
             <a href='./updateStudent.php?sid=$row[id]' style='color:white;'> update</a>            
             </td>
 


            </tr>";
         }
    }
?>
         </table>
    </div>

   
    
    
</body>
</html>