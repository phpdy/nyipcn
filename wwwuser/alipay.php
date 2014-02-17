<?php
header("content-type:text/html; charset=utf-8") ;
//设置默认控制器 
if (empty($_GET['dir'])) {
	$_GET['dir'] = "pay";
}
//设置默认控制器 
if (empty($_GET['control'])) {
	$_GET['control'] = "alipay";
}
//设置默认Action
if (empty($_GET['action'])) {
	$_GET['action'] = 'default';
}

require_once("alipay/alipay.config.php");
require_once("alipay/lib/alipay_notify.class.php");

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'frame' .DIRECTORY_SEPARATOR . 'start.php';
