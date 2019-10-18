<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {
    require '../view/admin/newsDetail.html';
} else {
    $data = $_POST;
    require '../labor/db.php';
    require '../labor/commen.php';
    $key = joinKeys($data);
    $value = joinValues($data);
    date_default_timezone_set("PRC");
    $data['ndt']=date("Y-m-d");
//    $data['ndh']= "select xname from news where id=ndid";            //新闻详情表的新闻名称应该是由列表页传过来的
    $sql = "insert into ndetail ($key) values($value)";
    $mysql->query($sql);
    if ($mysql->affected_rows > 0) {
        echo json_encode([
            'code' => 200,
            'msg' => "新闻详情插入成功",
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => "新闻详情插入失败",
        ]);
    }
}


