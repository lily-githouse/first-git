<?php
// 连接数据库
$mysql = new mysqli('localhost', 'root', '', 'headset', '3306');
// 判断；连接是否成功
if ($mysql->connect_errno) {
    die("数据库连接失败，失败原因是" . $mysql->connect_errno);
    exit();
}
//成功
//    设置查询字符集
$mysql->query('set names utf8');
