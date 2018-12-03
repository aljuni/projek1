<!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">

    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    select {
      width: 100%;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      background-color: white;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    input[type=text]:focus {
      background-color: #FAFFBD;
    }

  </style>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> 
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
        <a href="" class="btn btn-dark">LOGIN</a>
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
      
        
        <div class="container">
      <div class="row">
        <div align="center" class="col-md-12">
           <img src="pictlogin/man.png" >
        </div>
      </div>
    </div>
     <br>
     <h5 align="center" style="font-size: 30px">LOGIN</h5>
    <div class="login">
      <div class="inset">
        <form action="cek_log.php" method="POST">
              <div>
            <span><label>Username/Email</label></span>
            <span><input type="text" name="username" class="textbox" autofocus="autofocus" placeholder="Masukan username/email"></span>
          </div>
          <div>
            <span><label>Password</label></span>
              <span><input type="password" name="password" class="password" placeholder="Masukan kata sandi"></span>
          </div>
          <hr>
          <div class="sign">
            <div class="submit">
              <input type="submit" value="LOGIN" >
            </div>
            <span class="forget-pass">
              <a href="#">Lupa Kata Sandi?</a>
            <span class="Daftar">
              <a href="daftar.php">Daftar</a>
            
            </span>
            
            </span>
            <div class="clear"> </div>
          </div>
        </form>
      </div>
    </div>
    <!---//end-main-->
  </div>

    <!-- Footer -->
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
