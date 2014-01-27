<?php
//会员管理
class userinfo_model extends BaseModel {
	protected $dbIndex = 'admin';
	protected $dbTable = "userinfo" ;
	
	protected $items = array('name','password','username','sex','birth','sfz','province','city','address','post','mobile','phone','email','createtime','memberid','member') ;


	protected function getOrder(){
		return "order by name " ;
	}
}

