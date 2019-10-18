<?php
$id=$_POST['id'];
require'../labor/db.php';
$sql="delete from online where id='$id'";
$mysql->query($sql);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"取消预约成功",
    ]);
}
else{
    echo json_encode([
        'code'=>404,
        'msg'=>"取消预约失败",
    ]);
}

