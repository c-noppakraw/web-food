<?php
    require 'cont.php';
    $ComID = $_REQUEST["id_sweets_food"];
    $name_sweets_food = $_REQUEST["name_sweets_food"];
    $material = $_REQUEST["material"];
    $method = $_REQUEST["method"];
    $name_cook = $_REQUEST["name_cook"];
    $sweets_link = $_REQUEST["sweets_link"];

    $sql = "UPDATE `sweets_food` SET `name_sweets_food` = '$name_sweets_food',
            `material` = '$material',
            `method` = '$method',
            `name_cook` = '$name_cook',
            `sweets_link` = '$sweets_link'
            WHERE `id_sweets_food` = $ComID";
                        
    $result = mysqli_query($con, $sql);

    if (mysqli_multi_query($con, $sql)){
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขมูลเรียบร้อยแล้ว');";
        echo "window.location='show_sweets.php';";
        echo "</script>";
    } else {
        echo "error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>