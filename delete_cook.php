<?php
$host ="localhost";
$username ="root";
$password ="";
$objDB = "webfood";
$con = mysqli_connect($host, $username, $password, $objDB);
			mysqli_query($con,"SET NAMES 'utf8' ");$strSQL = "DELETE FROM employee ";
$strSQL = "DELETE FROM employee ";
$strSQL .="WHERE id_emp = '".$_GET["ComID"]."' ";
$objQuery = mysqli_query($con,$strSQL);
if($objQuery)
{
    echo "Record Deleted.";
    echo "<script>";
    echo "window.location='admin_maneger.php';";
    echo "</script>";
}
else
{
	echo "Error Delete [".$strSQL."]";
}

?>
