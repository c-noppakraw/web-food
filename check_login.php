<?php
    require 'cont.php';
    
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    if (isset($_POST["Role"])) {
      $role = $_POST["Role"];
    } else {
      $role = "off";
    }
    
           
            
			if ($role == "on") {
        $checklogin1 = "SELECT COUNT(*) FROM admin WHERE name_admin='$username' AND pass_admin='$password';";
            $query = mysqli_query($con,$checklogin1);
            
            while ($recond = mysqli_fetch_array($query)) {
                if ($recond[0] == 1) {
                  ob_start();
                  setcookie("username",$username,time()+3600);
                  ob_end_flush();
                  echo "success_1";
                }
                else {
                  echo "fail";
                }
              }
      }

            
            else {
              $checklogin2 = "SELECT COUNT(*) FROM employee WHERE user_emp='$username' AND pass_emp='$password';";
            $query = mysqli_query($con,$checklogin2);
            
            while ($recond = mysqli_fetch_array($query)) {
                if ($recond[0] == 1) {
                  ob_start();
                  setcookie("username",$username,time()+3600);
                  ob_end_flush();
                  echo "success_2";
                }
                else {
                  echo "fail";
                }
              }
            }

?>