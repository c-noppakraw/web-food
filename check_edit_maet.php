<?php
    require 'cont.php';
    $ComID = $_REQUEST["id_meat_food"];
    $name_meat_food = $_REQUEST["name_meat_food"];
    $material = $_REQUEST["material"];
    $method = $_REQUEST["method"];
    $name_cook = $_REQUEST["name_cook"];
    $meat_link = $_REQUEST["meat_link"];

    $sql = "UPDATE `meat_food` SET `name_meat_food` = '$name_meat_food',
            `material` = '$material',
            `method` = '$method',
            `name_cook` = '$name_cook',
            `meat_link` = '$meat_link'
            WHERE `id_meat_food` = $ComID";
                        
    $result = mysqli_query($con, $sql);

    if (mysqli_multi_query($con, $sql)){
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขมูลเรียบร้อยแล้ว');";
        echo "window.location='show_maet.php';";
        echo "</script>";
    } else {
        echo "error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>