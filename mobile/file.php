<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>课程资料列表</title>
        <link rel="stylesheet" href="./css/file.css?v=102">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/prompt.css">
        <link rel="stylesheet" href="./css/Cooldog3.css">
        <link rel="stylesheet" href="css/iconfont.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/prompt.js"></script>
        <script src="js/Cooldog3.js"></script>

    </head>
    <body>
        <a href="#"><img class="top" src="./img/up.png" alt="#"></a>
        <div class="head">
            <a class="logo" href="./index"><img src="./img/logo2.png" alt=""></a>
            <ul class="nav">
                <li><a href="javascript:void(0)">专业课程</a></li>
                <li><a href="./character?pageNo=1">授课专家</a></li>
                <li><a href="javascript:void(0)">文献资料</a></li>
                <li><a href="./article?pageNo=1">专业文章</a></li>
                <li><a href="./counseling?pageNo=1">心理咨询</a></li>
            </ul>
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
                echo "<script>location.href='./file?pageNo=1';</script>";
            }
         ?>
        <div class="content">
            <div class="subnav">
                <p><a href="./index">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">下载列表</a>
                </p>
            </div>
            <div class="reminder">
                <p>一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案一段说明如何下载的文案</p>
            </div>
            <ul class="downlist">
                <?php
                    require("connect.php");
                    $pageNo = $_GET["pageNo"];
                    $pageSize = 6;
                    $pageIndex = ($pageNo - 1) * $pageSize;
                    $sql = "SELECT COUNT(id)total FROM downlist";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $total_page = ceil($row["total"] / $pageSize);

                    $sql = "SELECT id, course_id, course_name, password, img_url, read_num,update_time FROM downlist ORDER BY sort DESC LIMIT {$pageIndex},{$pageSize}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li id='cha' data-courseid='".$row["course_id"]."'>";
                            echo "<a>";
                            echo "<img src='".$row["img_url"]."'>";
                            echo "<div class='message'>";
                            echo "<h2>".$row["course_name"]."</h2>";
                            echo "<p><i class=\"fa fa-eye\"></i>&nbsp;".$row["read_num"]."次阅读</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "</li>";
                            // echo "";
                            // echo "<li><a href=\"". $row["url"] ."\" onclick=\"countHit(this)\"><h2>". explode('.',$row["file_name"])[0] . "</h2>";
                            // echo "<p>&nbsp;<i class=\"fa fa-calendar\"></i> " . date("Y-m-d",strtotime($row["update_time"])) ;
                            // echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-download\"></i> " . $row["download_num"] . "次下载";
                        }
                    } else {
                        echo "0 结果";
                    }
                ?>
            </ul>
            <ul class="page-index">
                <?php
                    for ($i=1; $i<=$total_page; $i++)
                    {
                        if ($pageNo != $i){
                            echo "<li> <a href=\"./file?pageNo=". $i ."\">". $i ."</a> </li>";
                        }
                        else{
                            echo "<li> <a id=\"selected\" href=\"javascript:void(0)\">". $i ."</a> </li>";
                        }
                    }
                ?>
            </ul>
            <!-- <div class="ad-bottom">
                <img src="./image/ad-2.png" alt="">
            </div> -->
        </div>



        <?php
            $conn->close();
        ?>
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
        <script src="js/downlist.js"></script>
    </body>
</html>
