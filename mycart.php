<?php
include('header.php');
session_start();
// session_destroy();
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <!-- Bootstrap css cdn -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Font awesome link with bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>

     <div class="container">
       <div class="row">
         <div class="col-lg-12 text-center border rounded bg-light my-5">
           <h1>MY CART</h1>

         </div>

         <div class="col-lg-9">
           <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">QUANTITY</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['gross'])){
    foreach($_SESSION['gross'] as $key => $value){
      $total = $total+$value['Price'];
      echo"
      <tr>
      <td>1</td>
      <td>$value[Item_Name]</td>
      <td>$value[Price]</td>
      <td><input class='text-center' type='number' value = '$value[Quantity]' min = '1' max='10'></td>
      <form action= 'db.php' method='POST'>
      <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </form>
      </tr>
      ";
    }
  }
    ?>
  </tbody>
</table>

         </div>

         <div class="col-lg-3">
           <div class="border bg-light rounded p-4">
             <h4>Total: </h4>
             <h5><?php echo $total ?></h5>
             <form class="" action="index.php" method="post">

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Cash on delivery
  </label>
</div>
<br>
               <button type="button" class="btn btn-primary btn-block" name="button">Make Payment</button>
             </form>
           </div>

         </div>

       </div>

     </div>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
