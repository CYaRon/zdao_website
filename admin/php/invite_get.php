<?php
    require("connect.php");
    $table="";
    if ($_GET["classNo"]==0){
        $table="invite";
    }else if ($_GET["classNo"]==1){
        $table="invite_2019_0625";
    }else if ($_GET["classNo"]==2){
        $table="invite_2019_0626";
    }else if ($_GET["classNo"]==-1){
        $table="invite_test";
    }
    $sql = "SELECT id, link FROM {$table} WHERE isused='no' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $link = $row["link"];
        }
    }
    $sql = "update {$table} set isused = 'yes',update_time = NOW() where isused='no' limit 1";
    $result = $conn->query($sql);
    //echo $link;
    echo "<input id=\"ButtonText\" type=\"text\" name=\"\" value=\"$link\">";
    $conn->close();
 ?>
