<?php
    class UserAction extends Action {
        public function index () {
            $this -> display();
        }

        public function userList () {
            $where['userDelete'] = 1;
            $page = paging('user', $where, 5);
            $show = $page -> show();
            $limit = $page->firstRow.",".$page->listRows;
            $userData = M('user') -> where($where) -> limit($limit) -> order('userId desc') -> select();
            $this -> assign('page', $show);
            $this -> assign('userData', $userData);
            $this -> display();
        }

        public function userDelete () {
            $where['userId'] = I('userId');
            $map['userDelete'] = 0;
            $res = M('user') -> where($where) -> save($map);
            if ($res) {
                $this -> success('删除会员成功');
            }else {
                $this -> error('删除会员失败');
            }
        }

        public function userSearch () {
            $where['userPhone'] = I('userPhone');
            $where['userDelete'] = 1;
            $page = paging('user', $where, 5);
            $show = $page -> show();
            $limit = $page->firstRow.",".$page->listRows;
            $userData = M('user') -> where($where) -> limit($limit) -> order('userId desc') -> select();
            if ($userData) {
                $this -> assign('page', $show);
                $this -> assign('userData', $userData);
                $this -> display('userList');
            }else {
                $this -> error('查询不到该会员，请重新查询');
            }

        }
    }
?>