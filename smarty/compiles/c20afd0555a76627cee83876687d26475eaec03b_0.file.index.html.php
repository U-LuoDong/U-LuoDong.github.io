<?php
/* Smarty version 3.1.33, created on 2018-12-23 15:18:46
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f36d677fcd4_53875207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c20afd0555a76627cee83876687d26475eaec03b' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\index.html',
      1 => 1545549488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f36d677fcd4_53875207 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>neu学生信息管理系统</title>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minmum-scale=1.0" />
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<!--导入一个可以鼠标悬浮显示下拉菜单的css-->
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/extend.css" />
		<link rel="stylesheet" href="css/index.css" /><!--引入自己的CSS样式-->
		<?php echo '<script'; ?>
 type="text/javascript" src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<!--查询开始-->

		<div id="Layer"></div><!--遮罩层-->

		<!--Function_1开始-->
		<div id="Function_1_info">
			<div class="text-center" style="background-color:#3CB371;color: white;width: 100%;height: 50px;line-height: 50px;">
				信息中心
				<button class="close" onclick="close1()" style="cursor: pointer;">x</button>
			</div>
			<div class="text-center" style="margin-top: 92px;">
				<div class="text-success">
					<span id="Function_1_specialty" class="text-warning">正在加载中...</span>
					<span id="Function_1_cl" class="text-warning">正在加载中...</span> 的人数是：
					<span id="Function_1_number" class="text-danger">正在加载中...</span>
				</div>
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
				<table class="table" style="margin-left: 90px;border-left: none;" id="Function_2_t">
					<caption class="text-center" style="margin-right: 40px;">计算机科学与技术系的专业</caption>
					<thead>
						<tr>
							<th>序号</th>
							<th style="padding-left: 30px;">专 业</th>
						</tr>
					</thead>
					<tbody id="Function_2_tb">
						<tr class="active" >
							<td>正在加载中...</td>
							<td>正在加载中...</td>
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
				<table class="table" style=" margin-left: 10px;border-left: none;" id="Function_3_t">
					<caption class="text-center" ><span id="Function_3_class" class="text-danger">XXX</span>专业的班级</caption>
					<thead>
						<tr>
							<th>序号</th>
							<th style="padding-left: 30px;">专业</th>
							<th>序号</th>
							<th style="padding-left: 30px;">专业</th>
						</tr>
					</thead>
					<tbody id="Function_3_tb">
						<tr class="active" >
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
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
				<!--<img id="heo" src="img/timg (9).jpg" alt="" class="img-responsive" style="display: inline-block;padding-bottom: 15px;margin-left: 200px;width: 230px;height: 80px;" />-->

				<div id="top_navbar" style="display: inline;">
					<ul class="nav navbar-nav pull-right">
						<li class="active" style="color: green;margin-top: 16px;">
							学生信息管理
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: green;">用户操作<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li id="loginUserID" class="dropdown-header">
									管理员<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 
								</li>
								<li>
									<a id="loginOutAccount" href="http://www.text2.com/demo1/StudentInformationManagementSystem/LogoutLogin.php">注销登录</a>
								</li>
								<li>
									<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/Modify_Pas.php">修改密码</a>
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
							<select class="form-control" id="Function_1_sp" onChange="F1_ChangeSP()">
								<option>该项表示不对专业进行查询</option>
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
							<select class="form-control" id="Function_1_class" onChange="F1_ChangeCl()">
								<option>该项表示不对班级进行查询</option>
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
							<select class="form-control" id="Function_3_cl" onChange="F3_ChangeCl()">
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
							<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/add.php" class="btn btn-info" />增加</a>
							<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/delete.php" class="btn btn-info" />删除</a>
							<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/modify.php" class="btn btn-info" />修改</a>
							<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/search.php" class="btn btn-info" />查看</a>
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
			<div id="bottom" class="text-center">
				<nav class="navbar navbar-default bottom" style="background-color:#3CB371;">
					<!--nav-tabs(标签式导航) 、 nav-justified(等宽式)-->
			Copyright © 2002-2014 成都东软学院 All Rights Reserved<br /> 地址：四川省 成都市 都江堰市 青城山镇东软大道1号 邮编：611844 蜀ICP备12011972号
				</nav>
			</div>-
			<!--尾部结束-->
		</div>
	</body>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html>

<?php }
}
