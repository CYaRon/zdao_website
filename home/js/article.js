var em = document.getElementById('btn_next');
var str = em.innerText;
if (str.length > 18){
    str = str.substr(0,18) + '… 下一篇 »';
}//'…下一篇»'
else{
    str = str+ ' 下一篇 »';
}
em.innerText = str;
//console.log('ema: ',str.length , '|',str)
