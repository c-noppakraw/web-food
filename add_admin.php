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

    $strSQL = "INSERT INTO admin (name_admin,pass_admin) 
    VALUES (
            '".$_POST["name_admin"]."',
            '".$_POST["pass_admin"]."'
            )";

    if (mysqli_multi_query($con, $strSQL)){
        header ("Location: admin_maneger.php");
    } else {
        echo "error: " . $strSQL . "<br>" . mysqli_error($con);
    }

?>