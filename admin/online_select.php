<?php
require'../labor/db.php';
$sql="select * from online";
$result=$mysql->query($sql);
require'../view/admin/onlineSelect.html';
