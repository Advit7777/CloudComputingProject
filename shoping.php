<?php
session_start();
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
    <link rel="stylesheet" href="newstyle.css">
  </head>
  <body>
  <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

</header>
<div class="container mt-5">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="oil.jpg" alt="image1" class=" img1 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">FORTUNE OIL</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.
            </p>
            <h5>
              <small><s class="text-secondary">RS.199</s></small>
              <span class="price">Rs.179</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="oil">
            <input type="hidden" name="Price" value="179">
          </div>

        </div>

      </form>
    </div>
<!-- second div -->
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="powder.webp" alt="image1" class="img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">CATCH RED CHILLI POWDER</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.45</s></small>
              <span class="price">Rs.40</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="chilli">
            <input type="hidden" name="Price" value="40">
          </div>

        </div>

      </form>

    </div>
<!-- third div -->
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="salt.jpg" alt="image1" class="img2 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">TATA SALT</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.25</s></small>
              <span class="price">Rs.20</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="salt">
            <input type="hidden" name="Price" value="20">
          </div>

        </div>

      </form>

    </div>
<!-- fourth div -->
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="tea.jpg" alt="image1" class="img3 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">TATA TEA</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.40</s></small>
              <span class="price">Rs.35</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="tea">
            <input type="hidden" name="Price" value="35">
          </div>

        </div>

      </form>

    </div>
    <!-- div 5 -->
    <div style="padding-top:50px;" class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="sugar.jpg" alt="image1" class="img4 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">Sugar</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.50</s></small>
              <span class="price">Rs.45</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="sugar">
            <input type="hidden" name="Price" value="45">
          </div>

        </div>

      </form>

    </div>
<!-- div 6 -->
    <div style="padding-top: 50px;" class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="nutri.webp" alt="image1" class="img5 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">NUTRI CHOICE COOKIES</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.150</s></small>
              <span class="price">Rs.110</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="cook">
            <input type="hidden" name="Price" value="110">
          </div>

        </div>

      </form>

    </div>
<!-- div 7 -->
    <div style="padding-top: 50px;" class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="ketchup.jpg" alt="image1" class="img4 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">KISSAN KETCHUP</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.160</s></small>
              <span class="price">Rs.150</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="ket">
            <input type="hidden" name="Price" value="150">
          </div>

        </div>

      </form>

    </div>
<!-- div 8 -->
    <div style="padding-top: 50px;" class="col-md-3 col-sm-6 my-3 my-md-0">
      <form class="" action="db.php" method="post">
        <div class="card shadow">
          <div>
            <img src="chips.jpeg" alt="image1" class="img4 img-fluid card-img-top">
          </div>

          <div class="card-body">
            <h5 class="card-title">LAYS CHIPS</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Best offer valid till 29th June
              Avail now.

            </p>
            <h5>
              <small><s class="text-secondary">RS.20</s></small>
              <span class="price">Rs.15</span>
            </h5>
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="chips">
            <input type="hidden" name="Price" value="15">
          </div>

        </div>

      </form>

    </div>

  </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Kirana</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Bootstrap js cdn -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>