<?php

    require("connect.php");
    if (!(isset($_GET['pageNo']))){
        echo "<script> location.href='./course'; </script>";
    }
    else{
        $pageNo = $_GET["pageNo"];
        $pageSize = 4;
        $pageIndex = ($pageNo - 1) * $pageSize;
        $sql = "SELECT course_id, course.`sort`, course_name,`character`.`name` ,course.`img_url`,label,course.`describe`,course.`url` " .
         "FROM course,`character` WHERE course.`cha_id`=`character`.`cha_id` AND course.sort != 0 ".
         "ORDER BY course.sort , course.sort ASC LIMIT ".$pageIndex.",".$pageSize;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li class=\"".$row["label"] ." \" >";
                echo "<a href=\"".$row["url"]."\">";
                echo "<img src=\"".$row["img_url"]." \" alt=\"\">";
                echo "<p class=\"course-name\">".$row["course_name"]."</p>";
                echo "<p class=\"course-teacher\">".$row["name"]."</p>";
                echo "<p class=\"course-content\">".$row["describe"]."</p>";
                echo "<span class=\"course-link\">课程详情</span>";
                echo "</a></li>";
            }
        }
    }

    $conn->close();
 ?>
