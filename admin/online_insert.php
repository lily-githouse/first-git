<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method=="GET"){
    require'../view/admin/onlineInsert.html';
}
else {
    $data = $_POST;
    require '../labor/db.php';
    require '../labor/commen.php';
    $key = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into online ($key) values($value)";
    $mysql->query($sql);
    if ($mysql->affected_rows>0) {
        echo json_encode([
            'code' => 200,
            'msg' => "添加预约成功",
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => "添加预约失败",
        ]);
    }
}

