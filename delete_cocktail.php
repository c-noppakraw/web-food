<?php
$host ="localhost";
$username ="root";
$password ="";
$objDB = "webfood";
$con = mysqli_connect($host, $username, $password, $objDB);
			mysqli_query($con,"SET NAMES 'utf8' ");$strSQL = "DELETE FROM cocktail ";
$strSQL = "DELETE FROM cocktail ";
$strSQL .="WHERE id_cocktail = '".$_GET["ComID"]."' ";
$objQuery = mysqli_query($con,$strSQL);
if($objQuery)
{
    echo "Record Deleted.";
    echo "<script>";
    echo "window.location='show_cocktail.php';";
    echo "</script>";
}
else
{
	echo "Error Delete [".$strSQL."]";
}

?>
