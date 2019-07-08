<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>课程详情</title>
        <link rel="stylesheet" href="./css/course.css?v=1">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/Cooldog3.css">
        <link rel="stylesheet" href="css/iconfont.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <a href="#"><img class="top" src="./img/up.png" alt="#"></a>
        <div class="head">
            <a class="logo" href="./index"><img src="./img/logo2.png" alt=""></a>
            <ul class="nav">
                <li><a href="./course?pageNo=1">专业课程</a></li>
                <li><a href="./character?pageNo=1">授课专家</a></li>
                <li><a href="./file?pageNo=1">文献资料</a></li>
                <li><a href="./article?pageNo=1">专业文章</a></li>
                <li><a href="./counseling?pageNo=1">心理咨询</a></li>
            </ul>
            <!-- <div class="top_pic">
                <img src="./img/sagman-mobile.jpg" alt="">
            </div> -->
        </div>
        <div class="Cooldog_container">
            <div class="Cooldog_content">
                <ul>
                    <li class="p1">
                        <a href="#">
                            <img src="img/sagman-mobile.jpg" alt="">
                        </a>
                    </li>
                    <li class="p2">
                        <a href="#">
                            <img src="img/jon-mobile.jpg" alt="">
                        </a>
                    </li>
                    <li class="p3">
                        <a href="#">
                            <img src="img/a3.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <a href="javascript:;" class="btn_left">
                <i class="iconfont icon-zuoyoujiantou"></i>
            </a>
            <a href="javascript:;" class="btn_right">
                <i class="iconfont icon-zuoyoujiantou-copy-copy"></i>
            </a>

        </div>
        <?php
            if (!isset($_GET["pageNo"])){
                echo "<script>location.href='./course?pageNo=1';</script>";
            }
         ?>
        <div class="content">
            <section id="leaf" class="leaf">
                <div class="leaf_head">
                    <ul>
                    <?php
                        $tag = 0;
                        if (!isset($_GET["tag"])){
                            $tag = 0;
                        }else{
                            $tag = number_format($_GET["tag"]);
                        }
                        $arr=array("全部课程","创伤治疗","儿童青少年治疗","精神分析");
                        for ($i = 0; $i < 4; $i++){
                            if($tag == $i){
                                echo "<li> <a class=\"target\" href=\"./course?pageNo=1&tag=".$i."\" >".$arr[$i]."</a> </li>";
                            }else{
                                echo "<li> <a href=\"./course?pageNo=1&tag=".$i."\">".$arr[$i]."</a> </li>";
                            }
                        }
                     ?>
                    </ul>
                </div>
                <ul class="leaf_main">
                    <?php
                        require("connect.php");
                        $pageNo = $_GET["pageNo"];
                        $pageSize = 6;
                        $pageIndex = ($pageNo - 1) * $pageSize;
                        $sql = "";
                        if ($tag != 0){
                            $sql = "SELECT COUNT(course_id)total FROM zdxl.course_class WHERE class  = '".$arr[$tag]."'";
                        }else{
                            //$sql = "SELECT COUNT(*)total FROM zdxl.course_class GROUP BY course_id";
                            $sql = "SELECT COUNT(cha_id)total FROM zdxl.course";
                        }
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_page = ceil($row["total"] / $pageSize);
                        // course list
                        $select_sql = "";
                        if ($tag != 0){
                             $select_sql = "SELECT course.`course_id`, course_name, course_class.`class`, url, img_url FROM course,course_class WHERE course.`course_id`=course_class.`course_id` AND course_class.`class` = '".$arr[$tag]."'  ORDER BY sort DESC LIMIT {$pageIndex},{$pageSize}";
                        }else {
                            $select_sql = "SELECT course_id, course_name, url, img_url FROM course ORDER BY sort DESC LIMIT {$pageIndex},{$pageSize}";
                        }

                        $select_result = $conn->query($select_sql);
                        if ($select_result->num_rows > 0){
                            while($row = $select_result->fetch_assoc()){
                                echo "<li><a href=\"".$row["url"]."\">";
                                echo "<figure><img class=\"inner_img\" src=\"".$row["img_url"]."\" alt=\"#\"></figure>";
                                echo "<div class=\"txt_img\">";
                                echo "<img src=\"./img/dashikecheng.png\" alt=\"#\"><br>";
                                echo "<p class=\"txt\">".$row["course_name"]."</p>";
                                echo "</div></a></li>";
                            }
                        }
                     ?>

                </ul>

            </section>
            <ul class="page-index">
                <?php
                    for ($i=1; $i<=$total_page; $i++)
                    {
                        if ($pageNo != $i){
                            echo "<li> <a href=\"./course?pageNo=". $i ."\">". $i ."</a> </li>";
                        }
                        else{
                            echo "<li> <a id=\"selected\" href=\"javascript:void(0)\">". $i ."</a> </li>";
                        }
                    }
                ?>
            </ul>
            <ul class="ad-bottom">
                <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-1.jpg" alt=""></a> </li>
                <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-2.jpg" alt=""></a> </li>
            </ul>
            <footer>
                <img src="./img/footer_bg.png" alt="">
                <div class="foot-main">
                    <ul>
                        <li class="foot-txt1"> <a href="./course?pageNo=1&tag=0">全部课程</a></li>
                        <li class="foot-txt2"> <a href="./course?pageNo=1&tag=1">创伤治疗</a></li>
                        <li class="foot-txt3"> <a href="./course?pageNo=1&tag=2">儿童青少年治疗</a></li>
                        <li class="foot-txt4"> <a href="./course?pageNo=1&tag=3">精神分析</a></li>
                    </ul>

                <p id="cp">
                    ©2018&nbsp;证道心理&nbsp;浙ICP备11054691号&nbsp;<a id="jgwab" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33100202000175">浙公网安备33100202000175号</a>
                </p>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Cooldog3.js"></script>
    </body>
</html>
