<?php
/**
 * Created by PhpStorm.
 * User: linjunfeng
 * Date: 2016/8/12
 * Time: 15:49
 */
    class CouponAction extends Action {
        public function index () {
            $this -> display();
        }

        public function couponList() {
            $where['couponDelete'] = 1;
            $where['couponKind'] = 1;
            $page = paging('coupon', $where, 5);
            $show = $page -> show();
            $limit = $page->firstRow.",".$page->listRows;
            $couponData = M('coupon') -> where($where) -> limit($limit) -> order('couponId desc') -> select();
            $this -> assign('page', $show);
            $this -> assign('couponData', $couponData);
            $where['couponKind'] = 2;
            $specialCoupon = M('coupon')->where($where)->select();
            $this->assign('specialCoupon', $specialCoupon);
            $this -> display();
        }

        public function couponAddPage () {
            $this -> display();
        }

        public function couponAdd () {
            $couponData['couponName'] = I('couponName');
            $couponData['couponDetail'] = I('couponDetail');
            $couponData['couponFull'] = I('couponFull');
            $couponData['couponCut'] = I('couponCut');
            $couponData['couponValidity'] = I('couponValidity');
            $couponData['couponStatus'] = I('couponStatus');
            $res = M('coupon') -> add($couponData);
            if ($res) {
                $this -> success('添加优惠券成功', 'couponList');
            }else {
                $this -> error('添加优惠券失败，请重新添加');
            }
        }

        public function discountPage () {
            $discount['num'] = C('DISCOUNT');
            $this -> assign('discount', $discount);
            $this -> display();
        }

        public function couponSave () {
            $discount = (float)I('discount');
            $res = C('DISCOUNT', $discount);
            if ($res) {
                $this -> success('修改成功');
            }else {
                $this -> error('修改失败，请重新修改');
            }
        }

        /**
         * 普通优惠券编辑
         */
        public function couponEditPage () {
            $where['couponId'] = I('couponId');
            $couponData = M('coupon')->where($where)->find();
            $this->assign('couponData', $couponData);
            $this->display();
        }
        /**
         * 特殊优惠券编辑
         */
        public function specialCouponEditPage () {
            $where['couponId'] = I('couponId');
            $couponData = M('coupon')->where($where)->find();
            $this->assign('couponData', $couponData);
            $this->display();
        }

        /**
         * 优惠券修改保存功能
         */
        public function couponEditSave () {
            $where['couponId'] = I('couponId');
            $couponData = $_POST;
            $res = M('coupon')->where($where)->save($couponData);
            if ($res) {
                $this->success('修改成功', 'couponList');
            }else {
                $this->error('操作异常或未做修改，请重新修改。');
            }
        }
    }
?>