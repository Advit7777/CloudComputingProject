<?php

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add'])){
        if(isset($_SESSION['gross'])){

            $myitems = array_column($_SESSION['gross'], 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems)){
                echo "<script>
                alert('item  already added');
                window.location.href='shoping.php';


                </script>";
            }

            else{
                $count = count($_SESSION['gross']);


            $_SESSION['gross'][$count] = array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
            print_r($_SESSION['gross']);
            echo "<script>
                alert('item added');
                window.location.href='shoping.php';


                </script>";
        }
    }
        else{
            $_SESSION['gross'][0]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
            echo "<script>
                alert('item added');
                window.location.href='shoping.php';


                </script>";
            
        }
    }

}




?>
