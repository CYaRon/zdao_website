<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>资料下载</title>
        <link rel="stylesheet" href="./css/files.css?v=101">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <!-- <script src="./js/files.js" charset="utf-8"></script> -->
    </head>
    <body>
        <?php
        if (!(isset($_GET['course_id']))){
            echo "<script> location.href='./'; </script>";
        }
        else{
            require("connect.php");
            require("./php/myfunction.php");
            // 判断access_code是否保存
            if (isset($_GET["access_code"])){
                $access_code = $_GET["access_code"];
                if(isset($_SESSION['secret'])){
                    $_SESSION['secret'] = $access_code;
                }
            }
            else if(isset($_SESSION['secret'])){
                $access_code = $_SESSION['secret'];
            }else {
                $conn->close();
                echo "<script>location.href='./files?course_id=". $_GET["course_id"]."&access_code='+prompt('Bonnie讲精神分析各学派理论与临床应用场景18讲','请输入该课程序列号');</script>";
            }
            $course_id = $_GET["course_id"];
            $sql = "SELECT course_name, password FROM course WHERE course_id =".$course_id." ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                     $course_name = $row["course_name"];
                     $password = $row["password"];

                }
            }
            if ($access_code != mymd5($password)){
                // echo $password;
                // echo "   || ".mymd5($password);
                // echo "   || ".$access_code;
                echo "<script>if(confirm('密码输入错误！是否返回首页？')){location.href='./';}else {location.href='./file?pageNo=1';}</script>";
            }

        }
        ?>
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
                <p><a href="./index">首页</a>&nbsp;&gt;&nbsp;<ahref="javascript:void(0)">资料下载</a>&nbsp;&gt;&nbsp;
                <?php
                //echo substr($course_name, 0, 42);
                echo $course_name;
                ?>
                </p>
            </div>
            <ul class="files">
                <?php
                    $sql = "SELECT id, url, file_name, update_time, download_num,update_time FROM files WHERE course_id = ".$course_id."  ORDER BY update_time DESC ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li><a href=\"". $row["url"] ."\" target=\"_blank\" onclick=\"countHit(this)\"><h2>". explode('.',$row["file_name"])[0] . "</h2>";
                            echo "<p>&nbsp;<i class=\"fa fa-calendar\"></i> " . date("Y-m-d",strtotime($row["update_time"])) ;
                            echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-download\"></i> " . $row["download_num"] . "次下载";
                            echo "</p></a></li>";
                        }
                    } else {
                        echo "0 结果";
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
    </body>
</html>
