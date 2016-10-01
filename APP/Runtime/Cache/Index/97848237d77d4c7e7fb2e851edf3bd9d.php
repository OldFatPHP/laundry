<?php if (!defined('THINK_PATH')) exit();?>﻿
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<link href="__PUBLIC__/css/ServerDiv.css" rel="stylesheet" />
<script src="__PUBLIC__/js/buy.js"></script>

<!--洗鞋模块-->
        <div id="shoesDiv" class="window-div">
            <?php if(is_array($shoesData)): $i = 0; $__LIST__ = $shoesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shoesDataVo): $mod = ($i % 2 );++$i;?><div id="windowF<?php echo ($shoesDataVo["productId"]); ?>" class="show-window" onclick="buy(this.id)">
                    <div id="buyNumF<?php echo ($shoesDataVo["productId"]); ?>" class="buy-num">0</div>
                    <img src="<?php echo ($shoesDataVo["productImage"]); ?>" id="goodsImgF<?php echo ($shoesDataVo["productId"]); ?>" />
                    <h4 id="goodsNameF<?php echo ($shoesDataVo["productId"]); ?>"><?php echo ($shoesDataVo["productName"]); ?></h4>
                    <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceF<?php echo ($shoesDataVo["productId"]); ?>"><?php echo ($shoesDataVo["productPrice"]); ?></span></h4>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<div id="windowF2" class="show-window" onclick="buy(this.id)">
                <div id="buyNumF2" class="buy-num">0</div>
                <img src="__PUBLIC__/images/goods14.png" id="goodsImgF2" />
                <h4 id="goodsNameF2">运动鞋</h4>
                <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceF2">39.0</span></h4>
            </div>

            <div id="windowF3" class="show-window" onclick="buy(this.id)">
                <div id="buyNumF3" class="buy-num">0</div>
                <img src="__PUBLIC__/images/goods14.png" id="goodsImgF3" />
                <h4 id="goodsNameF3">运动鞋</h4>
                <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceF3">39.0</span></h4>
            </div>

            <div id="windowF4" class="show-window" onclick="buy(this.id)">
                <div id="buyNumF4" class="buy-num">0</div>
                <img src="__PUBLIC__/images/goods14.png" id="goodsImgF4" />
                <h4 id="goodsNameF4">运动鞋</h4>
                <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceF4">39.0</span></h4>
            </div>-->

        </div>