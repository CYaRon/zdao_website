<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>资料下载</title>
        <link rel="stylesheet" href="css/course.css?v=102">
        <link rel="stylesheet" href="css/global.css">
        <!--link rel="stylesheet" href="font-awesome/css/font-awesome.css"-->
        <!-- <script src="./js/literature.js" charset="utf-8"></script> -->
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
        <div class="subnav">
            <p><a href="./">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0);">心理课程</a>&nbsp;&gt;&nbsp;
            <?php
            //echo $class;
            ?>
            </p>
        </div>
        <div class="main">
            <ul class="course_class" id="MyCourseButton">
                <li class="class-all this-select"> <a href="javascript:void(0);" onclick="showCourseList(0)"> <h3>全部课程</h3> <p>20个</p> </a> </li>
                <li class="class-1"> <a href="javascript:void(0);"  onclick="showCourseList(1)"> <h3>创伤治疗</h3> <p>20个</p> </a> </li>
                <li class="class-2"> <a href="javascript:void(0);"  onclick="showCourseList(2)"> <h3>儿童青少年治疗</h3> <p>20个</p> </a> </li>
                <li class="class-3"> <a href="javascript:void(0);"  onclick="showCourseList(3)"> <h3>精神分析</h3> <p>20个</p> </a> </li>
            </ul>
            <!-- <ul class="course_list">
                <li> <a href="#"> <h3>全部课程</h3> <p>20个</p> </a> </li>
                <li> <a href="#"> <h3>创伤治疗</h3> <p>20个</p> </a> </li>
                <li> <a href="#"> <h3>儿童青少年治疗</h3> <p>20个</p> </a> </li>
                <li> <a href="#"> <h3>精神分析</h3> <p>20个</p> </a> </li>
            </ul> -->
            <?php
                //$conn->close();
             ?>
             <ul class="course-list" id="MyCourseList">


             </ul>

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
        <script type="text/javascript">
            $(document).ready(function(){
                showCourseList(0);
            })
        </script>
    </body>
</html>
