<?php
$arr=$_POST;
$data=$arr['value'];
$name=$arr['name'];
$id=$arr['id'];
require'../labor/db.php';
$sql = "update nav_about set $name='$data' where id=$id";
$mysql->query($sql);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"更新成功",
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>"更新失败",
    ]);
}

