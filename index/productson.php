<?php
require'./header.php';
require'../labor/db.php';
$id=$_GET['id'];  //接受到的是html里查询字符串(GET方式)的id，
$sql="select * from goods where id=$id";
$goods=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/index/productson.html';
