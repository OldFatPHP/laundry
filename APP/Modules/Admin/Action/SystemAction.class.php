<?php
    class SystemAction extends CommentAction {
        public function index () {
            return;
        }

        /**
         * 前台Banner图显示页面，可修改Banner图
         */
        public function bannerSettingShow () {
            $this->display();
        }

        /**
         * 图片上传页面显示
         */
        public function imageUploadShow () {
            $_SESSION['imageName'] = I('imageName');
            $this->display();
        }

        /**
         * 图片上传函数
         */
        Public function imageUpload()
        {
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath = '../laundry/APP/Modules/Index/Tpl/Public/images/';// 设置附件上传目录
            $upload->uploadReplace = on;
            $upload->saveRule = $_SESSION['imageName'];
            if (!$upload->upload()) {// 上传错误提示错误信息
                $this->error($upload->getErrorMsg());
            } else {// 上传成功 获取上传文件信息
                unset($_SESSION['imageName']);
                $this->success('修改成功', 'bannerSettingShow');
            }
        }

        /**
         * 管理员列表页面显示
         */
        public function adminList () {
            $where['adminDelete'] = 1;
            $adminData = M('admin')->where($where)->order('adminId desc')->select();
            $this->assign('adminData', $adminData);
            $this->display();
        }

        /**
         * 添加管理员页面显示
         */
        public function adminAddPage () {
            $this->display();
        }

        public function adminAdd () {
            $adminData = $_POST;
            $this->checkAdminName($adminData['adminName']);
            //$this->checkAdminAddress($adminData['adminAddress']);
            $adminData['adminCreateTime'] = date('Y-m-d H:i:s');
            $res = M('admin')->add($adminData);
            if ($res) {
                $this->success('添加账号成功。', 'adminList');
            }else {
                $this->error('操作异常，请重新添加');
            }
        }

        /**
         * @param $adminName
         * 检查账号是否已经存在
         */
        private function checkAdminName ($adminName) {
            $where['adminName'] = $adminName;
            $where['adminDelete'] = 1;
            $res = M('admin')->where($where)->select();
            if ($res) {
                $this->error('账号已存在，请重新添加', 'adminAddPage');
            }else {
                return true;
            }
        }

        /**
         * @param $adminAddress
         * 检查地区是否已经有账号
         */
        /*private function checkAdminAddress ($adminAddress) {
            $where['adminAddress'] = $adminAddress;
            $where['adminDelete'] = 1;
            $res = M('admin')->where($where)->select();
            if ($res) {
                $this->error('该地区已经存在账号。', 'adminAddPage');
            }else {
                return true;
            }
        }*/

        public function adminDelete () {
            $where['adminId'] = I('adminId');
            if ($where['adminId'] == 1) {
                $this->error('无权限删除超级管理员！');
            }else {
                $map['adminDelete'] = 0;
                $res = M('admin')->where($where)->save($map);
                if ($res) {
                    $this->success('删除管理员成功。');
                }else {
                    $this->error('操作异常，请重新执行删除操作。');
                }
            }
        }

        /**
         * 管理员信息编辑显示页面
         */
        public function adminEditPage () {
            $where['adminId'] = I('adminId');
            $adminData = M('admin')->where($where)->find();
            $this->adminData = $adminData;
            $this->display();
        }

        public function adminEdit () {
            $adminData = $_POST;
            $where['adminId'] = I('adminId');
            $res = M('admin')->where($where)->save($adminData);
            if ($res) {
                $this->success('修改成功', 'adminList');
            }else {
                $this->error('操作异常或未做修改，请重新修改...');
            }
        }
    }