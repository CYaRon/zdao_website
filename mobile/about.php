<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>文章精选</title>
        <link rel="stylesheet" href="./css/counselings.css?v=102">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <script src="js/myshare.js"></script>
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
                <p><a href="./index">首页</a>&nbsp;&gt;&nbsp;关于我们</p>
            </div>

            <div class="counseling">
                <?php
                    require("connect.php");
                    $id = 0;
                    $sql = "SELECT id, title, author, read_num, like_num, href, content, update_time FROM counseling WHERE id={$id}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $author = empty($row["author"])? "":("作者：".$row["author"]."&nbsp;&nbsp;&nbsp;");
                        echo "<h1 style = \"text-align: center;\">".$row["title"]."</h1>";
                        echo "<h3 style = \"text-align: center;\">".$author."日期：".date("Y年m月d日",strtotime($row["update_time"]));
                        echo "&nbsp;&nbsp;&nbsp;阅读数：" . $row["read_num"] . "次";
                        echo "&nbsp;&nbsp;</h3>";
                        echo $row["content"];
                    }
                ?>
            </div>
            <!-- <div class="counseling-bottom">
                <ul>
                    <li id="counseling-up"><a href="javascript:void(0)"><i class="fa fa-thumbs-o-up"></i>&nbsp;点赞</a></li>
                    <li id="counseling-share"><a href="javascript:void(0)"><i class="fa fa-share-alt"></i>&nbsp;分享</a></li>

                </ul>
            </div> -->
            <!-- <div class="counseling-jump">
                <li id="jump-up">
                    <?php
                        if ($_GET["id"]>1){
                            echo "<a href=\"./counselings?id=".($_GET["id"]-1)."\">&lt;上一篇</a> ";
                        }else{
                            echo "<a href=\"javascript:void(0)\">&lt;上一篇</a> ";
                        }
                     ?>
                    </li>
                <li id="jump-down">
                    <?php
                        $sql = "SELECT COUNT(id)total FROM counseling;";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        if ($_GET["id"]<$row["total"]){
                            echo "<a href=\"./counselings?id=".($_GET["id"]+1)."\">下一篇&gt;</a> ";
                        }else{
                            echo "<a href=\"javascript:void(0)\">下一篇&gt;</a> ";
                        }
                    ?>
                </li>
            </div> -->


            <ul class="ad-bottom">
                <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-1.jpg" alt=""></a> </li>
                <li> <a href="javascript:void(0)"><img src="./img/ad-bottom-2.jpg" alt=""></a> </li>
            </ul>
            <!-- <div class="course-head">
                <div class="level-1"><hr></div>
                <p>相关课程</p>
                <div class="level-1"><hr></div>
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
        <?php
            require_once "php/jssdk.php";
         ?>
        <script>
            document.querySelector('#counseling-share').addEventListener('click', function () {
                Mshare.popup({
                    title: 'm-share', // 标题，默认读取document.title
                    desc: 'm-share的描述', // 描述, 默认读取head标签：<meta name="description" content="desc" />
                    link: 'http://zdao.cn', // 网址，默认使用window.location.href
                    imgUrl: 'image/logo.png', // 图片, 默认取网页中第一个img标签
                    types: ['wx', 'wxline', 'qq', 'qzone', 'sina'], // 开启的分享图标, 默认为全部
                    infoMap: {
                        wx: {
                            appId: '<?php echo $ws["appId"]; ?>',
                            timestamp: '<?php echo $ws["timestamp"]; ?>',
                            nonceStr: '<?php echo $ws["nonceStr"]; ?>',
                            signature: '<?php echo $ws["signature"]; ?>',
                            title: 'm-share微信分享',
                            desc: '我是微信的分享',
                            link: 'http://zdao.cn',
                            imgUrl: 'http://m.zdao.cn/image/logo.png'
                        }
                    },
                    fnDoShare: function (type) {
                        console.log(1);
                    }
                });
                Mshare.wxConfig({
                    title: 'm-share微信分享',
                    desc: '我是微信的分享',
                    link: 'http://zdao.cn',
                    imgUrl: 'http://m.zdao.cn/image/logo.png',
                    wx: {
                      appId: '<?php echo $ws["appId"]; ?>',
                      timestamp: '<?php echo $ws["timestamp"]; ?>',
                      nonceStr: '<?php echo $ws["nonceStr"]; ?>',
                      signature: '<?php echo $ws["signature"]; ?>',
                  },
                  infoMap: {
                      wx: {
                          title: 'm-share微信分享',
                          desc: '我是微信的分享',
                          link: 'http://zdao.cn',
                          imgUrl: 'http://m.zdao.cn/image/logo.png'
                      }
                  },
                  fnDoShare: function (type) {
                      console.log("666");
                  }
                });
            });

        </script>
    </body>
</html>
