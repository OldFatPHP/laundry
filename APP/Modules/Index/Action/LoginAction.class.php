<?php
    class LoginAction extends Action{
    	public function index(){
    		$this->display();
    	}

        public function check(){
            // dump($_POST);die;
            if(!$this->isPost()){
                $this->error('用户名或者是密码错误',U('index'));
            }
            $userPhone = I('name');
            $password = I('password');
            $model = M('user');
            $condition['userPhone'] = $userPhone;
            $data = $model->where($condition)->select();
            //dump($data);die;
            if(!empty($data)  && $data[0]['userPhone'] == ($userPhone) && $data[0]['userPwd'] == ($password)){
                session('userPhone',$data[0]['userPhone']);
                session('userPwd',$data[0]['userPwd']);
                $this -> redirect(GROUP_NAME . '/Index/index');
            } else {
                $this->error('用户名或者是密码错误', U('Login/index'));
            }
                           
        }


        public function logout(){
        	session('userPhone',null);
        	session('userPwd',null);
        	$this->redirect('Login/index');
        }


        public function register(){//用户注册界面；
        
        $this->display();
        }



        public function addRegister(){//用户注册；
            $userData = $_POST;
            $res = M('user') -> add($userData);
            if ($res) {
                $this -> success('注册成功，请登录...', U('Login/index'));
            }else {
                $this -> error('注册失败，请重新注册...');
            }
        }

        public function findPwd(){//找回密码界面；
            $this->display();
        }

    }