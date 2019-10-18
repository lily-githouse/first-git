<?php
require'../labor/db.php';
$method=$_SERVER['REQUEST_METHOD'];
$sql="select * from news ";
$result=$mysql->query($sql);
require'../view/admin/newsSelect.html';

