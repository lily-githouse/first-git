<?php
require'../labor/db.php';
$data=$_POST;
require'../labor/commen.php';
$key=joinKeys($data);
$value=joinValues($data);
$sql2="insert into online ($key) values($value)";
$mysql->query($sql2);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"预约插入成功",
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>"预约插入失败",
    ]);
}
