<?php
    class LoginAction extends Action{
    	public function index(){
    		$this->display();
    	}

        public function check(){
            //dump($_POST);die;
            if(!$this->isPost()){
                $this->error('用户名或者是密码错误',U('index'));
            }       	
                $where['adminName'] = I('name');
                $password = I('password');
                if($where['adminName'] =='' || $password ==''){
                    $this->error('用户名或者密码不能为空',U('index'));
                } else{
                    $isEmp = M('admin')->where($where)->select();
                    if ($isEmp != '') {
                        if ($isEmp[0]['adminPassword'] == $password) {
                            session('name',$isEmp[0]['adminName']);
                            session('password',$isEmp[0]['adminPassword']);
                            $this->success('登录成功', U('Admin/Index/index'));
                        }
                    }else {
                        $this->error('用户名或者密码错误!');
                    }
                }
                           
        }
        public function logout(){
        	session('name',null);
        	session('password',null);
        	$this->success('退出成功！', U('Login/index'));
        }


    }