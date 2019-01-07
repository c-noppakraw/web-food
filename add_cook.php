<?php
    require 'cont.php';
    if (!$con) {
        die ("con fai " . myaqli_connect_error());
    }

    if(trim($_POST["name_admin"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก Username ');";
		echo "</script>";
	}

    if(trim($_POST["pass_admin"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก Passwork ');";
		echo "</script>";
    }
    
    if(trim($_POST["pass_admin"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก Passwork ');";
		echo "</script>";
	}

    $strSQL = "INSERT INTO employee (user_emp,pass_emp,name_emp) 
    VALUES (
            '".$_POST["user_emp"]."',
            '".$_POST["pass_emp"]."',
            '".$_POST["name_emp"]."'
            )";

    if (mysqli_multi_query($con, $strSQL)){
        header ("Location: admin_maneger.php");
    } else {
        echo "error: " . $strSQL . "<br>" . mysqli_error($con);
    }

?>