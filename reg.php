<?php

session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];




$server = "localhost";
$user = "root";
$pass = "";
$db = "database_bca";


$conn = new mysqli($server,$user,$pass,$db);

if($conn->connect_errno){
echo "error";
}

$e = mysqli_query($conn, "SELECT email FROM sensor_user where email='$email'");
$res = mysqli_num_rows($e);

if($res>0){
  $_SESSION['message']= "Email already taken";
  header('location:signup.php');
}
else{
$pass = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `sensor_user`(`id`, `name`, `email`, `password`) VALUES ('', '$name','$email','$pass')";

if($conn->query($sql)){
    $_SESSION['message']= "Successfully loggedin";
    header('location:login.php');
}

else{
  echo "error!";
}
}
$conn->close();

 ?>
