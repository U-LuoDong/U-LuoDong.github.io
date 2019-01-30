<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）

if(!$_POST['Sid']){//如果没有提交表单就跳转到删除页面
			header("Refresh:2;url=delete.php");
			$pdo->destruct();
			die("请先提交删除信息!");
}
//	安全防护开始
$defnce = new defence;
$Sid = $defnce->clean_xss($_POST['Sid']); //防注入代码   
//	安全防护结束

//预处理 删除某一学生的信息
$strSql= "delete from student where sid=?";//删除
$stmt=$pdo->prepareSql($strSql);
$arr=array($Sid);//接收结果的数组
$re=$pdo->preparInsert($stmt,1,$arr);
if($re==1){
	$pdo->destruct();
	die("恭喜您删除学生信息成功!<br/><a href='http://www.text2.com/demo1/StudentInformationManagementSystem/index.php'>跳转到首页</a>
	<br/><a href='http://www.text2.com/demo1/StudentInformationManagementSystem/delete.php'>继续删除学生信息</a>");
}else{
	header("Refresh:3;url=delete.php"); //跳转 
	$pdo->destruct();
	$pdo->destruct();
	die ("该学生不存在!请重新输入...");
}
?>