<?php
require'../labor/db.php';
$sql="select * from nav_about order by nsort asc";
$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require'../view/index/header.html';
