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
                $name = I('name');
                $password = I('password');
                if($name =='' || $password ==''){
                    $this->error('用户名或者密码不能为空',U('index'));
                }
                $data[0]['name']="123";   //这里是固定登录账号，以后要改为顾客账号；
                $data[0]['password']="123";   //这里是固定登录账号；
                                        //客户登录账号就是495151240，密码123093176
                if(!empty($data)  && $data[0]['name'] == ($name) && $data[0]['password'] == ($password)){  
                    session('name',$data[0]['name']);
                    session('password',$data[0]['password']);
                    $this->success('登录成功',U('Admin/Index/index'));//这里的U方法的路径有点奇怪！
                } else {
                    $this->error('用户名或者密码错误!');
                }
                           
        }
        public function logout(){
        	session('name',null);
        	session('password',null);
        	$this->success('退出成功！', U('Login/index'));
        }


    }