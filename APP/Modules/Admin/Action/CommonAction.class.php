<?php 
	class CommonAction extends Action{	
		function __construct(){
			parent::__construct();
			if(session('name') == '' || session('password') == '' ){
				$this->error('请登录！',U('Login/index'));
			}
		}
	}
?>