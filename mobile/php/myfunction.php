<?php

function getip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip是否来自共享网络
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip是否来自代理
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        //ip是否来自远程地址
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
}

function mymd5($pwd){
    $str = (string)getip()."+zdxl+".$pwd;
    return md5($str);
}

 ?>
