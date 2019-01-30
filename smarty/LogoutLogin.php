<?php
	session_start();
	//删除在数组和服务器端的session数据
	$_SESSION = [];
	session_destroy();
	header("Refresh:2;url=sign.php"); //跳转 
	die ("注销登陆成功!即将跳转到登录页面...");
?>