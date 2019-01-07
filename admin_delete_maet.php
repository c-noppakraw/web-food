<?php
$host ="localhost";
$username ="root";
$password ="";
$objDB = "webfood";
$con = mysqli_connect($host, $username, $password, $objDB);
			mysqli_query($con,"SET NAMES 'utf8' ");$strSQL = "DELETE FROM meat_food ";
$strSQL = "DELETE FROM meat_food ";
$strSQL .="WHERE id_meat_food = '".$_GET["ComID"]."' ";
$objQuery = mysqli_query($con,$strSQL);
if($objQuery)
{
    echo "Record Deleted.";
    echo "<script>";
    echo "window.location='admin_show_maet.php';";
    echo "</script>";
}
else
{
	echo "Error Delete [".$strSQL."]";
}

?>
