<?php
//引入db文件连接数据库
//require'../labor/db.php';
//$data=$_POST;
//$sql="delete from nav_about where id=value['id']";   //
//$result=$mysql->query($sql);
//if($mysql->affected_rows>0){
//    echo json_encode([
//        'code'=>200,
//    'msg'=>"删除导航成功",
//    ]);
//}
//else{
//    echo json_encode([
//        'code'=>404,
//        'msg'=>"删除导航失败",
//    ]);
//}
//事件委派方法
//删除
$arr = $_POST;
$id = $arr['id'];
require'../labor/db.php';
$sql = "delete from nav_about where id='$id'";
$mysql->query($sql);
if ($mysql->affected_rows > 0) {
    echo json_encode([
        'code' => 200,
        'msg' => '删除成功',
    ]);
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '删除失败',
    ]);
}
?>

