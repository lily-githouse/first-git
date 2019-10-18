<?php
//展示商品添加页面   插入数据
//判断请求方式
$method =$_SERVER['REQUEST_METHOD'];
require'../labor/db.php';
//get
if($method==="GET"){
    $sql="select * from category order by id asc";
    $result=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require'../view/admin/goodsInsert.html';
}else{
//    接收数据
    $data=$_POST;
//    补上上架时间字段
    date_default_timezone_set("PRC");
    $data['create_time']=date('Y-m-d h:i:s');//格式化日期 (转成的格式，时间戳)      10位的数字
    require'../labor/commen.php';
    $keys=joinKeys($data);
    $value=joinValues($data);
    $sql = "insert into goods ($keys) values($value)";
    $result=$mysql->query($sql);  //执行sql语句
    if($mysql->affected_rows>0){
        echo json_encode([
           'code'=>200,
           'msg'=>'添加商品成功',
        ]);
    }
    else{
        echo json_encode([
            'code'=>404,
            'msg'=>'添加商品失败',
        ]);
    }
}
?>