<?php
$host ="localhost";
$username ="root";
$password ="";
$objDB = "webfood";
$con = mysqli_connect($host, $username, $password, $objDB);
			mysqli_query($con,"SET NAMES 'utf8' ");$strSQL = "DELETE FROM sweets_food ";
$strSQL = "DELETE FROM sweets_food ";
$strSQL .="WHERE id_sweets_food = '".$_GET["ComID"]."' ";
$objQuery = mysqli_query($con,$strSQL);
if($objQuery)
{
    echo "Record Deleted.";
    echo "<script>";
    echo "window.location='show_sweets.php';";
    echo "</script>";
}
else
{
	echo "Error Delete [".$strSQL."]";
}

?>
