<?php if (!defined('THINK_PATH')) exit();?>﻿<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<link href="__PUBLIC__/css/ServerDiv.css" rel="stylesheet" />
<script src="__PUBLIC__/js/buy.js"></script>

 <!--奢侈品模块-->
        <div id="luxuryDiv" class="big-div">
            <?php if(is_array($luxuryData)): $i = 0; $__LIST__ = $luxuryData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$luxuryDataVo): $mod = ($i % 2 );++$i;?><div class="hot-div">
                    <div id="windowH<?php echo ($luxuryDataVo["productId"]); ?>" class="hot-goods" onclick="buy(this.id)">
                        <div id="buyNumH<?php echo ($luxuryDataVo["productId"]); ?>" class="buy-num">0</div>
                        <img src="<?php echo ($luxuryDataVo["productImage"]); ?>" id="goodsImgH<?php echo ($luxuryDataVo["productId"]); ?>" />
                        <h4 id="goodsNameH<?php echo ($luxuryDataVo["productId"]); ?>"><?php echo ($luxuryDataVo["productName"]); ?></h4>
                        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceH<?php echo ($luxuryDataVo["productId"]); ?>"><?php echo ($luxuryDataVo["productPrice"]); ?></span></h4>
                    </div>
                    <div class="hot-intro-div">
                        <div class="vertical-line"></div>
                        <div class="hot-intro">
                            <h4 class="intro-header">套餐介绍：</h4>
                            <h4><?php echo ($luxuryDataVo["productDetail"]); ?></h4>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

            <!--<div class="hot-div">
                <div id="windowH2" class="hot-goods" onclick="buy(this.id)">
                    <div id="buyNumH2" class="buy-num">0</div>
                    <img src="__PUBLIC__/images/goods17.jpg" id="goodsImgH2" />
                    <h4 id="goodsNameH2">钱包边油修复</h4>
                    <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceH2">72.0</span></h4>
                    <h5>￥90</h5>
                </div>
                <div class="hot-intro-div">
                    <div class="vertical-line"></div>
                    <div class="hot-intro">
                        <h4 class="intro-header">套餐介绍：</h4>
                        <h4>整体</h4>
                    </div>
                </div>
            </div>-->

        </div>