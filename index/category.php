<?php
//1:n
//db
require'../labor/db.php';
require'./header.php';
$id=$_GET['id'];

$sql="select * from nav_about where id=$id";  //点击不同导航跳转到对应页面
$navl=$mysql->query($sql)->fetch_assoc();
$tpl=$navl['ntpl'];

$sql2="select * from news order by id";
$new=$mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);


$is=file_exists('../view/index/'.$tpl.'.html');
if($is){
    require '../view/index/' . $tpl . '.html';
}else{
    require'../view/index/404.html';
}



//$data=[
//    'cname'=>"全部",
//    'goods'=>[
//        ['name','price',xxx],
//        ['name','price',xxx],
//        ['name','price',xxx],
//        ['name','price',xxx],
//    ],
//    ['cname'=>"沙发"],
//];
//$cate=[['id'=>0,'cname'=>"全部"]];
//$sql="select * from category order by id asc";
//$cate1=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//
//$cate=array_merge($cate,$cate1);  //合并数组
//$sql="select * from goods ";
//$all=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);//拿到了所有商品
//
//$len=count($cate);
////筛选商品
//for($i=0;$i<$len;$i++){
//    $items=$cate[$i];
//    $id=$items['id'];//分类的id
//    if($i==0){
//        $cate[$i]['goods']==$all;
//        continue;
//    }
//    $cate[$i]['goods']=array_filter($all,function($v) use($id){
//       return $v['cid']==$id;
//    });
//    $cate[$i]['goods']=$goods;
//}


//在底部渲染
//<?php foreach($cate as $v){?>
<!--}?>-->