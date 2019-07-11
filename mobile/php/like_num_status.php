<?php
    require("myfunction.php");
    require("connect.php");
    $table_name = $_GET["table_name"];
    $article_id = $_GET["article_id"];

    $ip_address = getip();
    $article = $table_name ."zdxl". $article_id;
    $sql= "SELECT id FROM article_likenum WHERE table_name='{$table_name}' and article_id='{$article_id}' and ip_address='{$ip_address}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "1";
        //not todo
    }else{
        //like_num+1
        $sql= "INSERT INTO article_likenum (table_name,article_id,ip_address,update_time) VALUE ('{$table_name}','{$article_id}','{$ip_address}',NOW())";
        $result = $conn->query($sql);
        $sql = "update {$table_name} set like_num = like_num+1 where id={$article_id}";
        $result = $conn->query($sql);
        echo "2";
    }
    echo "3";
    $conn->close();
 ?>
