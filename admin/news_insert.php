<?php
require'../labor/db.php';
//判断请求方式
$method=$_SERVER['REQUEST_METHOD'];
if($method=='GET'){
    require'../view/admin/newsInsert.html';
}
else{
    $data = $_POST;
    //    补上新闻上传时间字段
    date_default_timezone_set("PRC");
    $data['xtime']=date("Y-m-d");  //添加字段
    require '../labor/commen.php';
    $key = joinKeys($data);
    $value = joinValues($data);
    $sql="insert into news ($key) values($value)";
    $mysql->query($sql);
    if($mysql->affected_rows>0){
        echo json_encode([
            'code'=>200,
            'msg'=>"新闻列表添加成功",
        ]);
    }
    else{
        echo json_encode([
            'code'=>404,
            'msg'=>"新闻列表添加失败",
        ]);

    }

}
