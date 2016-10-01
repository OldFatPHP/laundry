<?php
class HomeAction extends CommonAction{
    //这是前台个人主页！
    public function index(){
        $where['userPhone']=session('userPhone');
        $userData = M('user') -> where($where) -> select();
        $user['userPhone'] = $userData[0]['userPhone'];
        $user['userIntegral'] = $userData[0]['userIntegral'];//用户积分；
        $user['userBalance'] = $userData[0]['userBalance'];//用户余额；
        $find['usercouponUserId'] = $userData[0]['userId'];
        $thisdate = date('Y-m-d'); //得到当前日期；
        $find['usercouponCreateTime']  = array('elt',$thisdate);
        $find['failureTime']  = array('egt',$thisdate);
        $user['coupon'] = M('usercoupon')->where($find)->count();// 查询优惠卷的总记录数 
        $this -> user = $user;
        $this -> display('home');
    }


    public function recharge(){   //余额充值显示；
         //dump($_GET);die;
         $user['userBalance'] = I('userBalance');//用户余额；
         $this -> user = $user;
         $this->display('recharge');
     }


    public function coupon(){//用户优惠卷；
        $user['userPhone'] = session('userPhone');
        $userData = M('user') -> where($user) -> select();
        $where['usercouponUserId'] = $userData[0]['userId'];
        $where['usercouponStatus'] = "1";
        $thisdate = date('Y-m-d'); //得到当前日期；
        $where['usercouponCreateTime']  = array('elt',$thisdate);
        $where['failureTime']  = array('egt',$thisdate);
        $usercouponData = M('usercoupon') -> where($where) -> select();
        //dump($usercouponData);die;
        $this -> assign('usercouponData', $usercouponData);
        $this->display('coupon');
     }

      public function rechargeAdd(){   //余额充值；
         //dump(I());die;
         $value = I('value');
         $where['userPhone']=session('userPhone');
         $userData = M('user') -> where($where) -> select();
         $userBalance = $userData[0]['userBalance'];//用户余额； 
         $userData['userBalance'] = $userBalance + I('value');//用户充值金额；
         $res = M('user') ->where($where) -> save($userData);
            if ($res) {
                       $this -> success('充值成功',U('Home/index'));//这里一定要u方法才行；
                      }
           else {
                $this -> error('充值失败');
               }
     }


      public function integral(){   //积分兑换显示；
        // dump(I());
        $where['userPhone']=session('userPhone');
        $userData = M('user') -> where($where) -> select();
        $user['userPhone'] = $userData[0]['userPhone'];
        $user['userIntegral'] = $userData[0]['userIntegral'];//用户积分；
        $what['couponStatus'] = "1";
        $what['couponDelete'] = "1";
        $couponData = M('coupon') -> where($what) -> select();

         $this -> user = $user;
         $this -> assign('couponData', $couponData);
         $this->display('integral');
     }


      public function integralChange(){   //积分兑换操作（传要兑换的积分值）；

       // $type = I('type');
        /*
        $type 的值是 1 ，2,3,4，对应的是10块，20块
        这里处理完之后，成功返回200，失败400
         */
        //echo (200);die;
        $type['couponId'] = I('type');
        $couponData = M('coupon') -> where($type) -> select();
        $where['userPhone'] = session('userPhone');
        $userData = M('user') -> where($where) -> select();
        $usercouponData['usercouponUserId'] = $userData[0]['userId'];
        $usercouponData['usercouponCouponId'] = $couponData[0]['couponId'];
        $usercouponData['usercouponCreateTime'] = date('Y-m-d'); //得到当前日期；
        $failureTime = $couponData[0]['couponTime'];
        $usercouponData['failureTime'] = date("Y-m-d",strtotime("+$failureTime day"));
        $usercouponData['couponFull'] = $couponData[0]['couponFull'];
        $usercouponData['couponCut'] = $couponData[0]['couponCut'];       
        $result = M('usercoupon') -> add($usercouponData);
        //dump($result);die;
          if ($result) {
                       $userIntegral = $userData[0]['userIntegral'];//用户积分；
                       $couponIntegral = $couponData[0]['couponIntegral'];//兑换消耗积分；
                       $userDT['userIntegral'] = $userIntegral - $couponIntegral;
                       $res = M('user') -> where($where) -> save($userDT);
                       if($res){
                               echo (200);
                       }else {
                              $this -> error('兑换优惠卷失败');
                             }
            }else { 
                   $this -> error('兑换优惠卷失败');
                  }
     }

