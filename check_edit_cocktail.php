<?php
    require 'cont.php';
    $ComID = $_REQUEST["id_cocktail"];
    $name_cocktail = $_REQUEST["name_cocktail"];
    $material = $_REQUEST["material"];
    $method = $_REQUEST["method"];
    $name_cook = $_REQUEST["name_cook"];
    $cocktail_link = $_REQUEST["cocktail_link"];

    $sql = "UPDATE `cocktail` SET `name_cocktail` = '$name_cocktail',
            `material` = '$material',
            `method` = '$method',
            `name_cook` = '$name_cook',
            `cocktail_link` = '$cocktail_link'
            WHERE `id_cocktail` = $ComID";
                        
    $result = mysqli_query($con, $sql);

    if (mysqli_multi_query($con, $sql)){
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขมูลเรียบร้อยแล้ว');";
        echo "window.location='show_cocktail.php';";
        echo "</script>";
    } else {
        echo "error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>