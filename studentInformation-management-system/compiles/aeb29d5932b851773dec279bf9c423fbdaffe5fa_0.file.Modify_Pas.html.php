<?php
/* Smarty version 3.1.33, created on 2018-12-26 23:07:09
  from 'D:\PHPWAMP_IN3_1\wwwroot\demo1\StudentInformationManagementSystem\templates\Modify_Pas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c23991d044ce8_18837032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb29d5932b851773dec279bf9c423fbdaffe5fa' => 
    array (
      0 => 'D:\\PHPWAMP_IN3_1\\wwwroot\\demo1\\StudentInformationManagementSystem\\templates\\Modify_Pas.html',
      1 => 1545836825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c23991d044ce8_18837032 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>修改管理员密码</title>
		<link rel="stylesheet" href="css/Modify_Pas.css" />
		<!--引入自己的CSS样式-->
		<?php echo '<script'; ?>
 src="jquery/jquery-3.3.1.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div id="Layer"></div><!--遮罩层-->
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<h3>修改密码</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://www.text2.com/demo1/StudentInformationManagementSystem/XM.php" method="post">
					<p id="phone" style="display:none ;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
					<p>账号</p>
					<P><input type="text" id="txt_1" class="txt" placeholder="请输入您的手机号码" onblur="checkemail()" name="tel"><span id="txt_1info"></span></P>
					<p>旧密码</p>
					<P><input type="password" id="txt_4" class="txt" placeholder="请输入您的旧密码" onblur="checkpassword3()" name="OldPas"><span id="txt_4info"></span></P>
					<p>新密码</p>
					<P><input type="password" id="txt_2" class="txt" placeholder="请输入您的新密码" onblur="checkpassword1()" name="NewPas"><span id="txt_2info"></span></P>
					<p>确认新密码</p>
					<P><input type="password" id="txt_3" class="txt" placeholder="请再次输入您的新密码" onblur="checkpassword2()"><span id="txt_3info"></span></P>
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
 type="text/javascript" src="js/Modify_Pas.js"><?php echo '</script'; ?>
>
	<!--引入自己的JS-->

</html><?php }
}
