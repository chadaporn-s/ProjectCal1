<?php
    $w =$_GET['widht'];
    $h =$_GET['height'];

    $area = $w*$h;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div>
            <p class="fs-1 bg bg-primary text-white mt-3 p-3">โปรแกรมคำนวณหาสี่เหลี่ยม</p>
        </div>
        <div class="row justify-content-around">
        <div class="alert alert-danger col-5 " role="alert">
        <?php
        echo "ความกว้าง = ".$w . "เซนติเมตร <br>";
        echo "ความยาว =".$h. "เซนติเมตร <br>";
        
    
        ?>
         </div>
        <div class="alert alert-warning col-5 " role="alert">
        <?php
        echo "พื้นที่สี่เหลี่ยมผืนผ้า = " .$area. "ตารางเซนติเมตร";
        ?>
         </div>
</body>
</html>