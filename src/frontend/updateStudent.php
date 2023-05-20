<?php 

session_start();
// if(isset($_SESSION['id'])){
//     header("Location:./user.php");
// }


include '../backend/config.php';

$id = $_GET['sid'];





$sql = "SELECT * FROM student where id='$id'";
$result = mysqli_query($conn, $sql);

$first_name = '';
$last_name = "";
$email = "";
$phone_number= "";
$password = "";
$course = "";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $phone_number = $row["phone_number"];
        $password = $row["password"];
        $course = $row["course"];
 

      echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["email"]. $row["created_at"] ."<br>";
    }
  } else {
    echo "0 results";
  }






?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Update</title>

   <link rel="stylesheet" href="./form.css">
   <style>

    body{
        background-color: #3700B3;
    }
    input{
        background-color: transparent;
        border:1px solid white;
    }
    
    ::placeholder{
        color:white;
    }

    select{
        background-color: transparent;
        color: white;
        margin-top:30px;
        padding-left:10px;
        padding-right:10px;
        border:1px solid white;
        width:100%;
        height: 50px;
    }

    input{
        color:white;
    }

    .InputBox{
        position:relative;
        margin-top:30px;

    }

    .InputBox input:focus ~ label{
        
        top:-40px;
        left:5px;
        
        background-color: #7D59CE;
        color:rgb(9, 184, 243);
       
        
    }

    .InputBox input:focus{
       /* background-color: rgba(123, 120, 120, 0.13); */
       border:1px solid rgb(9, 184, 243);
       
    }

    .InputBox label{
        position:absolute;
        top:-15px;
        left:10px;
        font-weight: 200;
        color:white;
        

    }

    select option {
        background-color: #7D59CE;
        backdrop-filter: blur( 8.5px );
        color:white;
        height:50px;
        padding:15px;
        font-weight: 300;
    }

    h3{
        color:white;
    }

    .InputBox input:not(:placeholder-shown) + label{
        top:-40px;
        left:5px;
        
        background-color: #7D59CE;
        color:rgb(9, 184, 243);
    }

    /* .InputBox input:not(:focus){
        top:-4
    } */

    .btn{
    margin-top: 50px;
    width: 100%;
    background-color: transparent;
    color: white;
    border:1px solid white;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover{
    background-color: #3700B3;
}

   </style>

</head>
<body>




    <form method="POST" action= <?php echo "../backend/updateStudent.php?sid=$id" ?> >
        <h3>Update Here</h3>



   
    

        <div class="InputBox">
           
        <input type="text" name="firstName" placeholder=" " value= <?php echo $first_name ?>  >
        <label for="">first name</label>
        </div>
        
        <div class="InputBox">
           
        <input type="text" name="lastName" placeholder=" " value= <?php echo $last_name ?> >
        <label for="">Last Name</label>
        </div>


        <div class="InputBox">
           
        <input type="text" name="phoneNumber" placeholder=" " value= <?php echo $phone_number ?> >
        <label for="">Phone Number</label>
        </div>

        <div class="InputBox">
           
        <input type="text" name="course" placeholder=" " value= <?php echo $course ?> >
        <label for="">course</label>
        </div>


        <div class="InputBox">
           
        <input type="text" name="email" placeholder=" " value= <?php echo $email ?> >
        <label for="">Email</label>
        </div>
        
           
        
           
        
           
      
          
       



    

        <div class="InputBox">
           
            <input type="password" name="password" placeholder=" " value= <?php echo $password ?> >
            <label for="">Password</label>
            </div>

        <button type="submit" class="btn" value="submit">update</button>
       
    </form>
</body>
</html>
