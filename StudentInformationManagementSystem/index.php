<?php
include 'Smarty.inc.php';//使用Smarty特性
//----------------------------------------------------
//左右边界符，默认为{}，但实际应用当中容易与JavaScript
//相冲突，所以建议设成<{}>或其它。
//----------------------------------------------------
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
session_start();
$tel=$_SESSION['tel'];
$smarty->assign('name',$tel);
if(!$tel){
	header("Refresh:2;url=sign.php");
	die("请先登录系统!");
}
$smarty->display('index.html');
?>