<?php
require 'PDO_Encapsulation.php';//引入PDO类
require 'denfence.php';//引入安全保护类

$pdo = DAOPDO::getInstance('127.0.0.1', 'root', '110123', 'StudentInformationManagementSystem', 'utf8');
//若下面还有一个对象DAOPDO::getInstance 则不会创建（单例模式）

//	安全防护开始
$defnce = new defence;
$XB = $defnce->clean_xss($_POST['xb']); //防注入代码   
//	安全防护结束
$strSql="select specialtyName from specialty as sp ,department as de where de.departmentName='$XB' and sp.departmentName=de.departmentName;";//查询
//预处理 生成系部对应的专业
$stmt=$pdo->prepareSql($strSql);
if($pdo->execute($stmt)){//execute只是返回执行结果成功或失败
	$result=$pdo->preparExecute($stmt);
}else{
	echo "查询错误";
	$pdo->destruct();
	throw new PDOException;//主动抛出异常
}
$arr=array();//接收结果的数组
//将二维数组转化为一位数组保存传递到前端去
foreach($result as $row) {
	$arr[]=$row['specialtyName'];	
}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);//中文不转为unicode
$pdo->destruct();
?>