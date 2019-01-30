<?php
//	查询学生信息页面
include 'Smarty.inc.php';//使用Smarty特性
//----------------------------------------------------
//左右边界符，默认为{}，但实际应用当中容易与JavaScript
//相冲突，所以建议设成<{}>或其它。
//----------------------------------------------------
session_start();
if(!$_SESSION['tel']){
	header("Refresh:2;url=sign.php");
	die("请先登录系统!");
}
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
$smarty->display('search.html');
?>