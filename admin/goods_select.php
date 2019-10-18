<?php
//引入连接数据库的文件
require '../labor/db.php';
//左向外链接
$sql="select goods.*,category.Cname from goods left join category on goods.cid=category.id";
$result=$mysql->query($sql);
//引入goodsSelect.html
require'../view/admin/goodsSelect.html';