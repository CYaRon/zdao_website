$('#cha').click(function () {
    jqalert({
        img:'./img/logo.png',
        title:'请输入密码',
        prompt:' ',
        yestext:'确定',
        notext:'取消',
        yesfn:function () {
            // TODO: 密码验证
            jqtoast('密码正确，请稍后');
            console.log("密码正确："+$("input[type=text]").val());
        },
        nofn:function () {
            jqtoast('你点击了取消');
            console.log("你点击了取消");
        }
    })
})
