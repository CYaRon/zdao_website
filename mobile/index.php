<!DOCTYPE html>
<html>
    <head lang="zh">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>证道心理-台州证道心理咨询中心-台州心理咨询</title>
        <meta name="description" content="证道心理提供心理咨询服务，同时为心理咨询师提供一流的专业培训课程。">
        <meta name="keywords" content="心理咨询，台州心理咨询，心理咨询师专业培训">
        <meta name="robots" content="noodp">
        <!--meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"-->

        <meta name="format-detection" content="telephone=no">
        <meta property="og:title" content="证道心理-台州证道心理咨询中心-台州心理咨询">
        <meta property="og:description" content="证道心理提供心理咨询服务，同时为心理咨询师提供一流的专业培训课程。">
        <meta property="og:Type" content="website">
        <meta property="og:url" content="http://www.zdxl.cn/">
        <meta property="og:img" content="./img/logo.png">
        <link rel="canonical" href="http://www.zdxl.cn/">
        <link rel="shortcut icon" type="img/x-icon" href="./img/icon.png">
        <script src="./js/base.js"></script>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="css/Cooldog3.css">
        <link rel="stylesheet" href="css/iconfont.css">
    </head>
    <body>
    <?php
        // if(session_status !== PHP_SESSION_ACTIVE){
        //     session_start();
        //     $_SESSION['secret']= "";
        // }
    ?>
    <a href="#"><img class="top" src="./img/up.png" alt="#"></a>
    <div class="head">
        <a class="logo" href="./index"><img src="./img/logo2.png" alt=""></a>
        <div class="menu">
            <img src="./img/menu.png" alt="">
            <p>菜单</p>
        </div>
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
    <div class="nav">
        <ul class="nav-head">
            <li class="nav-heart"><a href="./course?pageNo=1"><img src="./img/courses.png" alt="">专业课程</a></li>
            <li class="nav-leaf"><a class="nav-middel" href="./character?pageNo=1"><img src="./img/teachers.png" alt="">授课专家</a></li>
            <li class="nav-diamond"><a href="./file?pageNo=1"><img src="./img/papers.png" alt="">文献资料</a></li>
        </ul>
        <ul class="nav-foot">
            <li class="nav-file"><a href="./article?pageNo=1"><img src="./img/articles.png" alt="">专业文章</a></li>
            <li class="nav-light"><a class="nav-middel" href="./counseling?pageNo=1"><img src="./img/counseling.png" alt="">心理咨询</a></li>
            <li class="nav-news"><a href="./about"><img src="./img/about.png" alt="">关于我们</a></li>
        </ul>
    </div>

    <div class="inner">
        <section id="leaf" class="leaf">
            <div class="leaf_head">
                <img src="./img/leaf_bg.png" alt="#">
                <h2>专业课程</h2>
                <a href="#">更多</a>
            </div>
            <ul class="leaf_main">
                <?php

                    require("connect.php");
                    $pageNo = 1;
                    $pageSize = 4;
                    $pageIndex = ($pageNo - 1) * $pageSize;
                    $select_sql = "SELECT course_id, course_name, url, img_url FROM course ORDER BY sort DESC LIMIT {$pageIndex},{$pageSize}";
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
        <section id="diamond" class="diamond">
            <div class="diamond_head">
                <img src="./img/diamond_bg.png" alt="#">
                <h2>专家介绍</h2>
                <a href="./character?pageNo=1">更多</a>
            </div>
            <ul class="diamond_main">
                <?php
                    // character list
                    $select_sql = "SELECT cha_id, name, degree, abstract_m, image, url FROM zdxl.character LIMIT {$pageIndex},{$pageSize}";
                    $select_result = $conn->query($select_sql);
                    if ($select_result->num_rows > 0){
                        while($row = $select_result->fetch_assoc()){
                            echo "<li>";
                            echo "<a href=\"".$row["url"]."\" >";
                            echo "<figure>";
                            echo "<img class=\"inner_img\"  src=\"".$row["image"]."\" alt=\"\">";
                            echo "</figure>";
                            echo "<div class=\"name_txt\">";
                            echo "<p class=\"name\">".$row["name"]."</p>";
                            echo "<p class=\"txt\">".$row["abstract_m"]."</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "</li>";
                        }
                    }
                 ?>

            </ul>

        </section>
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
