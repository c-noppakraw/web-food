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
        <a class="navbar-brand" href="#">แก้ไขตำรา</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="show_maet.php">สูตรอาหาร</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Show_sweets.php">สูตรของหวาน</a>
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
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
      <div class="col-sm-12">
        <div class="box thai">
            <form method="POST" action="check_edit_cocktail.php">
                <input type="hidden" value="<?php echo $_GET["ComID"] ?>" name="id_cocktail">
                    <h4 class="text-center bg-warning text-dark">แก้ไขตำรา :</h4>
                    <div class="form-group">
                    <label>ลำดับ :</label>
                        <input type="text" class="form-control" id="id_cocktail" name="id_cocktail" value="<?php echo $id_cocktail; ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label>ชื่อเมนู :</label>
                        <input type="text" class="form-control" id="name_cocktail" name="name_cocktail" value="<?php echo $name_cocktail; ?>">
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
                        <input type="text" class="form-control" id="cocktail_link" name="cocktail_link" value="<?php echo $cocktail_link; ?>">
                    </div>
                    <label>ผู้เขียนตำรา :</label>
                        <input type="text" class="form-control" id="name_cook" name="name_cook" value="<?php echo $name_cook; ?>">
                    </div>
                    <div class="text-right text-danger">
                        <strong>* กรุณากรองข้อมูลให้ครบถ้วน</strong>
                    </div><hr>
                <button type="submit" class="btn btn-warning">ยืนยัน</button>
                <a href="show_cocktail.php">
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