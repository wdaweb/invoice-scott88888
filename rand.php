<?php
include "tool.php";
$num=100;
$char=["A","B","C","D","E","F","G","H","I","J","K","L"];

for($i=0;$i<$num;$i++){
$code=$char[rand(0,11)] .$char[rand(0,11)];
$data=[
    'year'=>'2020',
    'code'=>$code,
    'number'=>rand(12312313,99999999),
    'expend'=>rand(100,10000),
    'period'=>rand(1,6),

];


save("invoice_form",$data);
}


?>