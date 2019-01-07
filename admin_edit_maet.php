<?php
  require 'cont.php';

  $query = "SELECT * FROM meat_food WHERE id_meat_food = '".$_GET["ComID"]."' ";
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
    <script src="main.js"></script>
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
        <a class="navbar-brand" href="admin_maneger.php">จัดการผู้ดูแลและอาจารย์</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="admin_show_maet.php">สูตรอาหาร</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="admin_show_sweets.php">สูตรของหวาน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_show_cocktail.php">สูตรเครื่องดื่ม</a>
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
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
      <div class="col-sm-12">
        <div class="box thai">
            <form method="POST" action="admin_check_edit_maet.php">
                <input type="hidden" value="<?php echo $_GET["ComID"] ?>" name="id_meat_food">
                    <h4 class="text-center bg-warning text-dark">แก้ไขตำรา :</h4>
                    <div class="form-group">
                    <label>ลำดับ :</label>
                        <input type="text" class="form-control" id="id_meat_food" name="id_meat_food" value="<?php echo $id_meat_food; ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label>ชื่อเมนู :</label>
                        <input type="text" class="form-control" id="name_meat_food" name="name_meat_food" value="<?php echo $name_meat_food; ?>">
                    </div>
                    <div class="form-group">
                        <label>วัตถุดิป :</label>
                        <textarea class="form-control col-md-10" id="material" name="material" rows="15"><?php echo $material; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>วิธีทำ :</label>
                        <textarea class="form-control col-md-10" id="method" name="method" rows="15"><?php echo $method; ?></textarea>
                    </div>
                    <div class="form-group">
                    <label>ลิงค์วิดีโอ :</label>
                        <input type="text" class="form-control" id="meat_link" name="meat_link" value="<?php echo $meat_link; ?>">
                    </div>
                    <label>ผู้เขียนตำรา :</label>
                        <input type="text" class="form-control" id="name_cook" name="name_cook" value="<?php echo $name_cook; ?>">
                    </div>
                    <div class="text-right text-danger">
                        <strong>* กรุณากรองข้อมูลให้ครบถ้วน</strong>
                    </div><hr>
                <button type="submit" class="btn btn-warning">ยืนยัน</button>
                <a href="admin_show_maet.php">
                    <button type="button" class="btn btn-secondary">ยกเลิก</button>
                </a>
            </form><br><br>
        </div>
      </div>
      </div>
      <div class="col-sm-3"></div>
      </div>
    </div>
</body>
</html>