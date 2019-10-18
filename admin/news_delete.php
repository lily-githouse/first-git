<?php
$id=$_POST["id"];
require'../labor/db.php';
$sql="delete from news where id=$id";
$mysql->query($sql);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"新闻列表删除成功",
    ]);
}
else{
    echo json_encode([
        'code'=>404,
        'msg'=>"新闻列表删除失败",
    ]);
}
