<?php
include "tool.php";

    $data=[
    'num'=>$_POST['num'],
    'period'=>$_POST['period'],
    ];
$res=save("money",$data);

if($res==1){
    header('Location: editnum.php');
}else{
    echo "輸入失敗";
    echo "上一頁";
   
}
?>
<a href="editnum.php"></a>