    public function address(){   //设置默认、删除和添加地址；        
        $user['userPhone'] = session('userPhone');
        $userData = M('user') -> where($user) -> select();
        $where['addressUserId'] = $userData[0]['userId'];
        $where['addressDelete'] = "1";
        $addressData = M('address') -> where($where) -> select();
        $this -> assign('addressData', $addressData);
        $this->display('address');
     }


    public function addressDelete(){//地址删除（传要删除的地址id）；
        //echo (200);die;
        //dump(I());
        $where['addressId'] = I('data');//要删除地址Id；
        $data['addressDelete'] = "2";
        $result = M('address')->where($where)->save($data);
        if($result){
                echo (200);
        }else{
            $this -> error('删除地址失败');
            }
     }


    public function addressChange(){//默认地址设置（传要设置默认的地址id）；
        //dump(I('id'));die;
        $userwhere['userPhone'] = session('userPhone');
        $userData = M('user') -> where($userwhere) -> select();
        $address['addressUserId'] = $userData[0]['userId'];//用户id；
        $address['addressLabel'] = "1"; //取出原来的默认地址；
        $addressChange['addressId'] = M('address') -> where($address) -> getField('addressId');   
        $addressData['addressLabel'] = "2";//将原来的默认地址改为普通地址；
        $result = M('address')->where($addressChange)->save($addressData);
        //dump($result);die;
        $where['addressId'] = I('id');//要设置为默认地址Id；
        $data['addressLabel'] = "1";
        $bool = M('address')->where($where)->save($data);
         if ($bool) {
                       $this -> success('设置默认地址成功！',U('Home/index'));//这里一定要u方法才行；
                      }
           else {
                $this -> error('设置默认地址失败，请重新设置！');
               }
     }


     public function addAdd(){//新增地址（传新增地址信息）；
        $addressData['addressName'] = I('name');
        $addressData['addressPhone'] = I('phoneNum');
        $user['userPhone'] = session('userPhone');
        $userData = M('user') -> where($user) -> select();
        $addressData['addressUserId'] = $userData[0]['userId'];
        $addressData['addressDetail'] = I('province').I('city').I('area').I('position');
        //dump($addressData);die;      
        $result = M('address')->add($addressData);
        //dump($result);die;
        if ($result) {
                       $this -> success('新增地址成功！',U('Home/address'));//这里一定要u方法才行；
                      }
           else {
                $this -> error('新增地址失败，请重新增加！');
               }
     }


    public function agreement(){//用户协议；

         $this->display('agreement');
     }

    public function suggest(){//意见反馈（显示）；
        // dump(I());die;
         $this->display('suggest');
     }

     public function addSuggest(){//意见反馈（传反馈信息）；
        $choose = I('choose'); // 数组，五个数字，1为选中，0为没选
        $text = I('data');
        // dump(I('choose'));
        if($choose[0] == 1){
            $label[0] =  "洗护质量";
        }else{$label[0] =  null;}

        if($choose[1] == 1){
            $label[1] =  " + 服务态度";
        }else{$label[1] =  null;}

        if($choose[2] == 1){
            $label[2] =  " + 物流速度";
        }else{$label[2] =  null;}

        if($choose[3] == 1){
            $label[3] =  " + 产品易用性";
        }else{$label[3] =  null;}

        if($choose[4] == 1){
            $label[4] =  " + 付款流程";
        }else{$label[4] =  null;}

        if($choose[5] == 1){
            $label[5] =  " + 其他";
        }else{$label[5] =  null;}

        $label = $label[0].$label[1].$label[2].$label[3].$label[4].$label[5];
        // dump($label);
        if ($choose) {

               $feedbackData['feedbackContent'] = $label." : ".$text;//用户反馈内容；
               $feedbackData['feedbackOpenId'] = session('userPhone');
               $where['userPhone'] = session('userPhone');
               $userName = M('user') -> where($where) -> getField('userName');
               $feedbackData['feedbackName'] = $userName;
               $res = M('feedback') -> add($feedbackData);
            if ($res) {
                        echo (200);
                      }
            else {
                  $this -> error('反馈失败');
                 }   
        }else {
            $this -> error('反馈失败');
        }
     }

   // public function index(){

   //      $this->display();
   //  }


}
