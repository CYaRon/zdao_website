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
function read_numctn($table_name,$article_id){
    require("connect.php");
    $ip_address = getip();
    $article = $table_name ."zdxl". $article_id;
    $sql= "SELECT id FROM article_readnum WHERE table_name='{$table_name}' and article_id='{$article_id}' and ip_address='{$ip_address}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //not todo
    }else{
        //read_num+1
        $sql= "INSERT INTO article_readnum (table_name,article_id,ip_address,update_time) VALUE ('{$table_name}','{$article_id}','{$ip_address}',NOW())";
        $result = $conn->query($sql);
        $sql = "update {$table_name} set read_num = read_num+1 where id={$article_id}";
        $result = $conn->query($sql);
    }
    $conn->close();
}
// function like_numctn($table_name,$article_id){
//     require("connect.php");
//     $ip_address = getip();
//     $article = $table_name ."zdxl". $article_id;
//     $sql= "SELECT id FROM article_likenum WHERE table_name='{$table_name}' and article_id='{$article_id}' and ip_address='{$ip_address}'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         //not todo
//     }else{
//         //like_num+1
//         $sql= "INSERT INTO article_likenum (table_name,article_id,ip_address,update_time) VALUE ('{$table_name}','{$article_id}','{$ip_address}',NOW())";
//         $result = $conn->query($sql);
//         $sql = "update {$table_name} set like_num = like_num+1 where id={$article_id}";
//         $result = $conn->query($sql);
//     }
//     $conn->close();
// }
 ?>
