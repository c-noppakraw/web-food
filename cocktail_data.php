<?php
  require 'cont.php';

  $query = "SELECT * FROM cocktail WHERE id_cocktail = '".$_GET["ComID"]."' ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  extract($row);
?>
<!DOCTYPE html>
<html lang="TH-th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>ตำราลับ</title>
    <style>
      a:link {
        color: rgb(0, 0, 0);
        text-decoration: none;
      }

      a:visited {
        color: rgb(0, 0, 0);
        text-decoration: none;
      }

      a:hover {
        color:rgb(250, 209, 28);
        text-decoration: none;
      }
    </style>
</head>
<body class="bg-body">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="collapse navbar-collapse thai">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="navbar-brand thai" href="index.html">
          <img src="pic/logo1.png" width="35" height="35" class="d-inline-block align-top">
          <small>Secret Cookbook</small>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show_maet.php">สูตรอาหาร</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="show_sweets.php">สูตรของหวาน</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="show_cocktail.php">สูตรเครื่องดื่ม</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-end thai">
      <li class="nav-item">
          <a class="nav-link text-dark" href="#">
            <?php echo $_COOKIE["username"];?>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="index.html">ออกจากระบบ</a>      
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid box">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="thai box">
                <h2><?php echo $name_cocktail; ?> <i class="fas fa-utensils text-warning"></i></h2>
                <div class="text-center"><br>
                    <iframe width="843" height="350" src="<?php echo $cocktail_link; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                </div><br>
                <h5><strong class="text-danger">ที่มา : </strong><?php echo $cocktail_link; ?></h5>
            </div>
            <div class="thai box">
                <p><strong>วัตถุดิป</strong></p>
                <p><?php echo $material; ?></p>
                <p><strong>วิธีทำ</strong></p>
                <p><?php echo $method; ?></p>
            </div>
            <div class="text-right thai box">
                <p><strong>ผู้เขียน</strong></p>
                <p><?php echo $name_cook; ?></p>
            </div><br>
        </div>
        <div class="col-sm-2"></div>
      </div>
</div>
</body>
</html>