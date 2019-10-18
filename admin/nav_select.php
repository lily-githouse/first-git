<?php
//展示页面,获取数据
//引入db文件
require '../labor/db.php';
$sql = "select * from nav_about order by nsort desc";
//查询
$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/navSelect.html';
?>
