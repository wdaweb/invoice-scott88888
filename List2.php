<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/my.css">
    <link rel="shortuct icon" href="imgs/1591068508.ico" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&family=Roboto:wght@100&family=Teko:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a1827a07d.js" crossorigin="anonymous"></script>
    <script src="plugins/jquery-3.5.1.min.js"></script>
    <script src="plugins/bootstrap.bundle.min.js"></script>
    <style>
    a {color:lightgreen;}
    </style>
</head>
<body background="../invoice/imgs/w1680.jpg">

<?php
include "tool.php";
$period=ceil(date("n")/2);
if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$sql="SELECT * FROM invoice_form where period='$period'";

$rows=$pdo->query($sql)->fetchAll();
?>
<div class="text-center">
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg ">新增發票</a>
    <a href="List.php?period=1"><button type="button" class="btn btn-secondary btn-lg ">中獎發票</a>
    <a href="List2.php?period=1"><button type="button" class="btn btn-secondary btn-lg ">發票列表</a>
    <a href="editnum.php"><button type="button" class="btn btn-secondary btn-lg ">新增獎號</a>
    </div> 
<div class="text-center">
<ul>
<a class="btn btn-secondary mt-2" href="List2.php?period=1" <?=($period==1)?>>第1期(1,2)</a>
<a class="btn btn-secondary mt-2" href="List2.php?period=2" <?=($period==2)?>>第2期2(3,4)</a>
<a class="btn btn-secondary mt-2" href="List2.php?period=3" <?=($period==3)?>>第3期3(5,6)</a>
<a class="btn btn-secondary mt-2" href="List2.php?period=4" <?=($period==4)?>>第4期4(7,8)</a>
<a class="btn btn-secondary mt-2" href="List2.php?period=5" <?=($period==5)?>>第5期5(9,10)</a>
<a class="btn btn-secondary mt-2" href="List2.php?period=6" <?=($period==6)?>>第6期6(11,12)</a>
</ul>


<table class="table  table-black:text-center">
<thead>
<tr class="text-center">
    <th style="color:white" scope="col">編號</td>
    <th style="color:white" scope="col">標記</td>
    <th style="color:white" scope="col">號碼</td>
    <th style="color:white" scope="col">花費</td>
</tr>
</thead>
  
  
    

<?php
foreach($rows as $row){

?>
<tr class="text-center">
    <!-- <th scope="row"></th> -->
    <td style="color:white"><?=$row['id'];?></td>
    <td style="color:white"><?=$row['code'];?></td>
    <td style="color:white"><?=$row['number'];?></td>
    <td style="color:white"><?=$row['expend'];?></td>
</tr>


      
  


<?php
}
?>
</table>

</body>
</html>

