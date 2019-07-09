<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <title>关于我们</title>
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/about.css?v=1">
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
            <p><a href="./">首页</a>&nbsp;&gt;&nbsp;关于我们</p>
        </div>
        <div class="main">
            <div class="main-left">
                <ul class="article">
                    <?php
                    require("./php/connect.php");
                    require("./php/myfunction.php");
                    $id = 0;
                    $sql = "SELECT id, title, author, read_num, like_num, href, content, update_time FROM counseling WHERE id={$id}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        read_numctn("counseling",$id);
                        $row = $result->fetch_assoc();
                        $author = empty($row["author"])? "":("作者：".$row["author"]."&nbsp;&nbsp;&nbsp;");
                        echo "<h1>".$row["title"]."</h1>";
                        echo "<h3>".$author."日期：".date("Y年m月d日",strtotime($row["update_time"]));
                        echo "&nbsp;&nbsp;&nbsp;阅读数：" . $row["read_num"] . "次";
                        echo "&nbsp;&nbsp;</h3>";
                        echo $row["content"];
                    }else{
                        echo "<script> location.href='./'; </script>";
                    }
                    ?>
                </ul>



                <ul class="ad-bottom">
                    <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-1.jpg" alt=""></a> </li>
                    <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-2.jpg" alt=""></a> </li>
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
