<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <title>邀请链接</title>
        <link rel="stylesheet" href="./css/invite.css">
        <script src="js/clipboard.min.js"></script>
        <script src="js/invite.js" charset="utf-8"></script>
    </head>
    <body>
        <?php
            if (isset($_GET["pwd"])){
                $pwd = $_GET["pwd"];
            }
            else {
                echo "<script>location.href='./invite?pwd='+prompt('请输入密码','');</script>";
            }
            if ($pwd != "8189"){
                echo "<script>location.href='./invite?pwd='+prompt('密码错误，请重新输入密码','');</script>";
            }
         ?>
        <div class="button" onclick="RequestButton(0)">
            点击获取Janet一期会员邀请码链接
        </div>
        <div class="" id="ButtonResponse">

        </div>
        <button class="btn" data-clipboard-action="copy" data-clipboard-target="#ButtonText">复制</button>
        <script>
            var clipboard = new ClipboardJS('.btn');

            clipboard.on('success', function(e) {
                console.log(e);
            });

            clipboard.on('error', function(e) {
                console.log(e);
            });
        </script>

    </body>
</html>
