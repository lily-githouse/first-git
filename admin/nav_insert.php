<?php
//判断请求方式
$method = $_SERVER['REQUEST_METHOD'];
//get
if ($method == "GET") {
    //引入文件view->navInsert.html(导航添加)
    require '../view/admin/navInsert.html';
} else {
    $data = $_POST;
    require'../labor/db.php';
    require '../labor/commen.php';
    $key = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into nav_about ($key) values($value)";
    $mysql->query($sql);
    if ($mysql->affected_rows > 0) {
        echo json_encode([
            'code' => 200,
            'msg' => "添加导航成功",
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => "添加导航失败",
        ]);
    }

}
