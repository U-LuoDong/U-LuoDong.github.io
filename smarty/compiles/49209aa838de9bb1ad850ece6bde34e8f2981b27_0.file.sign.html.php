<?php
/* Smarty version 3.1.33, created on 2018-12-23 19:16:48
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\sign.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f6ea0eedf10_12215128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49209aa838de9bb1ad850ece6bde34e8f2981b27' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\sign.html',
      1 => 1545563727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f6ea0eedf10_12215128 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登录neu学生信息管理系统</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="css/sign.css" /><!--引入自己的CSS样式-->
	</head>
	<body>
		<div id="Layer"></div><!--遮罩层-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<br />
			<h3>登陆</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://www.text2.com/demo1/StudentInformationManagementSystem/DengLu.php" method="post">
					<p>账号</p>
					<P><input type="text" id="txt_1" placeholder="请输入您的手机号" onblur="checkemail()" name="tel" class="txt"><span id="txt_1info"></span></P>
					<p>密码</p>
					<P><input type="password" id="txt_2" placeholder="请输入密码" onblur="checkpassword()" name="pas" class="txt"><span id="txt_2info"></span></P>
					<p>验证码</p>
					<P><input type="text" id="code_content" placeholder="请输入验证码" class="txt">
						<img onclick="shuaxin()" id="code" style="cursor: pointer; position: absolute;top: 243px;left: 219px;" src="http://www.text2.com/demo1/StudentInformationManagementSystem/VerificationCode.php" />
						<span id="code_info"></span>
					</P>
					<input type="text"  id="code_1" style="display: none;"/>
					<p><input type="checkbox" name="category" value="保持登陆状态" checked onclick="return false;"/>&nbsp;保持登陆状态</p>
					<input type="submit" class="but" value="登陆" />
				</form>
			</div>
			<div class="login_3">
				<ul>
					<li>
						<a href="#">忘记密码</a>
					</li>
					<li>
						<a href="http://www.text2.com/demo1/StudentInformationManagementSystem/register.php">注册账号</a>
					</li>
				</ul>
			</div>
			<div class="login_4">
				<p>使用社会化账号登陆：
					<a href="#"><img src="img/QQ截图20180123204211.png"></a>&nbsp&nbsp
					<a href="#"><img src="img/35a85edf8db1cb1339d226a4dd54564e93584bc9.jpg"></a>
				</p>
			</div>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/sign.js"><?php echo '</script'; ?>
><!--引入自己的JS-->
</html><?php }
}
