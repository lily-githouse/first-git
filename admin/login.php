<?php
//1.展示登录页面，2.处理逻辑--验证
//请求方式 GET  POST  $_SERVER['REQUEST_METHOD'];->判断方式
//GET->(引入文件)包括:require:'../view/admin/login.html'

if ($_SERVER['REQUEST_METHOD'] == "GET") {
//    1.
    require '../view/admin/login.html';
} else {
//    2.验证
//    接收数据
    $data = $_POST;
//    用户名：
    $username = $data['names'];
//    密码(加密)
    $password = md5(crypt($data['password'], 'md5(789lo)'));  //注意加密的时候第一个参数不写引号
    // 连接数据库
    $mysql = new mysqli('localhost', 'root', '', 'headset', '3306');
//  判断；连接是否成功
    if ($mysql->connect_errno) {
        die("数据库连接失败，失败原因是" . $mysql->connect_errno);
        exit();
    }
//成功
//    设置查询字符集
    $mysql->query('set names utf8');
//    sql语句
    $sql = "select * from manager where username='$username'";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);  //二维数组
    $count = count($result); //将数组长度保存
    if ($count) {
        if ($result[0]['password'] === $password) {   //数据库密码===前台输入密码?
            echo json_encode([
                'code' => 200,
                'msg' => '登录成功',
            ]);
            exit();
        } else {
            echo json_encode([
                'code' => 400,
                'msg' => '用户名和密码不匹配',
            ]);
        }
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '用户名不存在',
        ]);
    }
}


