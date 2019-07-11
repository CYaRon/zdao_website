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
            console.log(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET","./php/like_num_status.php?table_name="+table_name+"&article_id="+article_id,true);
	xmlhttp.send();
}
