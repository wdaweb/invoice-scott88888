<?php
include "tool.php";

    $data=[
    'year'=>$_POST['year'],
    'code'=>$_POST['code'],
    'number'=>$_POST['number'],
    'expend'=>$_POST['expend'],
    'period'=>$_POST['period'],
    ];
$res=save("invoice_form",$data);
if($res==1){
    echo "1";
}else{
    echo "0";
    echo $sql;
}
?>