<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,"root","8888");
date_default_timezone_set("Asia/Taipei");

// //查詢資料
// $find=all('invoice_form',["id"=>"8"]);
// foreach($find as $row){
//     echo "id=".$row['id'] ."<br>";
//     echo $row['code'] ."-";
//     echo $row['number'] ."-";
//     echo $row['period'] ."-";
//     echo $row['expend'] ;
//     echo "<hr>";
// }
//用法
function all($table,...$arg){
    global $pdo;
    $sql="select * from $table ";
   
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
                        //sprintf() 函數把格式化的字符串寫入一個變量中。  %s - 字符串
        }
        $sql=$sql." where " . implode(" && ",$tmp);
        //implode() 函數把數組元素組合為一個字符串。
    }
    if(isset($arg[1])){
        $sql=$sql . $arg[1];
        echo $sql;
    }

    //echo $sql;

    return $pdo->query($sql)->fetchAll();
}

//刪除資料(id)
function del($table,$arg){
    global $pdo;
    $sql="delete from $table ";
    
    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }else{
        $sql=$sql." where `id`='$arg'";
    }

    echo $sql;
    return $pdo->exec($sql);
}

//查詢單筆
function find($table,$arg){
    global $pdo;

    $sql="select * from $table ";

    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }else{
        $sql=$sql." where `id`='$arg'";
    }

    //echo $sql;

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

//計算筆數
function nums($table,...$arg){
    global $pdo;
    $sql="select count(*) from $table ";
    
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }

    if(isset($arg[1])){
        $sql=$sql . $arg[1];
    }

    //echo $sql;

    return $pdo->query($sql)->fetchColumn();
}

//萬用查詢
function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll();

}


//新增或更新資料
function save($table,$arg){
    global $pdo;
    if(isset($arg['id'])){
        //update
        foreach($arg as $key => $value){
            if($key!='id'){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }
    
        $sql="update $table set ".implode(',',$tmp)." where `id`='".$arg['id']."'";
    }else{
        //insert

        $sql="insert into $table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";
    }

    echo $sql;
    return $pdo->exec($sql);
}

//頁面導向
function to ($url){
    header("location:".$url);
}

?>