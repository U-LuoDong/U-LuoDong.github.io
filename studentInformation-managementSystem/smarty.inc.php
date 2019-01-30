<?php
//Smarty.inc.php是自己编写的php文件，用作Smarty的
//核心文件，以后的php文件如果用到Smarty特性都要引用这个文件。

//首先包含Smarty类文件
include_once('/libs/Smarty.class.php');
//实例化Smarty类文件
$smarty=new Smarty();
$smarty->cache_dir="caches";//缓存文件夹可选为减轻压力

//关闭缓存
$smarty->caching=false;//关闭缓存，调试中建议关闭，默认为关闭，在实际运行的时候请打开，减轻服务器压力

//开启缓存
//$smarty->caching=true;
//$smarty->cache_lifetime=10;//缓存存活时间（秒），一般没有这么短的，官方默认为120s

$smarty->template_dir="templates";//设置模版目录
$smarty->compile_dir="compiles";//设置编译目录必选
?>