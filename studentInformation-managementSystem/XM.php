<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）
if(!$_POST['NewPas']){//如果没有提交表单就跳转到修改密码页面
			header("Refresh:2;url=Modify_Pas.php");
			$pdo->destruct();
			die("请先修改密码!");
}
//	安全防护开始
$defnce = new defence;
$NewPas = $defnce->clean_xss($_POST['NewPas']); //防注入代码   
$OldPas = $defnce->clean_xss($_POST['OldPas']);
$tel    = $defnce->clean_xss($_POST['tel']);
//	安全防护结束
$strSql="select * from controller";//查询

//预处理  修改管理者密码
$stmt=$pdo->prepareSql($strSql);
if($pdo->execute($stmt)){//execute只是返回执行结果成功或失败
	$result=$pdo->preparExecute($stmt);
}else{
	echo "查询错误";
	$pdo->destruct();
	throw new PDOException;//主动抛出异常
}
foreach($result as $row){
	if($row['uPhone_Number']==$tel){
		if($row['uPassword']==$OldPas){
			//修改密码
			
			//预处理
			$strSql= "update controller set uPassword =? where uPhone_Number=?";//修改
			$stmt=$pdo->prepareSql($strSql);		
			$arr=array($NewPas,$tel);//接收结果的数组
			$re=$pdo->preparInsert($stmt,1,$arr);
			if($re==1){
				header("Refresh:2;url=sign.php"); //跳转 
				$pdo->destruct();
				session_start();
				//删除在数组和服务器端的session数据
				$_SESSION = [];
				session_destroy();
				die ("恭喜您修改密码成功!请重新登录...");
			}else{
				header("Refresh:2;url=Modify_Pas.php"); //跳转 
				die ("出错啦!请重新修改密码...");
				$pdo->destruct();
			}
		}else{
			header("Refresh:2;url=Modify_Pas.php"); //跳转 
			$pdo->destruct();
			die ("旧密码错误，即将跳转到修改密码界面...");
		}
	}
}
$pdo->destruct();
header("Refresh:2;url=Modify_Pas.php"); //跳转 
die ("该账号不存在，即将跳转到修改密码界面...");
?>