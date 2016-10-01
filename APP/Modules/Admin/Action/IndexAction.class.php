<?php
class IndexAction extends CommonAction{
    //后台
    public function index(){
    	$user['name']=session('name');
           $this->user=$user;
           $this -> display();
    }


      public function welcome(){
           $dborder = M('order');
           $data1['orderStatus'] = "1";//待付款订单的订单状态为1；
           $data2['orderStatus'] = "2";//待取件订单的订单状态为2；
           $data3['orderStatus'] = "3";//待派件订单的订单状态为3；
           $data4['orderStatus'] = "4";//退款中订单的订单状态为4；
           $count1 = $dborder->where($data1)->count();// 查询满足要求的总记录数 $map表示查询条件
           $count2 = $dborder->where($data2)->count();// 查询满足要求的总记录数 $map表示查询条件
           $count3 = $dborder->where($data3)->count();// 查询满足要求的总记录数 $map表示查询条件
           $count4 = $dborder->where($data4)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $this->count1=$count1;
           $this->count2=$count2;
           $this->count3=$count3;
           $this->count4=$count4;
           $this -> display('welcome');
    }
}
