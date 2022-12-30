<!-- Connect file -->
<?php
include('../includes/connect.php');

session_start();
?>



<!-- Add in the BOILER PLATE code for HTML  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Add in Bootstrap CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Add in Font Awesome LINK (cdnjs font awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Add in CSS file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <!-- Add in p-0 to container fluid to make the padding 0 -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <!-- Add in Logo below here -->
    <img src="../images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <!-- Add in / for href to direct it to home -->
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="../search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <ul class="navbar-nav me-auto">
        
<?php     
// Username on Navbar

if(!isset($_SESSION['username'])){
  echo "
        <li class='nav-item'>
        <a class='nav-link' href='./users_area/user_registration.php'>Welcome Guest</a>
        </li>";
}else{
  echo "
        <li class='nav-item'>
        <a class='nav-link' href='./users_area/profile.php'>Welcome, ".$_SESSION['username']."</a>
        </li>";}

// Login/Logout Button on Navbar

  if(!isset($_SESSION['username'])){
    echo "
          <li class='nav-item'>
          <a class='nav-link' href='./user_login.php'>Login</a>
          </li>";
  }else{
    echo "
          <li class='nav-item'>
          <a class='nav-link' href='logout.php'>Logout</a>
          </li>";}
?>        
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
<h3 class="text-center">Vicodes BookStore</h3>
    <p class="text-center">Seek Knowledge</p>
</div>

<!-- fourth child -->
<div class="row px-1">
    <!-- product -->
    <div class="col-md-12">
        <div class="row">
    <?php
            if(!isset($_SESSION['username'])){

                include('user_login.php');
              
            }else{
                include('payment.php');
            }

    ?>

        </div>
     <!--column end  -->
    </div>



</div>

<!-- last child -->
<!-- include footer -->
<?php include("../includes/footer.php"); ?>
    </div>
    



<!-- Add in Bootstrap JS LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>