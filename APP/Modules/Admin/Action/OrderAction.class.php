<?php
class OrderAction extends CommonAction{

    public function index(){
           $dborder = M('order');
           $data['orderStatus'] = "1";//待付款订单的订单状态为1；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('index');
    }


    public function  orderDelete() {
      //dump($_GET);die;
      if(I('id' != '')){
          $data['orderId'] = I('id');
          $dbcomment = M('order') -> where($data) ->delete();
          if($dbcomment){
             $this->success('删除成功',U('index')) ;
          }else{
             $this->error('删除失败',U('index')) ;
           }
      }
    }

    
     public function WaitingMember(){
           $dborder = M('order');
           $data['orderStatus'] = "2";//待取件订单的订单状态为2；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('waitingMember');
    }


     public function  edit() {
      //这是待取件的编辑方法
      dump($_GET);die;
      if(I('id' != '')){
          $id['orderId'] = I('id');
          $data['orderStatus'] = "3"; //编辑完，改待派送订单的订单状态为3；
          $dborder = M('order') -> where($id) ->save($data);
          if($dborder){
             $this->success('编辑成功',U('waitingMember')) ;
          }else{
             $this->error('编辑失败',U('waitingMember')) ;
           }
      }
    }


     public function WaitingSend(){
           $dborder = M('order');
           $data['orderStatus'] = "3";//待派送订单的订单状态为3；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('waitingSend');
    }



     public function  send() {
      //dump($_GET);die;
      if(I('id' != '')){
          $id['orderId'] = I('id');
          $data['orderStatus'] = "5"; //已完成订单的订单状态为5；
          $dborder = M('order') -> where($id) ->save($data);
          if($dborder){
             $this->success('派件成功',U('waitingSend')) ;
          }else{
             $this->error('派件失败',U('waitingSend')) ;
           }
      }
    }



    public function Refunding(){
           $dborder = M('order');
           $data['orderStatus'] = "4";//维权处理中订单的订单状态为4；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('refunding');
    }


    public function  again() {
      //dump($_GET);die;
      if(I('id' != '')){
          $id['orderId'] = I('id');
          $data['orderStatus'] = "2"; //改为待取件订单的订单状态为2；
          $dborder = M('order') -> where($id) ->save($data);
          if($dborder){
             $this->success('修改重洗成功',U('refunding')) ;
          }else{
             $this->error('修改重洗失败',U('refunding')) ;
           }
      }
    }


    public function  tuikuan() {
      //这里要还要进行退款的操作，以后记得！！！
      dump($_GET);die;
      if(I('id' != '')){
          $id['orderId'] = I('id');
          $data['orderStatus'] = "6"; //改为已退款订单的订单状态为6；
          $dborder = M('order') -> where($id) ->save($data);
          if($dborder){
             $this->success('已成功退款',U('refunding')) ;
          }else{
             $this->error('退款失败',U('refunding')) ;
           }
      }
    }


     public function Completed(){
           $dborder = M('order');
           $data['orderStatus'] = "5";//已完成订单的订单状态为5；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('completed');
    }

    
     public function EndRefund(){
           $dborder = M('order');
           $data['orderStatus'] = "6";//退款完成订单的订单状态为6；
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where($data)->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $order = $dborder->where($data)->order('orderID')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $k = $count;
           FOR($i=0;$i<=$k;$i++){
             $productName = explode(';', $order[$i]['orderProductName']);
             $productNum = explode(';', $order[$i]['orderProductNum']);
             $n = count($productName);
                FOR($a=1;$a<$n;$a++){
                 $detail[$i][] = $productName[$a]."  x ".$productNum[$a];
                }    
                  //dump($detail);die;
                  foreach ($detail[$i] as $key => $value) {
                    $order[$i]['orderDetail'] .= $value;
                    $order[$i]['orderDetail'] .= "</br>";
                  }
           }
           //dump($order);die;
           $this ->assign('order',$order);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('endRefund');
    }
    
    /**
     * 订单编辑反馈页面显示
     */
    public function feedbackShow () {
    	$_SESSION['orderId'] = I('orderId');
    	$this->display();
    }
    
    /**
     * 订单反馈内容提交
     */
    public function feedBack () {
    	$where['orderId'] = $_SESSION['orderId'];
    	$orderData['orderFeedbackContent'] = I('orderFeedbackContent');
        $res = M('order')->where($where)->save($orderData);
        if ($res) {
            unset($_SESSION['orderId']);
            $this->success('编辑反馈成功', 'index');
        }else {
            $this->error('编辑反馈失败，请重新编辑');
        }
    }

    /**
     * 接单按钮，确认接单后修改订单状态
     */
    public function confirmOrder () {
        $where['orderId'] = I('orderId');
        $map['orderStatus'] = 3;
        $res = M('order')->where($where)->save($map);
        if ($res) {
            $this->success('接单成功');
        }else {
            $this->error('接单出错，请重新接单...');
        }
    }

    /**
     * 显示特定订单的反馈内容
     */
    public function showFeedback () {
        $where['orderId'] = I('orderId');
        $orderData = M('order')->where($where)->field('orderId,orderFeedbackContent')->select();
        //dump($orderData);die;
        $this->orderData = $orderData;
        $this->display();
    }
}
?>