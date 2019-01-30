<?php
/* Smarty version 3.1.33, created on 2018-12-23 20:26:54
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\delete.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f7f0e246606_83453440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2d9aac06417e897654955b20d312250c50059a' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\delete.html',
      1 => 1545568012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f7f0e246606_83453440 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>删除学生信息</title>
		<?php echo '<script'; ?>
 src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="css/delete.css" /><!--引入自己的CSS样式-->
	</head>
	<body>
		<div id="Layer"></div><!--遮罩层-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<h3>删除学生信息</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://www.text2.com/demo1/StudentInformationManagementSystem/ShanChu.php" method="post">
					<p>学生学号</p>
					<P><input type="text" id="txt_1" class="txt" placeholder="请输入要删除的学生学号" onblur="checkNum1()" name="Sid"><span id="txt_1info"></span></P>
					<p>确认学生学号</p>
					<P><input type="text" id="txt_2" class="txt" placeholder="请再次输入要删除的学生学号" onblur="checkNum2()"><span id="txt_2info"></span></P>
					<input type="submit" class="but" value="确认" />
				</form>
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
 type="text/javascript" src="js/delete.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html><?php }
}
