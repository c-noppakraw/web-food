<?php
    require 'cont.php';
    if (!$con) {
        die ("con fai " . myaqli_connect_error());
    }

    if(trim($_POST["name_sweets_food"]) == "")
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

    if(trim($_POST["sweets_link"]) == "")
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

    $strSQL = "INSERT INTO sweets_food (name_sweets_food,material,method,sweets_link,name_cook) 
    VALUES (
            '".$_POST["name_sweets_food"]."',
            '".$_POST["material"]."',
            '".$_POST["method"]."',
            '".$_POST["sweets_link"]."',
            '".$_POST["name_cook"]."'
            )";

    if (mysqli_multi_query($con, $strSQL)){
        header ("Location: Show_sweets.php");
    } else {
        echo "error: " . $strSQL . "<br>" . mysqli_error($con);
    }

?>