<?php
/* Smarty version 3.1.33, created on 2018-12-15 14:27:20
  from 'D:\PHPWAMP_IN3\wwwroot\demo1\StudentInformationManagementSystem\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c149ec8146ce1_07288780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28c7c9b4f494bcc939dc793c39cb2ab98c5e3ec4' => 
    array (
      0 => 'D:\\PHPWAMP_IN3\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\index.html',
      1 => 1544709851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c149ec8146ce1_07288780 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minmum-scale=1.0" />
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<!--导入一个可以鼠标悬浮显示下拉菜单的css-->
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/extend.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		
		table {
			color: green;
			height: 60px;
			/*border: 1px solid red;*/
			border-color: 000000;
			border-left-style: solid;
			border-width: 1px;
			display: inline-block;
			position: relative;
			top: 22px;
			left: 25px;
		}
		
		#top img {
			width: 90px;
			height: 70px;
		}
		
		#top-text {
			letter-spacing: 5px;
			font-weight: 580;
			font-size: 20px;
			color: green;
			margin-left: 50px;
		}
		
		li a {
			letter-spacing: 2px;
			color: white;
		}
		
		#bottom {
			color: white;
			font-size: 15px;
			font-family: "微软雅黑";
			font-weight: 100;
		}
		
		
		/*弹窗开始*/
		
		#Function_1_info {
			position: absolute;
			top: 100px;
			left: 40%;
			width: 500px;
			height: 370px;
			border: 1px solid #ddd;
			display: none;
			z-index: 101;
			background-color: white;
		}
		
		#Function_2_info {
			position: absolute;
			top: 100px;
			left: 40%;
			width: 500px;
			height: 600px;
			border: 1px solid #ddd;
			display: none;
			z-index: 102;
			background-color: white;
		}
		
		#Function_3_info {
			position: absolute;
			top: 100px;
			left: 40%;
			width: 500px;
			height: 600px;
			border: 1px solid #ddd;
			display: none;
			z-index: 102;
			background-color: white;
		}
		
		/*遮罩层*/
		#Layer {
			display: none;
			z-index: 100;
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.5);
		}
		
		/*弹窗开始*/
		
	</style>

	<body>
		
		<!--查询开始-->
		
		<div id="Layer"></div>
		
		<!--Function_1开始-->
		<div id="Function_1_info">
			<div class="text-center" style="background-color:#3CB371;color: white;width: 100%;height: 50px;line-height: 50px;">
				信息中心
				<button class="close" onclick="close1()" style="cursor: pointer;">x</button>
			</div>
			<div class="text-center" style="margin-top: 92px;">
				<div class="text-success"><span id="Function_1_number">这里放人数</span>的人数是：</div>
			</div>
		</div>
		<!--Function_1结束-->
		
		<!--Function_2开始-->
		<div id="Function_2_info">
			<div class="text-center" style="background-color:#3CB371;color: white;width: 100%;height: 50px;line-height: 50px;">
				信息中心
				<button class="close" onclick="close2()" style="cursor: pointer;">x</button>
			</div>
			<div>
			<table class="table" style="margin-left: 140px;border-left: none;">
			  <caption class="text-center">计算机科学与技术的专业</caption>
			  <thead>
			    <tr>
			      <th>序号</th>
			      <th>专业</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr class="active">
			      <td>这里放序号</td>
			      <td>这里放专业</td>
			    </tr>
			  </tbody>
			</table>
			</div>
		</div>
		<!--Function_2结束-->
		
		<!--Function_3开始-->
		<div id="Function_3_info">
			<div class="text-center" style="background-color:#3CB371;color: white;width: 100%;height: 50px;line-height: 50px;">
				信息中心
				<button class="close" onclick="close3()" style="cursor: pointer;">x</button>
			</div>
			<div>
			<table class="table" style="margin-left: 140px;border-left: none;">
			  <caption class="text-center"><span id="Function_3_class">XXX</span>专业的班级</caption>
			  <thead>
			    <tr>
			      <th>序号</th>
			      <th>班级</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr class="active">
			      <td>这里放序号</td>
			      <td>这里放班级</td>
			    </tr>
			  </tbody>
			</table>
			</div>
		</div>
		<!--Function_3结束-->
		
		<!--查询结束-->

		<div class="container">
			<!--头部开始-->
			<div id="top" style="height: 100px;">
				<img src="img/nsu.jpg" alt="" class="img-circle" />
				<table>
					<tr>
						<td valign="top"></td>
					</tr>
				</table>
				<div id="top-text" style="display: inline-block;">
					<span style="color: blue;">成都</span>东软学院<br /><span style="font-size: 0.5em;">精勤博学 学以致用 </span>
				</div>
				<!--<img id="heo" src="img/导航栏随机图1.jpg" alt="" class="img-responsive" style="display: inline-block;padding-bottom: 15px;margin-left: 200px;width: 230px;height: 80px;" />-->

				<div id="top_navbar" style="display: inline;">
					<ul class="nav navbar-nav pull-right">
						<li class="active" style="color: green;margin-top: 16px;">
							学生信息管理
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: green;">用户操作<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li id="loginUserID" class="dropdown-header">这里放用户信息</li>
								<li>
									<a id="loginOutAccount" href="#">注销登录</a>
								</li>
								<li>
									<a href="https://net.nsu.edu.cn/password.html" target="_blank">修改密码</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!--头部结束-->

			<!--中间开始-->
			<div id="center">
				<div class="text-center">
					<nav class="navbar navbar-default " role="navigation" style="background-color:#3CB371;color: white;">
						<!--nav-tabs(标签式导航) 、 nav-justified(等宽式)-->
						学生信息管理系统
					</nav>
				</div>
				<div class="panel-body">
					<div id="Function_1">
						<div class="text-center text-primary">查询学生人数</div>
						<div>
							<label for="name" class="text-info">请选择系部:</label>
							<select class="form-control">
								<option>计算机科学与技术系</option>
							</select>
						</div>
						<div>
							<label class="text-info">请选择专业:</label>
							<select class="form-control">
								<option>计算机科学与技术</option>
								<option>软件工程</option>
								<option>网络工程</option>
								<option>物联网工程</option>
								<option>信息工程</option>
								<option>Software Engineering(软件工程）</option>
								<option>数据科学与大数据技术</option>
								<option>信息工程</option>
							</select>
						</div>
						<div>
							<label class="text-info">请选择班级:</label>
							<select class="form-control">
							</select>
						</div>
						<button id="Function_1_btn" class="btn btn-success" onclick="out1()">确定</button>
					</div>
					<div id="Function_2">
						<div class="text-center text-primary">信息查询</div>
						<div>
							<label class="text-info">查询系部对应的专业:</label>
							<select class="form-control">
								<option>计算机科学与技术系</option>
							</select>
							<button id="Function_2_btn_1" class="btn btn-success" onclick="out2()">确定</button>
						</div>
						<div>
							<label class="text-info">查询专业对应的班级:</label>
							<select class="form-control">
								<option>计算机科学与技术</option>
								<option>软件工程</option>
								<option>网络工程</option>
								<option>物联网工程</option>
								<option>信息工程</option>
								<option>Software Engineering(软件工程）</option>
								<option>数据科学与大数据技术</option>
								<option>信息工程</option>
							</select>
							<button id="Function_2_btn_2" class="btn btn-success" onclick="out3()">确定</button>
						</div>
					</div>
					<div id="Function_3">
						<div class="text-center text-primary" style="margin-top: 10px;">学生信息的增删改查</div>
						<div class="text-center" style="margin-top: 20px;">
							<a href="#" class="btn btn-info" />增加</a>
							<a href="#" class="btn btn-info" />删除</a>
							<a href="#" class="btn btn-info" />修改</a>
							<a href="#" class="btn btn-info" />查看</a>
						</div>
					</div>
				</div>
				<div class="text-center">
					<nav class="navbar navbar-default " role="navigation" style="background-color:#3CB371;color: white;">
						<!--nav-tabs(标签式导航) 、 nav-justified(等宽式)-->
						信息中心
					</nav>
				</div>
			</div>
			<!--中间结束-->

			<!--尾部开始-->
			<!--<div id="bottom" class="text-center">
				<nav class="navbar navbar-default bottom" style="background-color:#3CB371;">
					<!--nav-tabs(标签式导航) 、 nav-justified(等宽式)-->
			<!--Copyright © 2002-2014 成都东软学院 All Rights Reserved<br /> 地址：四川省 成都市 都江堰市 青城山镇东软大道1号 邮编：611844 蜀ICP备12011972号
				</nav>
			</div>-->
			<!--尾部结束-->
		</div>
	</body>

</html>

<?php echo '<script'; ?>
 type="text/javascript">
	var Function_1_info = document.getElementById('Function_1_info');
	var Function_2_info = document.getElementById('Function_2_info');
	var Function_3_info = document.getElementById('Function_3_info');
	var layer1 = document.getElementById('Layer');
	//	var h = document.documentElement.clientHeight;//获取高宽
	//	var w = document.documentElement.clientWidth;
	function out1() {
		Function_1_info.style.display = 'block';
		layer1.style.display = 'block';
	}
	function close1() {
		Function_1_info.style.display = 'none';
		layer1.style.display = 'none';
	}
	
	function out2() {
		Function_2_info.style.display = 'block';
		layer1.style.display = 'block';
	}
	function close2() {
		Function_2_info.style.display = 'none';
		layer1.style.display = 'none';
	}
	
	function out3() {
		Function_3_info.style.display = 'block';
		layer1.style.display = 'block';
	}
	function close3() {
		Function_3_info.style.display = 'none';
		layer1.style.display = 'none';
	}
<?php echo '</script'; ?>
><?php }
}
