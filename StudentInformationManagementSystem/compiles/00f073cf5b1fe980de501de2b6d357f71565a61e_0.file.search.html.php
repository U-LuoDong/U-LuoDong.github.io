<?php
/* Smarty version 3.1.33, created on 2018-12-23 21:08:09
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f88b97ec2e2_59986455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00f073cf5b1fe980de501de2b6d357f71565a61e' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\search.html',
      1 => 1545570436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f88b97ec2e2_59986455 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>查看学生信息</title>
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<!--导入一个可以鼠标悬浮显示下拉菜单的css-->
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/extend.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="css/search.css" /><!--引入自己的CSS样式-->
		<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div id="Layer1"></div><!--遮罩层-->
		<div id="Layer2"></div><!--遮罩层-->
		<!--显示查询信息开始-->
		<div id="Function_info">
			<div class="text-center" style="background-color:#3CB371;color: white;width: 100%;height: 50px;line-height: 50px;">
				信息中心
				<button class="close" onclick="close1()" style="cursor: pointer;">x</button>
			</div>
			<div>
				<table class="table" style=" margin-left: 10px;border-left: none;" id="Function_3_t">
					<caption class="text-center"><span id="Function_Sid" class="text-danger">XXX</span>的信息</caption>
					<thead>
						<tr>
							<th>序号</th>
							<th style="padding-left: 30px;">院(系)部</th>
							<th>年级</th>
							<th style="padding-left: 30px;">专业</th>
							<th>班级</th>
							<th style="padding-left: 30px;">学号</th>
							<th>姓名</th>
							<th style="padding-left: 30px;">性别</th>
							<th>学生培养层次</th>
						</tr>
					</thead>
					<tbody id="Function_tb">
						<tr class="active">
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
							<td>正在加载中...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--显示查询信息结束-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<h3>查看学生信息</h3>
			<div class="login_2">
				<!--<form  method="post">-->
					<p>学生学号</p>
					<P><input type="text" id="txt_1" class="txt" placeholder="请输入要查看信息的学生学号" onblur="checkNum1()"><span id="txt_1info"></span></P>
					<p>确认学生学号</p>
					<P><input type="text" id="txt_2" class="txt" placeholder="请再次输入学生学号" onblur="checkNum2()"><span id="txt_2info"></span></P>
					<input type="submit" onclick="out()" class="but" value="确认" />
				<!--</form>-->
			</div>
			<div class="login_3">
				<ul>
					<li>
						<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/index_old.php/html">跳转到首页</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/search.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html><?php }
}
