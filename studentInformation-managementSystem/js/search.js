//适应网页大小开始
//浏览器窗口大小被改变时触发事件
window.onresize = function() {
	layer1(); //动态改变遮罩大小
	//动态改变弹窗位置
	setPosition();
}
//动态改变遮罩大小
function layer1() {
	var doc = document.documentElement;
	relHeight = (doc.clientHeight > doc.scrollHeight) ? doc.clientHeight : doc.scrollHeight; //获取屏幕高度和当前页面高度中的较大值
	document.getElementById('Layer1').style.height = relHeight + 'px';
	relWidth = (doc.clientWidth > doc.scrollWidth) ? doc.scrollWidth : doc.clientWidth; //获取屏幕宽度和当前页面宽度中的较小值
	document.getElementById('Layer1').style.width = relWidth + 'px';
//		alert("最大高度："+relHeight+"最小宽度"+relWidth);
}
layer1();
//动态改变遮罩大小
function layer2() {
	var doc = document.documentElement;
	relHeight = (doc.clientHeight > doc.scrollHeight) ? doc.clientHeight : doc.scrollHeight; //获取屏幕高度和当前页面高度中的较大值
	document.getElementById('Layer2').style.height = relHeight + 'px';
	relWidth = (doc.clientWidth > doc.scrollWidth) ? doc.scrollWidth : doc.clientWidth; //获取屏幕宽度和当前页面宽度中的较小值
	document.getElementById('Layer2').style.width = relWidth + 'px';
//		alert("最大高度："+relHeight+"最小宽度"+relWidth);
}
layer2();
function setPosition() {
	var doc = document.documentElement;
	//获得窗口的垂直位置; 
	var iTop = (doc.clientHeight - 8 - document.getElementById('login').offsetHeight) / 2;
	//获得窗口的水平位置;  
	var iLeft = (doc.clientWidth - 5 - document.getElementById('login').offsetWidth) / 2;
	$(login).css({
		'top': iTop,
		'left': iLeft
	});
}
setPosition();
//适应网页大小结束
//		<!--表单验证js-->
function check() {
	/*获取表单元素和提示信息*/
	var num_1 = document.getElementById('txt_1').value.trim();
	var num_1Info = document.getElementById('txt_1info');
	var num_2 = document.getElementById('txt_2').value.trim();
	var num_2Info = document.getElementById('txt_2info');
	/*定义变量返回错误*/
	var a = 1;
	var b = 1;
	/*定义变量返回错误*/
	/*验证密码开始*/
	var myreg = /^\d{11}$/;
	if(!myreg.test(num_1)) {
		num_1Info.innerHTML = "格式错误";
		num_1Info.style.color = "red";
		a = 0;
	} else {
		num_1Info.innerHTML = "格式正确";
		num_1Info.style.color = "green";
	}

	if(!myreg.test(num_2)) {
		num_2Info.innerHTML = "格式错误";
		num_2Info.style.color = "red";
		b = 0;
	} else if(num_1 != num_2) {
		num_2Info.innerHTML = "格式错误";
		num_2Info.style.color = "red";
		b = 0;
	} else {
		num_2Info.innerHTML = "格式正确";
		num_2Info.style.color = "green";
	}
	/*验证密码结束*/
	/*定义变量返回错误*/
	if(a == "0" || b == "0") {
		return false;
	} else {
		return true;
	}
	/*定义变量返回错误*/
}

function checkNum1() {
	var num_1 = document.getElementById('txt_1').value.trim();
	var num_1Info = document.getElementById('txt_1info');
	//正则表达式:11位数字
	var myreg = /^\d{11}$/;
	if(!myreg.test(num_1)) {
		num_1Info.innerHTML = "格式错误";
		num_1Info.style.color = "red";
		return false;
	} else {
		num_1Info.innerHTML = "格式正确";
		num_1Info.style.color = "green";
		return true;
	}
}

function checkNum2() {
	var num_1 = document.getElementById('txt_1').value.trim();
	var num_2 = document.getElementById('txt_2').value.trim();
	var num_2Info = document.getElementById('txt_2info');
	//正则表达式:11位数字
	var myreg = /^\d{11}$/;
	if(!myreg.test(num_2)) {
		num_2Info.innerHTML = "格式错误";
		num_2Info.style.color = "red";
		return false;
	} else if(num_1 != num_2) {
		num_2Info.innerHTML = "格式错误";
		num_2Info.style.color = "red";
		return false;
	} else {
		num_2Info.innerHTML = "格式正确";
		num_2Info.style.color = "green";
		return true;
	}
}
//		<!--表单验证js-->

//显示开始
var Function_info = document.getElementById('Function_info');
var layer2 = document.getElementById('Layer2');

function out() {
	check();
	if(check() == true) {
		GeneratInfo(); //异步生成信息
		$("#Function_tb").html(""); //将原先的内容删除
		Function_info.style.display = 'block';
		layer2.style.display = 'block';
	}
}

function close1() {
	Function_info.style.display = 'none';
	layer2.style.display = 'none';
}
//显示结束

//异步生成信息
function GeneratInfo() {
	$.ajax({
		url: 'http://www.text2.com/demo1/StudentInformationManagementSystem/ChaKan.php',
		type: 'POST',
		dataType: 'json',
		data: {
			//这里是请求参数，前面是键名，后面是值
			Sid: document.getElementById('txt_1').value.trim(),
		},
		success: function(msg) {
//									alert("1");
			document.getElementById("Function_Sid").innerHTML = document.getElementById('txt_1').value.trim(); //添加班级信息
			var tb = document.getElementById("Function_tb");
			//每次装入一个
			var tr = document.createElement("tr");
			var i;
			for(i = 0; i < msg.length; i++) {
				var td = document.createElement("td");
				var num = document.createTextNode(msg[i]);
				td.appendChild(num);
				tr.appendChild(td);
				tr.className = 'active';
			}
			tb.appendChild(tr);
		}
	});
}
