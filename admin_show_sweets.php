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
        <a class="nav-link" href="admin_show_maet.php">สูตรอาหาร</a>
      </li>
      <li class="nav-item">
          <a class="navbar-brand" href="admin_show_sweets.php">สูตรของหวาน</a>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-8">
            <img src="pic/sweet2.png" width="95%">
          </div>
          <div class="col-sm-4 box">
            <button type="button" class="btn btn-outline-warning d-flex" data-toggle="modal" data-target="#Modalmauu">
              <i class="fas fa-plus-circle"> เพิ่มตำรา</i>
            </button>
          </div>
<?php
  require 'cont.php';

  $query = "SELECT * FROM sweets_food";
  $result = mysqli_query($con, $query);
?>
          <table class="table thai">
            <thead class="thead-dark">
              <tr>
                <th scope="col">เมนู</th>
                <th scope="col">ผู้เขียน</th>
                <th scope="col"><i class="fas fa-pencil-alt"></i></th>
                <th scope="col"><i class="fas fa-trash-alt"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php while ($record = mysqli_fetch_array($result)) { ?>
              <tr>
                <td>
                  <a href="admin_sweets_data.php?ComID=<?php echo $record["id_sweets_food"];?>">
                    <?php echo $record["name_sweets_food"]; ?>
                  </a>
                </td>
                <td><?php echo $record["name_cook"]; ?></td>
                <td>
                  <a href="admin_edit_sweets.php?ComID=<?php echo $record["id_sweets_food"];?>">
                    <i class="fas fa-pencil-alt" style="font-size:18px" aria-hidden="true"></i>
                  </a>
                </td>
                <td>
                  <a href="admin_delete_sweets.php?ComID=<?php echo $record["id_sweets_food"];?>">
                    <i class="fas fa-trash-alt" style="font-size:18px" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
        </div>
      </div>
      <!--add-mamu-->
      <div class="modal fade" id="Modalmauu">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header text-white bg-dark thai">
                <h4 class="modal-title">เพิ่มตำรา</h4>
                <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body thai" style="padding-top:25px;padding-bottom:25px;padding-left:85px;">
              <form method="POST" action="add_sweets.php">
                <div class="form-group">
                  <label>ชื่อเมนู :</label>
                  <input type="text" class="form-control col-md-10" id="name_sweets_food" name="name_sweets_food" placeholder="กรุณาใส่ ชื่อเมนู">
                </div>
                <div class="form-group">
                <label for="Textarea1">วัตถุดิป</label>
                  <textarea class="form-control col-md-10" id="material" name="material" rows="3" placeholder="กรุณาใส่ วัตถุดิป"></textarea>
                </div>
                <div class="form-group">
                  <label for="Textarea2">วิธีทำ</label>
                  <textarea class="form-control col-md-10" id="method" name="method" rows="3" placeholder="กรุณาใส่ วิธีทำ"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ลิงค์วิดีโอ :</label>
                  <input type="text" class="form-control col-md-10" id="sweets_link" name="sweets_link" placeholder="กรุณาใส่ ลิงค์วิดีโอ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ผู้เขียนตำรา :</label>
                  <input type="text" class="form-control col-md-10" id="name_cook" name="name_cook" placeholder="กรุณาใส่ ผู้เขียนตำรา">
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
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
</body>
</html>