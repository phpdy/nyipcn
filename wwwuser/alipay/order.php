<?php
/* *
 * 功能：支付宝服务器异步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 该页面调试工具请使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyNotify
 * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
 
 * 如何判断该笔交易是通过即时到帐方式付款还是通过担保交易方式付款？
 * 
 * 担保交易的交易状态变化顺序是：等待买家付款→买家已付款，等待卖家发货→卖家已发货，等待买家收货→买家已收货，交易完成
 * 即时到帐的交易状态变化顺序是：等待买家付款→交易完成
 * 
 * 每当收到支付宝发来通知时，就可以获取到这笔交易的交易状态，并且商户需要利用商户订单号查询商户网站的订单数据，
 * 得到这笔订单在商户网站中的状态是什么，把商户网站中的订单状态与从支付宝通知中获取到的状态来做对比。
 * 如果商户网站中目前的状态是等待买家付款，而从支付宝通知获取来的状态是买家已付款，等待卖家发货，那么这笔交易买家是用担保交易方式付款的
 * 如果商户网站中目前的状态是等待买家付款，而从支付宝通知获取来的状态是交易完成，那么这笔交易买家是用即时到帐方式付款的
 */

include "../include/db.php";
require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");


$postcontent=json_encode($_REQUEST);
$logid=log::get_total_millisecond();
log::fileLog("alipay||".$logid."||0||alipay notify request start||post:".$postcontent,'alipay_request_');

//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();

log::fileLog("alipay||".$logid."||1||alipay notify verify_result||verify_result:".$verify_result,'alipay_request_');

if($verify_result) { //验证成功

	log::fileLog("alipay||".$logid."||2||alipay notify verify_result success || out_trade_no :".$_POST['out_trade_no']."||trade_status".$_POST['trade_status'],'alipay_request_');

	if($_POST['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		$used='1';
   	     echo "success";		//请不要修改或删除

   	        $price_new = $_POST['price'];
   	        $out_trade_no_new= $_POST['out_trade_no'];
  			$sql = "update v9_form_apply set state=1,price=".$price_new." where orderid='".$out_trade_no_new."'" ;
  			$result = mysql_query($sql) or die(mysql_error());

  			log::fileLog("alipay||".$logid."||3|| pay sucess ",'alipay_request_');
   	}
 	else if($_POST['trade_status'] == 'WAIT_BUYER_PAY') {
        $used='2';
        echo "success";
            log::fileLog("alipay||".$logid."||3|| pay wait ".$_POST['trade_status'],'alipay_request_');
  	} else {

  	// echo "success";		//请不要修改或删除
    //}else if($_POST['trade_status'] == 'WAIT_BUYER_CONFIRM_GOODS') {
	//该判断表示卖家已经发了货，但买家还没有做确认收货的操作
	
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
			
       // echo "success";		//请不要修改或删除
    //}else if($_POST['trade_status'] == 'TRADE_FINISHED') {
	//该判断表示买家已经确认收货，这笔交易完成
	
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
			
        //echo "success";		//请不要修改或删除
      $used='3';
      echo "success";
  }
/*
	$regist = array('name' => $_POST['receive_name'],
					'email' => $_POST['body'],
					'address' => $_POST['receive_address'],
					'post' => $_POST['receive_zip'],
					'phone' => $_POST['receive_phone'],
					'mphone' => $_POST['receive_mobile'],
					'used' => $used,
					'alipay'=>$_POST['trade_no']
					);
	require_once("../wp-config.php");
	require_once("../wp-includes/wp-db.php");
	return $wpdb->update('cafe_flash',$regist, array( 'number' => $_POST['out_trade_no']));
*/
} else {
  //验证失败
  
 // $sql = "update v9_form_apply set state=2 where orderid=".$_POST['out_trade_no'];
 // $result = mysql_query($sql) or die(mysql_error());
  log::fileLog("alipay||".$logid."||7||alipay notify verify_result fail||error",'alipay_request_');
  echo "fail";
}

$DB -> close();

?>
