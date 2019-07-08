<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>课程详情</title>
        <link rel="stylesheet" href="./css/character.css?v=1">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/Cooldog3.css">
        <link rel="stylesheet" href="css/iconfont.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Cooldog3.js"></script>
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
                echo "<script>location.href='./character?pageNo=1';</script>";
            }
         ?>
        <div class="content">
            <section id="diamond" class="diamond">
                <div class="diamond_head">
                    <img src="./img/diamond_bg.png" alt="#">
                    <h2>授课专家</h2>
                </div>
                <ul class="diamond_main">
                    <?php
                        require("connect.php");
                        $pageNo = $_GET["pageNo"];
                        $pageSize = 6;
                        $pageIndex = ($pageNo - 1) * $pageSize;
                        $sql = "SELECT COUNT(cha_id)total FROM zdxl.character";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_page = ceil($row["total"] / $pageSize);
                        // character list
                        $select_sql = "SELECT cha_id, name, degree, abstract_m, image, url FROM zdxl.character LIMIT {$pageIndex},{$pageSize}";
                        $select_result = $conn->query($select_sql);
                        if ($select_result->num_rows > 0){
                            while($row = $select_result->fetch_assoc()){
                                echo "<li>";
                                echo "<a href=\"".$row["url"]."\" >";
                                echo "<figure>";
                                echo "<img src=\"".$row["image"]."\" alt=\"\">";
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
            <ul class="page-index">
                <?php
                    for ($i=1; $i<=$total_page; $i++)
                    {
                        if ($pageNo != $i){
                            echo "<li> <a href=\"./character?pageNo=". $i ."\">". $i ."</a> </li>";
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

    </body>
</html>
