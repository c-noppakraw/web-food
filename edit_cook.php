<?php
  require 'cont.php';

  $query = "SELECT * FROM employee WHERE id_emp = '".$_GET["ComID"]."' ";
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
        <a class="navbar-brand" href="#">แก้ไขผู้ดูแล</a>
      </li> 
      <li class="nav-item">
          <a class="nav-link" href="admin_maneger.php">จัดการผู้ดูแลและอาจารย์</a>
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
            <form method="POST" action="check_edit_cook.php">
                <input type="hidden" value="<?php echo $_GET["ComID"] ?>" name="id_emp">
                    <h4 class="text-center bg-warning text-dark">แก้ไขผู้ดูแล :</h4>
                    <div class="form-group">
                    <label>ลำดับ :</label>
                        <input type="text" class="form-control" id="id_emp" name="id_emp" value="<?php echo $id_emp; ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label>ชื่อผู้ใช้ :</label>
                        <input type="text" class="form-control" id="user_emp" name="user_emp" value="<?php echo $user_emp; ?>">
                    </div>
                    <div class="form-group">
                        <label>รหัสผ่าน :</label>
                        <input type="text" class="form-control" id="pass_emp" name="pass_emp" value="<?php echo $pass_emp; ?>">
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - สกุล :</label>
                        <input type="text" class="form-control" id="name_emp" name="name_emp" value="<?php echo $name_emp; ?>">
                    </div>
                    <div class="text-right text-danger">
                        <strong>* กรุณากรองข้อมูลให้ครบถ้วน</strong>
                    </div><hr>
                <button type="submit" class="btn btn-warning">ยืนยัน</button>
                <a href="admin_maneger.php">
                    <button type="button" class="btn btn-secondary">ยกเลิก</button>
                </a>
            </form>    
        </div>
      </div>
      </div>
      <div class="col-sm-3"></div>
      </div>
    </div>
</body>
</html>