<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）
if(!$_POST['tel']){//如果没有提交表单就跳转到登录页面
			header("Refresh:2;url=sign.php");
			$pdo->destruct();
			die("请先登录系统!");
}
//	安全防护开始
$defnce = new defence;
$tel = $defnce->clean_xss($_POST['tel']); //防注入代码   
$pas = $defnce->clean_xss($_POST['pas']);
//	安全防护结束
$strSql="select * from controller";//查询

//预处理  登录学生管理系统
$stmt=$pdo->prepareSql($strSql);
if($pdo->execute($stmt)){//execute只是返回执行结果成功或失败
	$result=$pdo->preparExecute($stmt);
}else{
	echo "查询错误";
	$pdo->destruct();
	throw new PDOException;//主动抛出异常
}
foreach($result as $row){
	if($row['uPhone_Number']==$tel&&$row['uPassword']==$pas){
		if($_POST["category"]){//没有保持登录状态  那么每次需要重新登录
			session_start();
			$_SESSION['tel']=$tel;
		}
		header("Refresh:2;url=index.php"); //跳转 
		$pdo->destruct();
		die ("登陆成功!");
	}
}
header("Refresh:2;url=sign.php"); //跳转 
$pdo->destruct();
die ("登陆账号或密码有误，请重新登录！");
?>