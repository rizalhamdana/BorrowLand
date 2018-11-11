<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme --> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?= 'assets/custom/css/custom2.css';?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Borrow Land</title>
</head>

<body>
<nav class="navbar-inverse navbar-static-top" style="background-color: ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only" style="color: white;">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?='Home'?>"><img src="assets/logoBL.png" style="max-height: 30px;margin-top: -12px; display: inline-block;" class="img-responsive"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?='Home'?>">Home</a></li>
        <?php 
          if($this->session->has_userdata('username')){
            ?><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('username');?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= 'Products'?>">Inventori</a></li>
                <li><a href="<?='Peminjaman';?>">Keranjang</a></li>
                <li><a href="<?='Permintaan';?>">Permintaan</a></li>
                <li><a href="<?= 'SejarahPeminjaman'?>">Sejarah Peminjaman</a></li>
                <li><a  href="<?='Login/logout';?>">Log Out</a></li>
              </ul>
            </li>
          <?php
          }else{?>
            <li><a href="<?='Login';?>">Masuk</a></li>
            <li><a href="<?='Registrasi';?>">Daftar</a></li>
          <?php
        }
          ?>
      </ul>
      <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pencarian">
      </div>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
    </div>
  </div>
</nav>