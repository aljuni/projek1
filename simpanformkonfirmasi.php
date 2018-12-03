
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.gakgaptek.com"><img src="picticon/facebook.png"/></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.gakgaptek.com"><img src="picticon/instagram.png"/></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><img src="picticon/whatsapp.png"/> : 083824976815</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      &nbsp; &nbsp;
      <div class="button">
        <a href="login.php" class="btn btn-dark">LOGIN</a>
      </div>
    </form>
    </div>
      </div>
    </div>
    </nav>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-md-12 navbar-expand-lg">
          <a href="index.php">
          <img  width="300" height="75" src="pictlogo/logo.png">
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row black bg-dark">    
        <div class="col-md-4">
          <a href="aboutus.php">
          <h2 align="center" style="font-size: 20px;color: white;">TENTANG KAMI</h2>
          </div>
          <div class="col-md-4">
            <a href=produkkami.php>
            <h2 align="center" style="font-size: 20px ;color: white;">PRODUK KAMI</h2>
            </div>
            <div class="col-md-4">
              <a href=workshop.php>
              <h2 align="center" style="font-size: 20px ;color: white;">WORKSHOP KAMI</h2>
            </div>
          </div>
          <br>
        </a>

<?php
  $con = new mysqli("localhost","root","","projek1")or die("koneksi gagal");
  $con->select_db("projek1");
  
  $sql = mysqli_query($con, "SELECT * FROM formkonfirmasi");
  $nih = mysqli_fetch_array($sql,MYSQLI_ASSOC); 
?>


<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Prosomi 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
