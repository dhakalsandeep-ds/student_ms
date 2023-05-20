<?php

include 'config.php';



$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["email"]. $row["created_at"] ."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>