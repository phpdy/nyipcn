<?php

class main_index extends BaseController {
	public function init(){
		$this->model = $this->initModel('user_model','admin');
		$this->module = $this->initModel('module_model','admin');
		$this->system = $this->initModel('system_model','admin');
	}
	//首页
	public function defaultAction(){
		@session_start();
		if (!empty($_SESSION[FinalClass::$_session_user]) && is_array($_SESSION [FinalClass::$_session_user])){
			$this->view->display('index.php') ;
			die();
		}
		$data = array(
			'name'=>'admin',
			'password'=>'123',
		);
		$user = $this->model->query($data) ;
//		print_r($user) ;
		$this->view->display('login.php');
	}
	
	//登录
	public function loginAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		$username = Lib::safeS ( @$_POST ['username'] );
		$password = Lib::safeS ( @$_POST ['password'] );
		$log .= "|$username,$password" ;
		$userinfo = $this->model->getUserInfo ( $username );
		if ($userinfo) {
//			$password = md5($password) ;
			if ($userinfo ['password'] !=  $password ) {
				$this->view->assign('message','密码错误！') ;
			} else {
				@session_start ();

				$_SESSION [FinalClass::$_session_user] = $userinfo ;
//				@$_SESSION ['userid'] = $userinfo ['id'];
			}
		} else {
			$this->view->assign('message','用户不存在！') ;
		}
		
		$this->defaultAction() ;
//		$this->view->display('index.php') ;
		
		$log .= "|" ;
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	
	//退出
	public function loginoutAction(){
		@session_start ();
		$_SESSION [FinalClass::$_session_user] = null ;
		unset($_SESSION[FinalClass::$_session_user]) ;
		$this->view->display('login.php') ;
	}

}

?>