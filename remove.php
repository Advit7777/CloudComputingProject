<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['add'])){
}
if(isset($_POST['REMOVE_ITEM'])){
foreach($_SESSION['gross'] as $key=>$value){
if($value['Item_Name']==$_POST['Item_Name]){
unset($_SESSION['gross]['$key']);
$_SESSION['gross'] = array_values($_SESSION['gross']);
echo"<script>alert("Item removed")window.location href="mycart.php"</script>";
}
}
}
}
?>