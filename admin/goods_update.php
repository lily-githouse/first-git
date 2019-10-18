<?php
//请求方式
//get-展示页面
require '../labor/db.php';
$method=$_SERVER['REQUEST_METHOD'];
if($method==="GET"){
    $gid=$_GET["id"];
    $sql="select * from goods where id=$gid"; //只有一条数据
    $goods=$mysql->query($sql)->fetch_assoc();  //一维的关联数组
    $sql2="select * from category order by id asc";
    $result=$mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);//二维的关联数组
    require '../view/admin/goodsUpdate.html';
}else{
    //post--提交
    //提交更新
    $data=$_POST;
    $gid=$data['id'];
    unset($data['id']); //删掉一个元素
//    $sql="update goods set gname="",gthumb="" where id=$gid";
}






