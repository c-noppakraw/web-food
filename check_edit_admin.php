<?php
    require 'cont.php';
    $ComID = $_REQUEST["id_admin"];
    $name_admin = $_REQUEST["name_admin"];
    $pass_admin = $_REQUEST["pass_admin"];

    $sql = "UPDATE `admin` SET `name_admin` = '$name_admin',
            `pass_admin` = '$pass_admin'
            WHERE `id_admin` = $ComID";
                        
    $result = mysqli_query($con, $sql);

    if (mysqli_multi_query($con, $sql)){
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขมูลเรียบร้อยแล้ว');";
        echo "window.location='admin_maneger.php';";
        echo "</script>";
    } else {
        echo "error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>