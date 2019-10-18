<?php
//引入db--连接数据库
require'../labor/db.php';
$sql="select * from category order by id asc ";
$result=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//引入cateSelect.html
require'../view/admin/cateSelect.html';




