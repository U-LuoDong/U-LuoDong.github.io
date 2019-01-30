<?php
/* Smarty version 3.1.33, created on 2018-12-27 08:23:28
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\modify.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c241b8079b232_39438074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e2741ea4f8152873fdf37f2a74fbf1dadc4a925' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\modify.html',
      1 => 1545870205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c241b8079b232_39438074 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>修改学生信息</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="css/modify.css" /><!--引入自己的CSS样式-->
	</head>
	<body>
		<div id="Layer"></div><!--遮罩层-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<br />
			<h3>修改学生信息</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://www.text2.com/demo1/StudentInformationManagementSystem/XiuGai.php" method="post">
					<div>
						<label>序号</label>
						<label><input type="text" id="txt_1" placeholder="请输入学生的序号" onblur="checkNum()" name="Num" class="txt"><span id="txt_1info" class="txt"></span></label>
						<label>年级</label>
						<label><input type="text" id="txt_2" placeholder="请输入学生所处的年级" onblur="checkGrade()" name="Gr" class="txt"><span id="txt_2info"></span></label>
					</div>
					<div style="margin-top: 10px;">
						<label>班级</label>
						<label><input type="text" id="txt_3" placeholder="请输入学生的班级" onblur="checkClass()" name="Cl" class="txt"><span id="txt_3info"></span></label>
						<label>学号</label>
						<label><input type="text" id="txt_4" placeholder="请输入学生的学号" onblur="checkSid()" name="Sid" class="txt"><span id="txt_4info"></span></label>
					</div>

					<div style="margin-top: 10px;">
						<label>姓名</label>
						<label><input type="text" id="txt_5" placeholder="请输入学生的姓名" onblur="checkSname()" name="Name" class="txt"><span id="txt_5info"></span></label>
						<label>性别</label>
						<label><input type="text" id="txt_6" placeholder="请输入学生所处的性别" onblur="checkSex()" name="Sex" class="txt"><span id="txt_6info"></span></label>
					</div>

					<div style="margin-top: 10px;">
						<label>层次</label>
						<label><input type="text" id="txt_7" placeholder="请输入学生的培养层次" onblur="checkLevel()" name="Level" class="txt"><span id="txt_7info"></span></label>
					</div>
					<input style="margin-top: 10px; margin-left: 200px;" type="submit" class="but" value="确认" />
				</form>
			</div>
			<div class="login_3" >
				<ul>
					<li>
						<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/index_old.php/html">跳转到首页</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/add.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html><?php }
}
