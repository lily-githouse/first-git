<!--拼接数组属性-->
<?php
function joinKeys($arr){   //接收参数传递数组
    $str = '';
    foreach($arr as $key=>$value){
        $str .=$key.',';
    }
    $str = substr($str,0,-1);
    return $str;
}
//连接数组的值/元素
function joinValues($arr){   //接收参数传递数组
    $str = '';
    foreach($arr as $key=>$value){
        $str .="'$value',";
    }
    $str = substr($str,0,-1);
    return $str;
}

    /*拼接键值对
    $arr 关联数组
*/
function joinKeysValues($arr){
    $str='';
    foreach($arr as $key=>$value){
        $str .="$key='$value',";
    }
    $str=substr($str,0,-1);
    return $str;
}