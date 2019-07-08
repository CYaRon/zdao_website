<!DOCTYPE html>
<html lang="zh" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>课程列表</title>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/course.css">
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
        <div id="front-h">
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
        <div class="ad-top">
            <img src="img/ad-top.jpg" alt="">
        </div>
        <div class="main">
            <?php
                require("php/connect.php");
             ?>
            <!--div class="main-right" id="front-r">
                <img src="img/ad_title.png" alt="">
                <ul>
                    <li>
                        <a href="#">
                            <img src="img/Jon Allen.jpg" alt="">
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <img src="img/Sagman.jpg" alt="">
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <img src="img/Sagman.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div-->
            <div class="main-left">
                <ul class="course-list" id="MyCourseList">
                    <!--li class="label-hot" >
                        <a href="#">
                            <img src="img/course_sample_img.png" alt="">
                            <p class="course-name">布罗迪精神分析发展心理学如何能心理咨询和儿童养育</p>
                            <p class="course-teacher">Kim Kleinman</p>
                            <p class="course-content">Kim老师将会在本课程中深入讲解包括以上主题在内的13个极其重要的主题</p>
                            <span class="course-link">课程详情</span>
                        </a>
                    </li-->

                </ul>
                <div id="pager" ></div>

            </div>


            <?php
                $conn->close();
             ?>

        </div>
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
        <script type="text/javascript" src="js/global.js"></script>
        <script type="text/javascript" src="js/course.js"></script>
        <script type="text/javascript" src="js/jquery0.pagination.js"></script>
        <script>
        var pager = $('#pager').paginate({
            pageIndex: 0, //当前页数
            totlePageCount: 10, //总页数
            maxBtnCount: 5, //按钮数量最多有
            styleURL: './css/style1.css' //样式路径 默认无样式
        });
        </script>
    </body>
</html>
