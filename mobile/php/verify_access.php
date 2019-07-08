<?php
    require("connect.php");
    require("myfunction.php");
    $course_id = $_POST["course_id"];
    $pwd = $_POST["password"];
    $sql = "SELECT password FROM downlist WHERE course_id =".$course_id." ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
             $password = $row["password"];
        }
    }else {
        //echo "error";
        //echo $downlist_id."  ".$password;
        $result = array('code' => -1);
        $retaval = json_encode($result,JSON_UNESCAPED_UNICODE);
        echo $retaval;
        exit();
    }
    if ($pwd == $password){
        $result = array('code' => 0, 'access_code' => mymd5($pwd));
    }else {
        $result = array('code' => 1);
    }
    //将数据转为Json格式
    $retaval = json_encode($result,JSON_UNESCAPED_UNICODE);
    echo $retaval;
 ?>
