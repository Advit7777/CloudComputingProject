<?php
$s = "localhost";
$u = "root";
$p = "";
$db = "gross";

$con = new mysqli($s,$u,$p,$db);

if($con->connect_error){

    echo "not connected";
}

else{

    echo "connected";
}
?>