<?php
class ProductAction extends Action{

    public function index(){
        $this->display();
    }

    public function clothes(){
        $where['productDelete'] = 1;
        $where['productUid'] = 1;
        $page = paging('product', $where, 5);
        $show = $page -> show();
        $limit = $page->firstRow.",".$page->listRows;
        $clothesData = M('product') -> where($where) -> limit($limit) -> order('productId desc') -> select();
        $this -> assign('clothesData', $clothesData);
        $this -> assign('page', $show);
        $this->display();
    }

    /*
     * 添加产品页面显示方法
     */
    public function productAddPage () {
        $productUid = I('productUid');
        $this -> assign('productUid', $productUid);
        $this -> display();
    }

    /*
     * 添加产品至数据库
     */
    public function productAdd () {
        $productData['productName'] = I('productName');
        $productData['productImage'] = '/laundry/Uploads/0.jpg';
        $productData['productUid'] = I('productUid');
        $productData['productDetail'] = I('productDetail');
        $productData['productPrice'] = I('productPrice');
        $res = M('product') -> add($productData);
        if ($res) {
            switch ($productData['productUid']){
                case 1 :
                    $this -> success('添加产品成功', 'clothes');
                    break;
                case 2 :
                    $this -> success('添加产品成功', 'shoe');
                    break;
                case 3 :
                    $this -> success('添加产品成功', 'household');
                    break;
                case 4 :
                    $this -> success('添加产品成功', 'luxury');
                    break;
                default :
                    $this -> error('添加产品失败');
            }
        }else {
            $this -> error('添加产品失败');
        }
    }

    /*
     * 产品编辑页面显示
     */
    public function productEditPage () {
        $where['productId'] = I('productId');
        $productData = M('product') -> where($where) -> find();
        $this -> assign('productData', $productData);
        $this -> display();
    }

    /*
     * 产品编辑更新至数据库
     */
    public function productEdit () {
        $productData['productName'] = I('productName');
        $productData['productUid'] = I('productUid');
        $productData['productDetail'] = I('productDetail');
        $productData['productPrice'] = I('productPrice');
        $where['productId'] = I('productId');
        $res = M('product') ->where($where) -> save($productData);
        if ($res) {
            switch ($productData['productUid']){
                case 1 :
                    $this -> success('编辑产品成功', 'clothes');
                    break;
                case 2 :
                    $this -> success('编辑产品成功', 'shoe');
                    break;
                case 3 :
                    $this -> success('编辑产品成功', 'household');
                    break;
                case 4 :
                    $this -> success('编辑产品成功', 'luxury');
                    break;
                default :
                    $this -> error('编辑产品失败');
            }
        }else {
            $this -> error('编辑产品失败');
        }
    }

    /*
     * 删除产品
     */
    public function productDelete () {
        $where['productId'] = I('productId');
        $map['productDelete'] = 0;
        $res = M('product') -> where($where) -> save($map);
        if ($res) {
            $this -> success('删除产品成功');
        }else {
            $this -> error('删除产品失败');
        }
    }

    /*
     * 鞋类页面显示
     */
    public function shoe () {
        $where['productDelete'] = 1;
        $where['productUid'] = 2;
        $page = paging('product', $where, 5);
        $show = $page -> show();
        $limit = $page->firstRow.",".$page->listRows;
        $shoeData = M('product') -> where($where) -> limit($limit) -> order('productId desc') -> select();
        $this -> assign('shoeData', $shoeData);
        $this -> assign('page', $show);
        $this->display();
    }

    /*
     * 家具用品页面显示
     */
    public function household () {
        $where['productDelete'] = 1;
        $where['productUid'] = 3;
        $page = paging('product', $where, 5);
        $show = $page -> show();
        $limit = $page->firstRow.",".$page->listRows;
        $householdData = M('product') -> where($where) -> limit($limit) -> order('productId desc') -> select();
        $this -> assign('householdData', $householdData);
        $this -> assign('page', $show);
        $this->display();
    }

    /*
     * 奢侈品页面显示
     */
    public function luxury() {
        $where['productDelete'] = 1;
        $where['productUid'] = 4;
        $page = paging('product', $where, 5);
        $show = $page -> show();
        $limit = $page->firstRow.",".$page->listRows;
        $luxuryData = M('product') -> where($where) -> limit($limit) -> order('productId desc') -> select();
        $this -> assign('luxuryData', $luxuryData);
        $this -> assign('page', $show);
        $this->display();
    }

    /*
     * 图片上传页面显示
     */
    public function imageUploadPage () {
        $product['productId'] = I('productId');
        $this -> assign('product', $product);
        $this -> display();
    }

    /*
     * 图片上传
     */
    Public function imageUpload(){
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  '../laundry/Uploads/';// 设置附件上传目录
        $upload->uploadReplace = on;
        $upload->saveRule = I('productId');
        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
        }
        // 保存表单数据 包括附件数据
        $product = M("product"); // 实例化User对象
        $where['productId'] = I('productId');
        $map['productImage'] = __ROOT__ . '/Uploads/' . $info[0]['savename'];// 保存上传的照片根据需要自行组装
        $product -> where($where) -> save($map); // 写入用户数据到数据库
        $this->success('数据保存成功！');
    }
}
?>