<?php
    function paging($model, $map, $number){
        $Data = D($model); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page  = new Page($count,$number);// 实例化分页类 传入总记录数
        return $Page;
    }
?>