<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <title>心理咨询</title>
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/counseling.css?v=1">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
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
            <p><a href="./">首页</a>&nbsp;&gt;&nbsp;心理咨询
            <?php
            //echo $class;
                if (!(isset($_GET['pageNo']))){
                    echo "<script> location.href='./'; </script>";
                }
            ?>
            </p>
        </div>
        <div class="main">
            <!-- <div class="main-right" id="front-r">
            </div> -->
            <div class="main-left">
                <ul class="article">
                    <?php
                    require("./php/connect.php");
                    require("./php/myfunction.php");
                    $pageNo = $_GET["pageNo"];
                    $pageSize = 8;
                    $pageIndex = ($pageNo - 1) * $pageSize;
                    $sql = "SELECT id, title, read_num, like_num, href,update_time FROM counseling WHERE id <> 0 ORDER BY id ASC LIMIT {$pageIndex},{$pageSize}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li><a href=\"". $row["href"] ."\"><h2>". $row["title"] . "</h2>";
                            echo "<p>&nbsp;<i class=\"fa fa-calendar\"></i> " . date("Y-m-d",strtotime($row["update_time"])) ;
                            echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-eye\"></i> " . $row["read_num"] . "次阅读";
                            //echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-thumbs-o-up\"></i> " . $row["like_num"] . "人点赞</p></a></li>";
                            echo "</p></a></li>";
                        }
                    } else {
                        echo "0 结果";
                    }
                    // $sql = "SELECT id, title, read_num, like_num,img_url,content, href,update_time FROM counseling ORDER BY id ASC LIMIT {$pageIndex},{$pageSize}";
                    // $result = $conn->query($sql);
                    // if ($result->num_rows > 0) {
                    //     while($row = $result->fetch_assoc()) {
                    //         echo "<li><a href=\"". $row["href"] ."\"> <img src=\"".$row["img_url"]."\"> <div class=\"\"><h2>". $row["title"] . "</h2>";
                    //         echo "<p>".sub_str($row["content"],90)."</p>";
                    //
                    //         echo "<ul>  <li><i class=\"fa fa-eye\"></i>" . $row["read_num"] . "次阅读 </li> ";
                    //         $sql_2 = "SELECT article_id, class, class_name FROM article_class WHERE article_id = ".$row["id"]." ORDER BY sort DESC";
                    //         $result2 = $conn->query($sql_2);
                    //         if ($result2->num_rows > 0) {
                    //             while($row2 = $result2->fetch_assoc()) {
                    //                 echo "<li class=\"".$row2["class_name"]."\"> ".$row2["class"]." </li>";
                    //             }
                    //         }
                    //
                    //
                    //         echo "</ul></div></a></li>";
                    //
                    //     }
                    // } else {
                    //     echo "0 结果";
                    // }
                    ?>
                </ul>
                <!-- <div id="pager"></div> -->

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
        <script src="js/jquery.pagination.js"></script>
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
