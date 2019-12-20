function like_numctn(table_name,article_id){
    var xmlhttp;
	//console.log("show: "+pageNo);
	if (window.XMLHttpRequest)
	{
		// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{   //回调成功后 TODO 添加class
			//document.getElementById("MyCourseList").innerHTML=xmlhttp.responseText;
            if (xmlhttp.responseText == "2"){
                anp('.content .article-bottom  #article-up a');
            }
            console.log(xmlhttp.responseText);

		}
	}
	xmlhttp.open("GET","./php/like_num_status.php?table_name="+table_name+"&article_id="+article_id,true);
	xmlhttp.send();
}
// $(".content .article-bottom li a").on("click",".content .article-bottom li a",function(e){
//     anp(e);
// })
function anp(e) {
    var $i = $("<b>").text("+" + 1);
    var x = e.pageX,y = e.pageY;
    // console.log("x: "+e.pageX+" y: "+e.pageY);
    $i.css({
        top: y - 20,
        left: x,
        position: "absolute",
        color: "#E94F06"
    });
    $(".content .article-bottom  #article-up a").append($i);
    $i.animate({
        top: y - 120,
        opacity: 0,
        "font-size": "1.4em"
    }, 1000, function() {
        $i.remove();
        $('.content .article-bottom li a').eq(0).addClass('active').removeClass('no_active');
    });
    //e.stopPropagation();
}
