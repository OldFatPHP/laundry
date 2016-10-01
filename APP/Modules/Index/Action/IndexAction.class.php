<?php
class IndexAction extends Action{
    //这是前台首页！
    public function index(){

    	//dump($a);die;
        $this->display();
    }

    public function clothes(){

        $this->display('professionalCleaning');
    }

    public function footer(){

         $this->display();
    }

    public function location () {
        $this -> display();
    }
}
