function RequestButton(classNo)
{
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
		{
			document.getElementById("ButtonResponse").innerHTML=xmlhttp.responseText;
		}
	}
	// switch (classNo){
	// 	case 0:
	// 		document.getElementById("MyCourseButton").getAtrribute("active")
	// }
	// ;
	xmlhttp.open("GET","./php/invite_get.php?classNo="+classNo,true);
	xmlhttp.send();
}

// function copyText() {
//       var text = document.getElementById("ButtonText").value;
// 	  copyToClipboard(text);
      // text.select(); // 选中文本
	  // console.log(document.getElementById("ButtonText").value);
      // document.execCommand("copy"); // 执行浏览器复制命令
      //alert("复制成功");
// }

// function copyText() {
//         const range = document.createRange();
//         range.selectNode(document.getElementById("ButtonText"));
//
//         const selection = window.getSelection();
//         if(selection.rangeCount > 0) selection.removeAllRanges();
//         selection.addRange(range);
//         document.execCommand('copy');
// 		console.log(selection);
//         alert("复制成功");
// }
