var deviceWidth = parseInt(window.screen.width);  //获取当前设备的屏幕宽度
var deviceScale = deviceWidth / 1024;  //得到当前设备屏幕与640之间的比例，之后我们就可以将网页宽度固定为640px
var ua = navigator.userAgent;
//获取当前设备类型（安卓或苹果）
if (/Android (\d+\.\d+)/.test(ua)) {
    var version = parseFloat(RegExp.$1);
    if (version > 2.3) {
        document.write('<meta name="viewport" content="width=1024,initial-scale=' + deviceScale + ', minimum-scale = ' + deviceScale + ', maximum-scale = ' + deviceScale + ', target-densitydpi=device-dpi">');
    } else {
        document.write('<meta name="viewport" content="width=1024,initial-scale=0.75,maximum-scale=0.75,minimum-scale=0.75,target-densitydpi=device-dpi" />');
    }
} else {
    document.write('<meta name="viewport" content="width=1024, user-scalable=no">');
}
