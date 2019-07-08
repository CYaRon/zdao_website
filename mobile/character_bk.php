<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>课程详情</title>
        <link rel="stylesheet" href="./css/character.css?v=1">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <a href="#"><img class="top" src="./image/up.png" alt="#"></a>
        <div class="head">
            <img class="logo" src="./image/logo2.png" alt="">
            <div class="menu">
                <img src="./image/menu.png" alt="">
                <p>菜单</p>
            </div>
        </div>
        <div class="ad-top">
            <img src="./image/ad-1.png" alt="">
        </div>
        <div class="content">
            <div class="subnav">
                <p><a href="./index">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">心理文章</a>&nbsp;&gt;&nbsp;文章精选</p>
            </div>
            <ul class="course">
                <?php
                    require("connect.php");
                    $select_sql = "SELECT cha_id, name, abstract, image, url FROM zdxl.character";
                    $select_result = $conn->query($select_sql);
                    if ($select_result->num_rows > 0){
                        while($row = $select_result->fetch_assoc()){
                            echo "<li>";
                            echo "<a href=\"".$row["url"]."\" class=\"character\">";
                            echo "<div class=\"character-left\">";
                            echo "<h2>".$row["name"]."</h2> <p>".$row["abstract"]."</p>";
                            echo "</div>";
                            echo "<img src=\"".$row["image"]."\" alt=\"\">";
                            echo "</a>";
                            $select_sql2 = "SELECT course_id, course, url  FROM course  WHERE cha_id = '".$row["cha_id"]."'";
                            $select_result2 = $conn->query($select_sql2);
                            if ($select_result2->num_rows > 0){
                                while($row2 = $select_result2->fetch_assoc()){
                                    echo "<a href=\"".$row2["url"]."\" class=\"course-link\"> <i class=\"fa fa-link fa-flip-horizontal\"></i>&nbsp;".$row2["course"]."</a>";
                                }
                            }
                            echo "</li>";
                        }
                    }
                ?>
            </ul>
            <div class="ad-bottom">
                <img src="./image/ad-2.png" alt="">
            </div>
        </div>
        <?php
            $conn->close();
        ?>
        <footer>
            <img src="./image/foot-tree.png" alt="">
            <div class="foot-main">
                <ul>
                    <li><p class="foot-p-left">创伤治疗课程</p></li>
                    <li><p class="foot-p-right">儿童青少年治疗</p></li>
                </ul>
                <ul>
                    <li><p class="foot-p-left">精神分析课程</p></li>
                    <li><p class="foot-p-right">关于我们</p></li>
                </ul>
                <ul>
                    <p>证道心理全部课程一览表</p>
                </ul>

            </div>
        </footer>
    </body>
</html>
