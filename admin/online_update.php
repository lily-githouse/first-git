<?php
$arr=$_POST;
$data=$arr["name"];
$value=$arr["value"];
$id=$arr["id"];
require'../labor/db.php';
$sql="update online set $data='$value' where id=$id";
$result=$mysql->query($sql);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"修改预约成功",
    ]);
}
else{
    echo json_encode([
        'code'=>404,
        'msg'=>"修改预约失败",
    ]);
}
