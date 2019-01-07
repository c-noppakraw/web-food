<?php
    require 'cont.php';
    $ComID = $_REQUEST["id_emp"];
    $user_emp = $_REQUEST["user_emp"];
    $pass_emp = $_REQUEST["pass_emp"];
    $name_emp = $_REQUEST["name_emp"];

    $sql = "UPDATE `employee` SET `user_emp` = '$user_emp',
            `pass_emp` = '$pass_emp',
            `name_emp` = '$name_emp'
            WHERE `id_emp` = $ComID";
                        
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