<?php

$server = "localhost";
$user = "root";
$p_s = "";
$db = "database_bca";

$email = $_POST['email'];
$pass = $_POST['password'];

$conn = new mysqli($server,$user,$p_s,$db);

if($conn->connect_errno){
echo "error";
}

$res = mysqli_query($conn, "select * from sensor_user where email='$email'");

if(mysqli_num_rows($res)>0){
  $row = mysqli_fetch_assoc($res);
  $verify = password_verify($pass, $row['password']);
  if($verify==1){

        header('location: index.php');
    }
    else{
      echo "Enter correct password!";
    }
  }


else{
  echo "Please enter correct email";
}

$conn->close();

?>
