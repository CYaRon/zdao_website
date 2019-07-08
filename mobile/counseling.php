<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>文章精选</title>
        <link rel="stylesheet" href="./css/counseling.css?v=101">
        <link rel="stylesheet" href="./css/global.css">
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
            <div class="top_ad">
                <img src="./img/ad-bottom-1.jpg" alt="">
            </div>
        </div>

        <div class="content">
            <div class="subnav">
                <p><a href="./index">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">心理咨询</a>&nbsp;&gt;&nbsp;文章精选
                        <?php
                            require("connect.php");
                            $pageNo = $_GET["pageNo"];
                            $pageSize = 8;
                            $pageIndex = ($pageNo - 1) * $pageSize;
                            $sql = "SELECT COUNT(id)total FROM counseling;";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            $total_page = ceil($row["total"] / $pageSize);
                            echo "<span id='p-right'>". $pageNo . "/" . $total_page . "</span>";
                        ?>
                </p>
            </div>
            <ul class="counseling">
                <?php
                    $sql = "SELECT id, title, read_num, like_num, href,update_time FROM counseling WHERE id <> 0 ORDER BY id ASC LIMIT {$pageIndex},{$pageSize}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li><a href=\"". $row["href"] ."\"><h2>". $row["title"] . "</h2>";
                            echo "<p>&nbsp;<i class=\"fa fa-calendar\"></i> " . date("Y-m-d",strtotime($row["update_time"])) ;
                            echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-eye\"></i> " . $row["read_num"] . "次阅读";
                            echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-thumbs-o-up\"></i> " . $row["like_num"] . "人点赞</p></a></li>";

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
                            echo "<li> <a href=\"./news?pageNo=". $i ."\">". $i ."</a> </li>";
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
            <!-- <div class="course-bottom">
                <p class="course-top-p">热门课程<a href="#">查看全部&gt;&gt;</a></p>
                <ul class="course-content">
                    <li>
                        <a href="javascript:void(0)">
                            <img src="./image/course-bottom-1.png" alt="">
                            <h2>Kim讲布洛迪发展心理学</h2>
                            <p>如何指导心理咨询和儿童养育</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="./image/course-bottom-1.png" alt="">
                            <h2>Kim讲布洛迪发展心理学</h2>
                            <p>如何指导心理咨询和儿童养育</p>
                        </a>
                    </li>
                </ul>
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
    </body>



</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26
 * Time: 15:07
 */
//echo "this is news"
?>
