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
    header('Location: editnum.php');
}else{
    echo "輸入失敗";
    echo "上一頁";
   
}
?>
<a href="editnum.php"></a>
