<?php

    require("connect.php");
    if (!(isset($_GET['classNo']))){
        echo "<script> location.href='./course'; </script>";
    }
    else{
        $classNo = $_GET["classNo"];
        //$pageSize = 4;
        //$pageIndex = ($pageNo - 1) * $pageSize;
        $str = "";
        if ($classNo !=0){
            $str = " AND course_class.class = ".$classNo;
        }
        $sql = "SELECT course.course_id, course.`sort`, course_name,`character`.`name` ,course.`img_url`,label,course.`describe`,course.`url`" .
         "FROM course,`character`,course_class ".
         "WHERE course.`cha_id`=`character`.`cha_id` AND course_class.`course_id` = course.`course_id`".$str.
         " ORDER BY course.sort  ASC ";
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
