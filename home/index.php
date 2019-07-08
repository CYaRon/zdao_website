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
        <meta property="og:image" content="./image/logo.png">
        <link rel="canonical" href="http://www.zdxl.cn/">
        <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
        <!--script src="./js/base.js"></script-->
        <!--link rel="stylesheet" href="bootstrap/css/bootstrap.css"-->
        <link rel="stylesheet" href="css/iconfont.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/Cooldog3.css">


    </head>
    <body>
        <div class="head">
            <ul class="head-nav">
                <li class="logo">
                    <a href="#">
                        <img src="img/logo2.png" alt="">
                    </a>
                </li>
                <li class = "head-nav-li-1" >
                    <a href="#">
                        <p class="nav-en">Courses</p>
                        <p class="nav-zh">专业课程</p>
                    </a>
                </li>
                <li class = "head-nav-li-2" >
                    <a href="#">
                        <p class="nav-en">Teachers</p>
                        <p class="nav-zh">授课专家</p>
                    </a>
                </li>
                <li class = "head-nav-li-3" >
                    <a href="#">
                        <p class="nav-en">Papers</p>
                        <p class="nav-zh">文献资料</p>
                    </a>
                </li>
                <li class = "head-nav-li-4" >
                    <a href="#">
                        <p class="nav-en">Articles</p>
                        <p class="nav-zh">专业文章</p>
                    </a>
                </li>
                <li class = "head-nav-li-5" >
                    <a href="#">
                        <p class="nav-en">Counseling</p>
                        <p class="nav-zh">心理咨询</p>
                    </a>
                </li>
                <li class = "head-nav-li-6" >
                    <a href="#">
                        <p class="nav-en">About</p>
                        <p class="nav-zh">关于我们</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="Cooldog_container">
            <div class="Cooldog_content">
                <ul>
                    <li class="p1">
                        <a href="#">
                            <img src="img/a1.jpg" alt="">
                        </a>
                    </li>
                    <li class="p2">
                        <a href="#">
                            <img src="img/a2.jpg" alt="">
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
            <!-- <div class="buttons clearfix">
                <a href="javascript:;" class="color thumb1 img-thumbnail"></a>
                <a href="javascript:;" class="thumb3 img-thumbnail"></a>
                <a href="javascript:;" class="thumb2 img-thumbnail"></a>
            </div> -->
        </div>
        <div class="index-title teacher-title"><p>专家介绍<br><span>Teachers</span> </p> </div>
        <div class="Teachers_container">
            <div class="buttons clearfix">
                <ul>

                    <li class="thumb8"><a href="javascript:;" ></a></li>
                    <li class="thumb9"><a href="javascript:;" ></a></li>
                    <li class="thumb1 color"><a href="javascript:;" ></a></li>
                    <li class="thumb2"><a href="javascript:;" ></a></li>
                    <li class="thumb3"><a href="javascript:;" ></a></li>
                    <li class="thumb4"><a href="javascript:;" ></a></li>
                    <li class="thumb5"><a href="javascript:;" ></a></li>
                    <li class="thumb6"><a href="javascript:;" ></a></li>
                    <li class="thumb7"><a href="javascript:;" ></a></li>

                    <li class="thumb3"><a href="javascript:;"></a></li>
                    <li class="thumb2"><a href="javascript:;"></a></li>
                    <li class="thumb1 color"><a href="javascript:;"></a></li>
                    <li class="thumb5"><a href="javascript:;"></a></li>
                    <li class="thumb4"><a href="javascript:;"></a></li>
                </ul>
            </div>
            <a href="javascript:;" class="teacher_btn_left">
                <i class="iconfont icon-zuoyoujiantou"></i>
            </a>
            <a href="javascript:;" class="teacher_btn_right">
                <i class="iconfont icon-zuoyoujiantou-copy-copy"></i>
            </a>
            <div class="Teachers_content">
                <ul>
                    <?php
                        require("./php/connect.php");
                        $sql ="SELECT `name`, name_zh, degree, abstract_m, sort_index FROM `character` ORDER BY sort_index ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $i = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<li class=\"p".$i."\">";
                                echo "<a href=\"javascript:;\">";
                                echo "<h2>".$row["name"]." ".$row["degree"]."</h2>";
                                echo "<h2>".$row["name_zh"]."</h2>";
                                echo "<p>".$row["abstract_m"]."</p>";
                                echo "</a></li>";
                                $i++;
                            }
                        }
                     ?>

                </ul>
            </div>



        </div>

        <div class="index-more">
            <button type="button" class="btn btn-success btn-block">查看更多介绍</button>
        </div>
        <div class="index-title course-title"><p>专业课程<br><span>Courses</span> </p> </div>
        <ul class="course-content">
            <?php
                $sql="SELECT course_id, course.`sort`, course_name,`character`.`name`, degree, course.`img_url`,label,course.`describe`,course.`url` FROM course,`character` WHERE course.`cha_id`=`character`.`cha_id` AND course.`sort` != 0 ORDER BY course.`sort` , course.`sort` ASC LIMIT 0,4";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $i = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a href=\"".$row["url"]."\">";
                        echo "<img src=\"".$row["img_url"]."\" alt=\"\">";
                        echo "<div class=\"course-intro\">";
                        echo "<h3><span>主讲</span> ".$row["name"]." ".$row["degree"]." </h3> ";
                        echo "<h2>".$row["course_name"]."</h2>";
                        echo "<p>".$row["describe"]."</p>";
                        echo "</div>";
                        echo "</a></li>";
                        $i++;
                    }
                }
             ?>
        </ul>
        <div class="index-more-2">
            <a class="index-more-course" href="#"> 查看更多课程 </a>
        </div>


        <div class="index-title article-title"><p>心理文章<br><span>Articles</span> </p> </div>
        <ul class="article-content">
            <li>
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
            <li class="article-right">
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
            <li>
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
            <li class="article-right">
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
            <li>
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
            <li class="article-right">
                <a href="">
                     <img src="img/article_1.jpg" alt="">
                     <div class="article-intro">
                        <h2>人和人的误解是怎么产生的？</h2> <p class="figcaption">在生活中，你可能总是会抱怨，对方没有能准确清楚地get你的意思。有时候你以为自己当时说得很清楚,有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚有时候你以为自己当时说得很清楚</p>
                     </div>
                </a>
            </li>
        </ul>
        <div class="index-more-2">
            <a class="index-more-article" href="#"> 阅读更多心理文章 </a>
        </div>


        <!-- <div class="index-title news-title"><p>机构新闻<br><span>News</span> </p> </div>
        <ul class="news-content">
            <li>
                <a href="">
                    <div class="news-left">
                        <span class="news-column">行业观察</span>
                        <p>2018年12月13日</p>
                    </div>
                    <p class="news-right">首轮通知2019第六届中国精神分析大会通知，敬请周知！</p>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="news-left">
                        <span class="news-column">行业观察</span>
                        <p>2018年12月13日</p>
                    </div>
                    <p class="news-right">首轮通知2019第六届中国精神分析大会通知，敬请周知！</p>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="news-left">
                        <span class="news-column">行业观察</span>
                        <p>2018年12月13日</p>
                    </div>
                    <p class="news-right">首轮通知2019第六届中国精神分析大会通知，敬请周知！</p>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="news-left">
                        <span class="news-column">行业观察</span>
                        <p>2018年12月13日</p>
                    </div>
                    <p class="news-right">首轮通知2019第六届中国精神分析大会通知，敬请周知！</p>
                </a>
            </li>
        </ul>
        <div class="index-more-2">
            <a class="index-more-news" href="#"> 查看更多新闻 </a>
        </div> -->
        <?php
            $conn->close();
        ?>
        <footer>
            <img src="./img/footer_bg.png" alt="">
            <div class="foot-main">
            <p>
                地址：台州市椒江区亿嘉时代广场1幢4单元1002
            </p>

            <p>
                ©2018&nbsp;证道心理&nbsp;浙ICP备11054691号&nbsp;<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33100202000175">浙公网安备33100202000175号</a>
            </p>
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Cooldog3.js"></script>
        <script type="text/javascript" src="js/Teachers.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="js/global.js"></script> -->
    </body>

</html>
