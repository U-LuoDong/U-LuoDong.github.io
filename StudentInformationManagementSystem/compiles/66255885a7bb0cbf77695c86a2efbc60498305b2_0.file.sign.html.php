<?php
/* Smarty version 3.1.33, created on 2018-12-14 00:05:24
  from 'D:\PHPWAMP_IN3\wwwroot\demo1\Student Information Management System\templates\sign.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c128344cec1a4_57769348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66255885a7bb0cbf77695c86a2efbc60498305b2' => 
    array (
      0 => 'D:\\PHPWAMP_IN3\\wwwroot\\demo1\\Student Information Management System\\templates\\sign.html',
      1 => 1544707844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c128344cec1a4_57769348 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
			#login {
				position: absolute;
				top: 100px;
				left: 40%;
				width: 360px;
				height: 480px;
				border: 1px solid #ddd;
				background-color: white;
			}
			
			#login_1 {
				margin: 2px 2px 0px 0px;
				float: right;
			}
		    #login_span{
				position: absolute;
			    left: 105px;
			    color: #666;
				font-size: 20px;
				font-family: "微软雅黑";
				font-weight: 400px;
			}
			h3 {
				color: #666;
				font-size: 20px;
				font-family: "微软雅黑";
				font-weight: 100;
				text-align: center;
			}
			.login_2 {
				width: 261px;
				height: 260px;
				margin: 0px auto;
			}
			
			.login_2 p {
				color: #666;
				font-size: 14px;
				font-family: "微软雅黑";
				line-height: 0px;
			}
			
			.login_2 p input#txt_1 {
				height: 38px;
				width: 258px;
				border: 1px solid #ddd;
			}
			
			.login_2 p input#txt_2 {
				height: 38px;
				width: 258px;
				border: 1px solid #ddd;
			}
			
			.but {
				height: 40px;
				width: 261px;
				color: #fff;
				font-size: 18px;
				font-family: "微软雅黑";
				border: none;
				background-color: black;
			}
			.login_3 {
				width: 100%;
				height: 30px;
			}
			.login_3 li {
				display: inline;
			}
			.login_3 li a {
				margin-left: 50px;
				color: #666;
				font-family: "微软雅黑";
				text-decoration: none;
			}
			
			.login_4 {
				width: 360px;
				height: 140px;
			}
			
			.login_4 p {
				line-height: 40px;
				color: #666;
				font-family: "微软雅黑";
			}
			
			.login_4 img {
				position: relative;
				top: 20px;
				width: 50px;
				height: 50px;
			}
            #txt_1info {
				position: absolute;
				top: 113px;
				color: red;
			}
			#txt_2info {
				position: absolute;
				top: 185px;
				color: red;
			}
		</style>
	</head>
	<body>
		<div id="login">
			<span id="login_span">neu信息管理系统</span>
			<br />
			<h3>登陆</h3>
			<div class="login_2">
				<form onsubmit="return check()" action="http://localhost/demo1/2.php/3.php" method="post">
					<p>账号</p>
					<P><input type="text" id="txt_1" placeholder="请输入您的手机号" onblur="checkemail()" name="tel"><span id="txt_1info"></span></P>
					<p>密码</p>
					<P><input type="password" id="txt_2" placeholder="请输入密码" onblur="checkpassword()" name="pas"><span id="txt_2info"></span></P>
							<p><input type="checkbox" />&nbsp;保持登陆状态</p>
							<input type="submit" class="but" value="登陆" />
				</form>
			</div>
			<div class="login_3">
				<ul>
					<li>
						<a href="#">忘记密码</a>
					</li>
					<li>
						<a href="register.html">注册账号</a>
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
		<!--表单验证js-->
		<?php echo '<script'; ?>
>
			     function check() {
					/*获取表单元素和提示信息*/
					var email = document.getElementById('txt_1').value;
					var password = document.getElementById('txt_2').value;
					var emailinfo = document.getElementById('txt_1info');
					var passwordinfo= document.getElementById('txt_2info');
					/*验证账号*/
					var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
					if(!myreg.test(email)) {
						emailinfo.innerHTML = "错误";
						return false;
					} else {
						return true;
					}
					/*验证密码*/
					if(password==""){
						passwordinfo.innerHTML="错误";
						return false;
					}else if(password.length<6){
						passwordinfo.innerHTML="错误";
						return false;
					}
				}
			    function checkemail(){
			    	var email = document.getElementById('txt_1').value;
			    	var emailinfo = document.getElementById('txt_1info');
			    	var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
					if(!myreg.test(email)) {
						emailinfo.innerHTML = "错误";
						emailinfo.style.color = "red";
						return false;
					} else {
						emailinfo.innerHTML = "正确";
					    emailinfo.style.color = "blue";
						return true;
					}
			    }
			    function checkpassword(){
			    	var password = document.getElementById('txt_2').value;
			    	var passwordinfo= document.getElementById('txt_2info');
			    	if(password==""){
						passwordinfo.innerHTML="错误";
						passwordinfo.style.color="red";
						return false;
					}else if(password.length<6){
						passwordinfo.innerHTML="错误";
						passwordinfo.style.color="red";
						return false;
					}else{
						passwordinfo.innerHTML = "正确";
						passwordinfo.style.color="blue";
					}
			    }
		<?php echo '</script'; ?>
>
			<!--表单验证js-->
	</body>
</html>
<?php }
}
