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
        <a class="navbar-brand" href="admin_maneger.php">จัดการผู้ดูแลและอาจารย์</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_show_maet.php">สูตรอาหาร</a>
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
ิ<div class="container-fluid box">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="container-fluid">
        <div class="row box text-center thai">
          <div class="col-sm-6">
            <a href="#" data-toggle="modal" data-target="#Modaladmin">
              <img src="pic/interview.png" alt="ผู้ดูแลระบบ">
              <h4>เพิ่มผู้ดูแลระบบ</h4>
            </a>
          </div>
          <div class="col-sm-6">
            <a href="#" data-toggle="modal" data-target="#Modalcook">
              <img src="pic/baker.png" alt="ผู้เขียนตำรา">
              <h4>เพิ่มผู้เขียนตำรา</h4>
            </a>
          </div>
        </div>
        <div class="container-fluid box">
          <div class="row">
            <div class="col-sm-12 text-center">

<?php
  require 'cont.php';

  $query1 = "SELECT * FROM admin";
  $result1 = mysqli_query($con, $query1);

  $query2 = "SELECT * FROM employee";
  $result2 = mysqli_query($con, $query2);
?>

              <!---tap--->
              <div class="container">
                <ul class="nav nav-tabs thai">
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" href="#home">ผู้ดูแลระบบ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">ผู้เขียนตำรา</a>
                  </li>
              </ul>

              <div class="tab-content">
                <!---admind--->
                <div id="home" class="tab-pane fade in active thai">
                <table class="table table-borderless thai">
                      <thead class="thead-dark">
                          <tr>
                              <th><h6><small>ชื่อผู้ใช้</small></h6></th>
                              <th><i class="fa fa-pencil-square-o" style="font-size:18px" aria-hidden="true"></i></th>
                              <th><i class="fa fa-trash-o" style="font-size:18px" aria-hidden="true"></i></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while ($record = mysqli_fetch_array($result1)) { ?>
                            <tr>
                                <th><p><small><?php echo $record["name_admin"]; ?></small></p></th>
                                <th>
                                  <a href="edit_admin.php?ComID=<?php echo $record["id_admin"];?>">
                                      <i class="fa fa-pencil-square-o" style="font-size:18px" aria-hidden="true"></i>
                                  </a>
                                </th>
                                <th> 
                                  <a href="delete_admin.php?ComID=<?php echo $record["id_admin"];?>">
                                      <i class="fa fa-trash-o" style="font-size:18px" aria-hidden="true"></i>
                                  </a>
                                <th>
                            </tr>
                            <?php } ?>
                        </tbody>
                  </table>
                </div>
                <!---admind--->
                <!---cook--->
                <div id="menu1" class="tab-pane fade">
                <table class="table table-borderless thai">
                      <thead class="thead-dark">
                          <tr>
                              <th><h6><small>ชื่อผู้ใช้</small></h6></th>
                              <th><h6><small>ชื่อ - สกุล</small></h6></th>
                              <th><i class="fa fa-pencil-square-o" style="font-size:18px" aria-hidden="true"></i></th>
                              <th><i class="fa fa-trash-o" style="font-size:18px" aria-hidden="true"></i></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while ($record = mysqli_fetch_array($result2)) { ?>
                            <tr>
                                <th><p><small><?php echo $record["user_emp"]; ?></small></p></th>
                                <th><p><small><?php echo $record["name_emp"]; ?></small></p></th>
                                <th>
                                  <a href="edit_cook.php?ComID=<?php echo $record["id_emp"];?> ">
                                      <i class="fa fa-pencil-square-o" style="font-size:18px" aria-hidden="true"></i>
                                  </a>
                                </th>
                                <th> 
                                  <a href="delete_cook.php?ComID=<?php echo $record["id_emp"];?>">
                                      <i class="fa fa-trash-o" style="font-size:18px" aria-hidden="true"></i>
                                  </a>
                                <th>
                            </tr>
                            <?php } ?>
                        </tbody>
                  </table>
                </div>
                <!---cook--->
              </div>
            </div>
              <!---tap--->
            </div>
          </div>
        </div>
    <div class="col-sm-2"></div>
  </div>
</div>
<!--add-admin-->
<div class="modal fade" id="Modaladmin">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-white bg-dark thai">
          <h4 class="modal-title">เพิ่มผู้ดูแลระบบ</h4>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body thai" style="padding-top:25px;padding-bottom:25px;padding-left:85px;">
        <form method="POST" action="add_admin.php">
          <div class="form-group">
            <label>ชื่อผู้ใช้ :</label>
            <input type="text" class="form-control col-md-10" id="name_admin" name="name_admin" placeholder="กรุณาใส่ Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">รหัสผ่าน :</label>
            <input type="password" class="form-control col-md-10" id="pass_admin" name="pass_admin" placeholder="กรุณาใส่ Password">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
          <button type="submit" class="btn btn-warning">ตกลง</button>
        </form>
        </div>
        
        <div class="modal-footer bg-dark"></div>

      </div>
    </div>
</div>
<!---->
<!--add-cook-->
<div class="modal fade" id="Modalcook">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-white bg-dark thai">
          <h4 class="modal-title">เพิ่มอาจารย์</h4>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body thai" style="padding-top:25px;padding-bottom:25px;padding-left:85px;">
        <form method="POST" action="add_cook.php">
          <div class="form-group">
            <label>ชื่อผู้ใช้ :</label>
            <input type="text" class="form-control col-md-10" id="user_emp" name="user_emp" placeholder="กรุณาใส่ Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">รหัสผ่าน :</label>
            <input type="password" class="form-control col-md-10" id="pass_emp" name="pass_emp" placeholder="กรุณาใส่ Password">
          </div>
          <div class="form-group">
            <label>ชื่อ - นามสกุล :</label>
            <input type="text" class="form-control col-md-10" id="name_emp" name="name_emp" placeholder="กรุณาใส่ ชื่อผู้เขียนตำรา">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
          <button type="submit" class="btn btn-warning">ตกลง</button>
        </form>
        </div>
        
        <div class="modal-footer bg-dark"></div>

      </div>
    </div>
</div>
<!---->
</body>
</html>
