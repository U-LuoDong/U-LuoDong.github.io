<?php
include 'Smarty.inc.php';//使用Smarty特性
//----------------------------------------------------
//左右边界符，默认为{}，但实际应用当中容易与JavaScript
//相冲突，所以建议设成<{}>或其它。
//----------------------------------------------------
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
$smarty->display('register.html');
?>