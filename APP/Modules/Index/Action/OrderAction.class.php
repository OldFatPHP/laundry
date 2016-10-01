<?php
class OrderAction extends Action{
    //这是前台首页！
    public function index(){
   
        $this->display('incompleteOrder');
    }

   public function topClothes () {
       $where['productUid'] = 1;
       $where['productDelete'] = 1;
       $clothesData = M('product') -> where($where) -> select();
       $this -> assign('clothesData', $clothesData);
       $this -> display();
   }

   public function secondNav () {
       $this -> display();
   }

   public function shoes () {
       $where['productUid'] = 2;
       $where['productDelete'] = 1;
       $shoesData = M('product') -> where($where) -> select();
       $this -> assign('shoesData', $shoesData);
       $this -> display();
   }

   public function homeFurnishing () {
       $where['productUid'] = 3;
       $where['productDelete'] = 1;
       $homeFurnishingData = M('product') -> where($where) -> select();
       $this -> assign('homeFurnishingData', $homeFurnishingData);
       $this -> display();
   }

   public function luxury () {
       $where['productUid'] = 4;
       $where['productDelete'] = 1;
       $luxuryData = M('product') -> where($where) -> select();
       $this -> assign('luxuryData', $luxuryData);
       $this -> display();
   }

   public function appointment () {
       $this -> display();
   }

   public function address () {
       $this -> display();
   }

   public function changeAddress () {
       $this -> display();
   }

   public function completedOrder () {
       $this -> display();
   }

   public function incompleteOrder () {
       $this ->  display();
   }

   public function orderDetail () {
       $this -> display();
   }

   public function iWantComment () {
       $this -> display();
   }
}
