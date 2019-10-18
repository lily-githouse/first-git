<?php
require './header.php';
//展示页面
$id = $_GET['id'];  //接受到的是html里查询字符串(GET方式)的id，
require '../labor/db.php';
$sql = "select * from news where id=$id";
$new=$mysql->query($sql)->fetch_assoc();
require '../view/index/second-text.html';






