<?php
    require 'cont.php';
    if (!$con) {
        die ("con fai " . myaqli_connect_error());
    }

    if(trim($_POST["name_meat_food"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก ชื่อเมนู ');";
		echo "</script>";
	}

    if(trim($_POST["material"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก วัตถุดิป ');";
		echo "</script>";
    }
    
    if(trim($_POST["method"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก วิธีทำ ');";
		echo "</script>";
    }

    if(trim($_POST["meat_link"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก วิธีทำ ');";
		echo "</script>";
    }
    
    if(trim($_POST["name_cook"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก ผู้เขียนตำรา ');";
		echo "</script>";
	}

    $strSQL = "INSERT INTO meat_food (name_meat_food,material,method,meat_link,name_cook) 
    VALUES (
            '".$_POST["name_meat_food"]."',
            '".$_POST["material"]."',
            '".$_POST["method"]."',
            '".$_POST["meat_link"]."',
            '".$_POST["name_cook"]."'
            )";

    if (mysqli_multi_query($con, $strSQL)){
        header ("Location: show_maet.php");
    } else {
        echo "error: " . $strSQL . "<br>" . mysqli_error($con);
    }

?>