<?php
class CommentAction extends CommonAction{

    public function index(){
           $dborder = M('comment');
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where()->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $comment = $dborder->where($data)->order('commentOrderId')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $this ->assign('comment',$comment);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('index');
    }


    public function feedback(){
           $dborder = M('feedback');
           import('ORG.Util.Page');// 导入分页类
           $count = $dborder->where()->count();// 查询满足要求的总记录数 $map表示查询条件
           //dump($count);die;
           $Page  = new Page($count,10);// 实例化分页类 传入总记录数
           $show  = $Page->show();// 分页显示输出
                                  // 进行分页数据查询
           $feedback = $dborder->where($data)->order('feedbackId')->limit($Page->firstRow.','.$Page->listRows)->select();
           //dump($order);die;
           $this ->assign('feedback',$feedback);
           $this->assign('page',$show);// 赋值分页输出
           $this -> display('feedback');
    }


    public function  feedbackDelete() {
          //dump($_GET);die;
      if(I('id' != '')){
          $data['feedbackId'] = I('id');
          $dbcomment = M('feedback') -> where($data) ->delete();
          if($dbcomment){
             $this->success('删除成功',U('feedback')) ;
          }else{
             $this->error('删除失败',U('feedback')) ;
           }
      }
    }


    public function  commentDelete() {
          //dump($_GET);die;
      if(I('id' != '')){
          $data['commentOrderId'] = I('id');
          $dbcomment = M('comment') -> where($data) ->delete();
          if($dbcomment){
             $this->success('删除成功',U('index')) ;
          }else{
             $this->error('删除失败',U('index')) ;
           }
      }
    }
}
?>