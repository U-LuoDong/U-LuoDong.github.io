<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）

if(!$_POST['tel']){//如果没有提交表单就跳转到注册页面
			header("Refresh:2;url=register.php");
			$pdo->destruct();
			die("请先注册账号!");
}
//	安全防护开始
$defnce = new defence;
$tel = $defnce->clean_xss($_POST['tel']); //1.防注入代码   
$pas = $defnce->clean_xss($_POST['pas']);
//	安全防护结束

//预处理  添加管理者账户
$strSql= "insert into Controller VALUES(null,?,?)";//插入
$stmt=$pdo->prepareSql($strSql);
$arr=array($tel,$pas);//接收结果的数组
$re=$pdo->preparInsert($stmt,1,$arr);
if($re==1){
	header("Refresh:2;url=sign.php"); //跳转 
	$pdo->destruct();
	die("恭喜您注册账号成功，请登录！");
}else{
	header("Refresh:2;url=register.php"); //跳转 
	$pdo->destruct();
	die ("该账号已注册!请重新注册...");
}
?>