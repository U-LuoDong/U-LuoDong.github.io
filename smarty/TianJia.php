<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）

if(!$_POST['Num']){//如果没有提交表单就跳转到添加页面
			header("Refresh:2;url=add.php");
			$pdo->destruct();
			die("请先提交添加信息!");
}
//	安全防护开始
$defnce = new defence;
$Num = $defnce->clean_xss($_POST['Num']); //防注入代码   
$Gr = $defnce->clean_xss($_POST['Gr']); 
$Cl = $defnce->clean_xss($_POST['Cl']); 
$Sid = $defnce->clean_xss($_POST['Sid']);
$Name = $defnce->clean_xss($_POST['Name']);   
$Sex = $defnce->clean_xss($_POST['Sex']);
$Level = $defnce->clean_xss($_POST['Level']); 
//	安全防护结束

//预处理 添加学生信息  
$strSql= "insert into student (num, grade, className, sid, sname, sex, level) VALUES(?,?,?,?,?,?,?)";//插入
$stmt=$pdo->prepareSql($strSql);
$arr=array($Num,$Gr,$Cl,$Sid,$Name,$Sex,$Level);//接收结果的数组
$re=$pdo->preparInsert($stmt,1,$arr);
if($re==1){
	$pdo->destruct();
	die("恭喜您添加学生信息成功!<br/><a href='http://www.text2.com/demo1/StudentInformationManagementSystem/index.php'>跳转到首页</a>
<br/><a href='http://www.text2.com/demo1/StudentInformationManagementSystem/add.php'>继续添加学生信息</a>");
}else{
	header("Refresh:2;url=add.php"); //跳转 
	$pdo->destruct();
	die ("输入有误!请重新输入...");
}
?>