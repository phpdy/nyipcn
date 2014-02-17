<?php

class pay_index extends BaseController {

	public function init(){
		$this->userinfo_model = $this->initModel('userinfo_model','user');
		$this->pay_model = $this->initModel('pay_model');
	}
	
	public function defaultAction(){
//		print_r($_SERVER) ; die();
		//用户登录检验
		@session_start ();
		$user = $_SESSION[FinalClass::$_session_user] ;
		if(empty($user)){
			header("location:login.php?url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		
		$typeid = $_GET['typeid'] ;
		$this->view->assign('typeid',$typeid) ;
		$this->view->assign('user',$user) ;
		
		$this->view->display('pay_order.php');
	}

	public function jumpAction(){

		//用户登录检验
		@session_start ();
		$user = $_SESSION[FinalClass::$_session_user] ;
		if(empty($user)){
			header("location:login.php?url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		
		$typeid = $_GET['typeid'] ;
		$orderid= "NY".time() ;
		$this->view->assign('typeid',$typeid) ;
		$this->view->assign('user',$user) ;
		$this->view->assign('orderid',$orderid) ;
		
//		$this->pay_model->insert() ;
		
		
		$this->view->display('pay_jump.php');
	}

	public function successAction(){

		$typeid = $_GET['typeid'] ;
		$orderid= "NY".time() ;
		$this->view->assign('typeid',$typeid) ;
		$this->view->assign('user',$user) ;
		$this->view->assign('orderid',$orderid) ;
		
//		$this->pay_model->insert() ;
		
		
		$this->view->display('pay_jump.php');
	}
	
}
?>