<?php if (!defined('THINK_PATH')) exit();?>﻿<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<link href="__PUBLIC__/css/ServerDiv.css" rel="stylesheet" />
<script src="__PUBLIC__/js/buy.js"></script>
<script>
    window.onload = function () {
        //还原按钮样式，改变被点击的按钮的样式
        var Nav = document.getElementById('SecondNav').contentWindow;
        Nav.document.getElementById("ClothesId2").className = "";
        Nav.document.getElementById("ClothesId3").className = "";
        Nav.document.getElementById("ClothesId4").className = "";
        Nav.document.getElementById("ClothesId5").className = "";
        Nav.document.getElementById("ClothesId1").className = "active";
    };
</script>

<!--<iframe src="<?php echo U(GROUP_NAME . '/Order/secondNav');?>" frameborder="0" id="SecondNav" scrolling="no"></iframe>-->

  <!--上衣模块-->
<div id="topClothesDiv" class="window-div">
    <?php if(is_array($clothesData)): $i = 0; $__LIST__ = $clothesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clothesDataVo): $mod = ($i % 2 );++$i;?><div id="windowA<?php echo ($clothesDataVo["productId"]); ?>" class="show-window" onclick="buy(this.id)">
            <div id="buyNumA<?php echo ($clothesDataVo["productId"]); ?>" class="buy-num">0</div>
            <img src="<?php echo ($clothesDataVo["productImage"]); ?>" id="goodsImgA<?php echo ($clothesDataVo["productId"]); ?>" />
            <h4 id="goodsNameA<?php echo ($clothesDataVo["productId"]); ?>"><?php echo ($clothesDataVo["productName"]); ?></h4>
            <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceA<?php echo ($clothesDataVo["productId"]); ?>"><?php echo ($clothesDataVo["productPrice"]); ?></span></h4>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--<div id="windowA2" class="show-window" onclick="buy(this.id)">
        <div id="buyNumA2" class="buy-num">0</div>
        <img src="__PUBLIC__/images/goods9.png" id="goodsImgA2" />
        <h4 id="goodsNameA2">真丝上衣</h4>
        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceA2">39.0</span></h4>
    </div>
    <div id="windowA3" class="show-window" onclick="buy(this.id)">
        <div id="buyNumA3" class="buy-num">0</div>
        <img src="__PUBLIC__/images/goods9.png" id="goodsImgA3" />
        <h4 id="goodsNameA3">真丝上衣</h4>
        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceA3">39.0</span></h4>
    </div>
    <div id="windowA4" class="show-window" onclick="buy(this.id)">
        <div id="buyNumA4" class="buy-num">0</div>
        <img src="__PUBLIC__/images/goods9.png" id="goodsImgA4" />
        <h4 id="goodsNameA4">真丝上衣</h4>
        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceA4">39.0</span></h4>
    </div>
    <div id="windowA5" class="show-window" onclick="buy(this.id)">
        <div id="buyNumA5" class="buy-num">0</div>
        <img src="__PUBLIC__/images/goods9.png" id="goodsImgA5" />
        <h4 id="goodsNameA5">真丝上衣</h4>
        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceA5">39.0</span></h4>
    </div>-->
</div>