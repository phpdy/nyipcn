<?php
//支付
class pay_model extends BaseModel {
	protected $dbIndex = 'admin';
	protected $dbTable = "lesson_pay" ;
	
	protected $items = array('orderid','ptype','state','userid','username','money','paytype','paydate','other','recorder','recordtime') ;
	

	protected function getOrder(){
		return "order by orderid " ;
	}
}

