<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>资料下载</title>
        <link rel="stylesheet" href="css/literature.css?v=102">
        <link rel="stylesheet" href="css/global.css">
        <!--link rel="stylesheet" href="font-awesome/css/font-awesome.css"-->
        <!-- <script src="./js/literature.js" charset="utf-8"></script> -->
    </head>
    <body>
        <?php
        if (!(isset($_GET['course_id']))){
            echo "<script> location.href='./'; </script>";
        }
        else{
            require("php/connect.php");
            // 判断pwd是否保存
            if (isset($_GET["pwd"])){
                $pwd = $_GET["pwd"];
                if(isset($_SESSION['secret'])){
                    $_SESSION['secret'] = $pwd;
                }
            }
            else if(isset($_SESSION['secret'])){
                $pwd = $_SESSION['secret'];
            }else {
                $conn->close();
                echo "<script>location.href='./literature?course_id=". $_GET["course_id"]."&pwd='+prompt('Bonnie讲精神分析各学派理论与临床应用场景18讲','请输入该课程序列号');</script>";
            }
            $course_id = $_GET["course_id"];
            $sql = "SELECT password FROM course WHERE course_id =".$course_id." ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                     //$class = $row["class"];
                     $password = $row["password"];
                }
            }
            if ($pwd != $password){
                echo "<script>if(confirm('密码输入错误！是否返回首页？')){location.href='./';}else {location.href='./literature?course_id=".$_GET["course_id"]."&pwd='+prompt('Bonnie讲精神分析各学派理论与临床应用场景18讲','请输入该课程序列号');}</script>";
            }

        }
        ?>

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
            <p><a href="./">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">心理课程</a>&nbsp;&gt;&nbsp;
            <?php
            //echo $class;
            ?>
            </p>
        </div>
        <div class="main">
            <div class="main-right" id="front-r">
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
            </div>
            <div class="main-left">
                <p class="remind">
                    一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案.
                </p>
                <ul class="files">
                    <?php
                        $sql = "SELECT id, url, file_name, update_time, download_num,update_time FROM files WHERE course_id = '5'  ORDER BY update_time DESC ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<li><a href=\"". $row["url"] ."\" onclick=\"countHit(this)\"><h2>". explode('.',$row["file_name"])[0] . "</h2>";
                                echo "<p>&nbsp;" . date("Y-m-d",strtotime($row["update_time"])) ;
                                echo "&nbsp;&nbsp;&nbsp;下载次数： " . $row["download_num"] . "次";
                                echo "</p></a></li>";
                            }
                        } else {
                            echo "0 结果";
                        }
                    ?>
                </ul>


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

    </body>
</html>
