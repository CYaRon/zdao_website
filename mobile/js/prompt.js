

/*alert弹出层*/
function jqalert(param) {
    var title = param.title,
        img = param.img,
        content = param.content,
        yestext = param.yestext,
        notext = param.notext,
        yesfn = param.yesfn,
        nofn = param.nofn,
        nolink = param.nolink,
        yeslink = param.yeslink,
        prompt = param.prompt,
        click_bg = param.click_bg;

    if (click_bg === undefined){
        click_bg = true;
    }
    if (yestext === undefined){
        yestext = '确认';
    }
    if (!nolink){
        nolink = 'javascript:void(0);';
    }
    if (!yeslink){
        yeslink = 'javascript:void(0);';
    }

    var htm = '';
    htm +='<div class="jq-alert" id="jq-alert"><div class="alert">';
    if(title) htm+='<h2 class="title"><img src="'+img+'">'+title+'</h2>';
    if (prompt){
        htm += '<div class="content"><div class="prompt">';
        //htm += '<p class="prompt-content">'+prompt+'</p>';
        //TODO 发送ajax
        htm += '<input type="text" class="prompt-text" placeholder="密码""></div>';
        htm +='</div>';
    }else {
        htm+='<div class="content">'+content+'</div>';
    }
    if (!notext){
        //TODO 跳转到课程列表
        htm+='<div class="fd-btn"><a href="'+yeslink+'" class="confirm" id="yes_btn">'+yestext+'</a></div>'
        htm+='</div>';
    }else {
        htm+='<div class="fd-btn">'+
            '<a href="'+nolink+'"  data-role="cancel" class="cancel">'+notext+'</a>'+
            '<a href="'+yeslink+'" data-role="confirm" class="confirm"  id="yes_btn">'+yestext+'</a>'+
            '</div>';
        htm+='</div>';
    }
    $('body').append(htm);
    var al = $('#jq-alert');
    al.on('click','[data-role="cancel"]',function () {
        al.remove();
        if (nofn){
            param.nofn();
            nofn = '';
        }
        param = {};
    });
    // al.on('click','[data-role="confirm"]',function () {
    //     al.remove();
    //     if (yesfn){
    //         param.yesfn();
    //         yesfn = '';
    //     }
    //     param = {};
    // });
    $(document).delegate('.alert','click',function (event) {
        event.stopPropagation();
    });

    $(document).delegate('#yes_btn','click',function () {
        setTimeout(function () {
            al.remove();
        },300);
        if (yesfn){
            if ($("input[type=text]").val().length == 0){
                jqtoast('密码不为空');
            }else{
                var courseid = document.getElementById("cha").dataset.courseid;
                var pwd = $("input[type=text]").val();
                $.post("./php/verify_access.php",{ course_id : courseid, password: pwd},
                    function(data){
                        var res = eval("("+data+")");//转换为json对象
                        if (res['code'] == 0){
                            jqtoast('密码正确，请稍后');

                            yesfn ='';
                            location.href='./files?course_id='+courseid+'&access_code='+ res['access_code'];

                            // param.yesfn();
                            // yesfn ='';
                        }else if(res['code'] == 1){
                            jqtoast('密码错误');
                        }else{
                            jqtoast('数据异常');
                            //jqtoast('密码错误');
                        }
                });
            }
        }
        param = {};
    });
    if(click_bg === true){
        $(document).delegate('#jq-alert','click',function () {
            setTimeout(function () {
                al.remove();
            },300);
            yesfn ='';
            nofn = '';
            param = {};
        });
    }

}
/*toast 弹出提示*/
function jqtoast(text,sec) {
    var _this = text;
    var this_sec = sec;
    var htm = '';
    htm += '<div class="jq-toast" style="display: none;">';
    if (_this){
        htm +='<div class="toast">'+_this+'</div></div>';
        $('body').append(htm);
        $('.jq-toast').fadeIn();

    }else {
        jqalert({
            title:'提示',
            content:'提示文字不能为空',
            yestext:'确定'
        })
    }
    if (!sec){
        this_sec = 1000;
    }
    setTimeout(function () {
        $('.jq-toast').fadeOut(function () {
            $(this).remove();
        });
        _this = '';
    },this_sec);
}
