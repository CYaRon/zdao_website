$(function () {
	//鼠标移入显示左右箭头和关闭按钮
	//var timer = '';
	// $('.Teachers_container').mouseover(function () {
	// 	$('.teacher_btn_left').show('1000');
	// 	$('.teacher_btn_right').show('1000');
	// 	//clearInterval(timer);
	// }).mouseleave(function () {
	// 	$('.teacher_btn_left').hide('1000');
	// 	$('.teacher_btn_right').hide('1000');
	// 	//timer = setInterval(btn_right, 10000);
	// });

	//点击关闭隐藏轮播图
	// $('.btn_close').on('click', function () {
	// 	$('.Cooldog_container').hide('1000');
	// });

	var arr = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9'];
	//var arr2 = ['thumb1', 'thumb5', 'thumb10', 'thumb3', 'thumb2'];//new
	var arr2 = ['thumb8', 'thumb9', 'thumb1', 'thumb2', 'thumb3', 'thumb4', 'thumb5', 'thumb6', 'thumb7'];
	//var arr2 = ['thumb3', 'thumb2', 'thumb1', 'thumb5', 'thumb4']


	//上一张
	$('.teacher_btn_left').on('click', function () {
		btn_left();
	});

	//下一张
	$('.teacher_btn_right').on('click', function () {
		btn_right();
	});

	//图片自动轮播
	//timer = setInterval(btn_right, 10000);

	//点击上一张的封装函数
	function btn_left() {
		arr.unshift(arr[8]);
		arr.pop();
		$('.Teachers_content li').each(function (i, e) {
			$(e).removeClass().addClass(arr[i]);
		});

		arr2.push(arr2[0]);//new
		arr2.shift();//new
		$('.buttons li').each(function (i, e) {//new
			$(e).removeClass().addClass(arr2[i]);//new
		});//new
		show();
	}

	//点击下一张的封装函数
	function btn_right() {
		arr.push(arr[0]);
		arr.shift();
		$('.Teachers_content li').each(function (i, e) {
			$(e).removeClass().addClass(arr[i]);
		});

		arr2.unshift(arr2[8]);//new
		arr2.pop();//new
		$('.buttons li').each(function (i, e) {//new
			$(e).removeClass().addClass(arr2[i]);//new
		});//new

		show();
	}

	//点击按钮切换图片
	$('.buttons li').on('click', function () {
		var myindex = $(this).index();
		// console.log("click: ",myindex,",",index)
		// console.log("click前: ",arr);
		if (myindex == 2){
			return;
		}else if (myindex > 2) {
			while (myindex != 2){
				btn_left();
				myindex--;
			}
		}else {
			while (myindex != 2){
				btn_right();
				myindex++;
			}
		}

		show();
	})



	//底部按钮高亮
	function show() {
		// console.log("show1: ",index, " arr: ",arr);
		//console.log("show2: ",index, " arr2: ",arr2);
		//console.log("li: ",$('.Teachers_content li'));
		//console.log("li2: ",$('.buttons li'));
		$('.buttons li').eq(2).addClass('color').siblings().removeClass('color');
	}
	// $('.buttons a').eq(index).siblings() 选择除了index以外的“.buttons a”的同胞元素
})
