var flag_h = 1;
var flag_r = 1;
$(window).scroll(function(){
    //console.log("scrollY="+window.scrollY);
    // console.log(flag_h);
    //console.log($("#front-h").css("display"));
    if (flag_h ^ (window.scrollY < 100)){
        //console.log("scrollY="+window.scrollY);
        if (flag_h == 1){
            $("#front-h").fadeIn(500);
            flag_h = 0;

        }else{
            $("#front-h").css("display",'none');
            flag_h = 1;
        }
    }
    if (flag_r ^ (window.scrollY < 200)){
        console.log($(window).width());
        if (flag_r == 1){
            //$("#front-r").fadeIn(500);
            var posRight = ($(window).width()>1050)? ($(window).width()-1050)/2 : ($(window).width()-1050);
            $("#front-r").css({"position":'fixed',"top": "150px", "right": posRight});
            //$("#front-h").animate({opacity:1},1000);
            //$("#front-h").css("opacity",1);
            flag_r = 0;

        }else{
            $("#front-r").css({"position":'relative',"top": "", "right": ""});
            //$("#front-r").css("display",'none');
            //$("#front-h").css("opacity",0);
            flag_r = 1;
        }
    }


});
