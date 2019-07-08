<?php
/**
 * 基于PHP的 mb_substr，iconv_substr 这两个扩展来截取字符串，中文字符都是按1个字符长度计算；
 * 该函数仅适用于utf-8编码的中文字符串。
 *
 * @param  $str      原始字符串
 * @param  $length   截取的字符数
 * @param  $append   替换截掉部分的结尾字符串
 * @return 返回截取后的字符串
 */
function sub_str($str, $length = 0, $append = '…') {
    //$str = trim($str);
    $str = strip_tags($str);
    $strlength = strlen($str);

    if ($length == 0 || $length >= $strlength) {
        return $str;
    } elseif ($length < 0) {
        $length = $strlength + $length;
        if ($length < 0) {
            $length = $strlength;
        }
    }

    if ( function_exists('mb_substr') ) {
        $newstr = mb_substr($str, 0, $length, 'utf-8');
    } elseif ( function_exists('iconv_substr') ) {
        $newstr = iconv_substr($str, 0, $length, 'utf-8');
    } else {
        //$newstr = trim_right(substr($str, 0, $length));
        $newstr = substr($str, 0, $length);
    }

    if ($append && $str != $newstr) {
        $newstr .= $append;
    }

    return $newstr;
}
// function mysub_str($str, $length){
//     $tempstr = sub_str($str);
//     echo $tempstr;
//     echo strlen($tempstr);
//     return sub_str($tempstr,$length);
// }
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
 ?>
