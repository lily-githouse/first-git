<?php
$file=$_FILES['file'];//追加上传文件的字段是file
//var_dump($file);  //输出是数组，有以下属性
//name:"";//上传文件的名字
//type=>"image.png"; //类型
//tmp_name=>""; //临时路径
//error=>0；//状态码
//size=>12344;  //单位是B
//tmp_name->uploads/20190927/xxx.png     //临时文件的位置--根目录->日期文件夹->文件名

//    1.判断uploads文件夹是否存在
//没有就创建
if(!is_dir('../uploads')){
    mkdir('../uploads');
};

//日期文件夹
$date=date("Ymd");
if(!is_dir('../uploads/'.$date)){
    mkdir('../uploads/'.$date);
}

//时间戳+随机数，防止文件名覆盖
$imgname=time().mt_rand(0,1000);
//扩展名--第一种写法
$ext = substr($file['type'],6);

//扩展名--第二种写法
//$ext=explode('/','$file[type]');
//$ext=array_pop($ext);
$imgname .='.'.$ext;

//要移动的位置
$movepath = '../uploads/'.$date.'/'.$imgname;
$webpath = '/PCproject/uploads/'.$date.'/'.$imgname;
$result= move_uploaded_file($file['tmp_name'],$movepath);

if($result){
    echo json_encode([
        'code'=>200,
        'msg'=>'图片文件上传成功',
        'src'=>$webpath,
    ]);
}
else{
    echo json_encode([
        'code'=>404,
        'msg'=>'图片文件上传失败',
    ]);
}
