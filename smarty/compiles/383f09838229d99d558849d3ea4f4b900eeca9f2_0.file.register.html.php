<?php
/* Smarty version 3.1.33, created on 2018-12-23 19:57:40
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f7834b3b788_24438002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383f09838229d99d558849d3ea4f4b900eeca9f2' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\register.html',
      1 => 1545566257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f7834b3b788_24438002 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新增管理员</title>
		<link rel="stylesheet" href="css/register.css" /><!--引入自己的CSS样式-->
		<?php echo '<script'; ?>
 src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div id="Layer"></div><!--遮罩层-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<span id="check_span">验证码错误</span>
			<h3>注册</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://www.text2.com/demo1/StudentInformationManagementSystem/zhuce.php" method="post">
					<p>账号</p>
					<P><input type="text" id="txt_1" class="txt" placeholder="请输入您的手机号码" onblur="checkemail()" name="tel"><span id="txt_1info"></span></P>
					<p>密码</p>
					<P><input type="password" id="txt_2" class="txt" placeholder="请输入您的密码" onblur="checkpassword1()" name="pas"><span id="txt_2info"></span></P>
					<p>确认密码</p>
					<P><input type="password" id="txt_3" class="txt" placeholder="请再次输入您的密码" onblur="checkpassword2()"><span id="txt_3info"></span></P>
					<input type="text" id="text_check" placeholder="默认为0000" />
					<input type="button" value="获取验证码" id="btn" onclick="time1()" />
					<input type="submit" class="but" value="注册" />
				</form>
			</div>
			<div class="login_3">
				<ul>
					<li>
						<a href="#">忘记密码</a>
					</li>
					<li>
						<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/sign_old.php/html">登陆账号</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/register.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html><?php }
}
