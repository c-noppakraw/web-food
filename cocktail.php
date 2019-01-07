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
        <a class="nav-link" href="maet.php">สูตรอาหาร</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="sweets.php">สูตรของหวาน</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="cocktail.php">สูตรเครื่องดื่ม</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-end thai">
      <li class="nav-item">
        <a class="nav-link text-danger" href="#Modallogin" data-toggle="modal">สำหรับผู้ดูแล</a>      
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
          <div class="col-sm-12 text-center">
            <img src="pic/cock.png" width="95%">
          </div>
<?php
  require 'cont.php';

  $query = "SELECT * FROM cocktail";
  $result = mysqli_query($con, $query);
?>
          <table class="table thai">
            <thead class="thead-dark">
              <tr>
                <th scope="col">เมนู</th>
                <th scope="col">ผู้เขียน</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($record = mysqli_fetch_array($result)) { ?>
              <tr>
                <td>
                  <a href="cocktailinfo.php?ComID=<?php echo $record["id_cocktail"];?>">
                    <?php echo $record["name_cocktail"]; ?>
                  </a>
                </td>
                <td><?php echo $record["name_cook"]; ?></td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
        </div>
      </div>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
<!--login-->
<div class="modal fade" id="Modallogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header text-white bg-dark thai">
                    <h4 class="modal-title">เข้าสู่ระบบ</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body thai" style="padding-top:25px;padding-bottom:25px;padding-left:85px;">
                    <form id="formSignin">
                        <div class="form-group">
                            <label>ชื่อผู้ใช้ :</label>
                            <input type="text" class="form-control col-md-10" id="Username" name="Username" placeholder="กรุณาใส่ Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">รหัสผ่าน :</label>
                            <input type="password" class="form-control col-md-10" id="Password" name="Password"
                                placeholder="กรุณาใส่ Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="Role" name="Role">
                            <label class="form-check-label" for="Role">ฉันเป็นผู้ดูแลระบบ</label>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="signinButton" class="btn btn-warning">เข้าสู่ระบบ</button>
                    </form>
                </div>

                <div class="modal-footer bg-dark"></div>

            </div>
        </div>
    </div>
    <!---->
</body>
<script>
    $(`#signinButton`).click(() => {
        const data = $(`#formSignin`).serializeArray();
        $.ajax({
            url: "check_login.php",
            type: "post",
            data: data,
            success: (res) => {
                if (res == "success_1") {
                    window.location.href = "./admin_maneger.php"
                } else if (res == "success_2") {
                    window.location.href = "./show_maet.php"
                } else {
                    alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง")
                }
            }
        })
    })
</script>
</html>