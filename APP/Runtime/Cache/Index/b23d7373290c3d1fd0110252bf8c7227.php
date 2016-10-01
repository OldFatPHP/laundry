<?php if (!defined('THINK_PATH')) exit();?>﻿<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<link href="__PUBLIC__/css/ServerDiv.css" rel="stylesheet" />
<script src="__PUBLIC__/js/buy.js"></script>
<script>
    var iframeDivNum = 1;
    var iframeNum = 1;
</script>

<!--洗家纺模块-->
        <div id="textileDiv" class="big-div">
            <?php if(is_array($homeFurnishingData)): $i = 0; $__LIST__ = $homeFurnishingData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$homeFurnishingDataVo): $mod = ($i % 2 );++$i;?><div class="hot-div">
                    <div id="windowG<?php echo ($homeFurnishingDataVo["productId"]); ?>" class="hot-goods" onclick="buy(this.id)">
                        <div id="buyNumG<?php echo ($homeFurnishingDataVo["productId"]); ?>" class="buy-num">0</div>
                        <img src="<?php echo ($homeFurnishingDataVo["productImage"]); ?>" id="goodsImgG<?php echo ($homeFurnishingDataVo["productId"]); ?>" />
                        <h4 id="goodsNameG<?php echo ($homeFurnishingDataVo["productId"]); ?>"><?php echo ($homeFurnishingDataVo["productName"]); ?></h4>
                        <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceG<?php echo ($homeFurnishingDataVo["productId"]); ?>"><?php echo ($homeFurnishingDataVo["productPrice"]); ?></span></h4>
                    </div>
                    <div class="hot-intro-div">
                        <div class="vertical-line"></div>
                        <div class="hot-intro">
                            <h4 class="intro-header">套餐介绍：</h4>
                            <h4><?php echo ($homeFurnishingDataVo["productDetail"]); ?></h4>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<div class="hot-div">
                <div id="windowG2" class="hot-goods" onclick="buy(this.id)">
                    <div id="buyNumG2" class="buy-num">0</div>
                    <img src="__PUBLIC__/images/goods15.jpg" id="goodsImgG2" />
                    <h4 id="goodsNameG2">情侣包套餐</h4>
                    <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceG2">72.0</span></h4>
                    <h5>￥90</h5>
                </div>
                <div class="hot-intro-div">
                    <div class="vertical-line"></div>
                    <div class="hot-intro">
                        <h4 class="intro-header">套餐介绍：</h4>
                        <h4>背包/斜跨<br />包（非皮制)<br />最大边≤40cm x2</h4>
                    </div>
                </div>
            </div>
            <div class="hot-div">
                <div id="windowG2" class="hot-goods" onclick="buy(this.id)">
                    <div id="buyNumG2" class="buy-num">0</div>
                    <img src="__PUBLIC__/images/goods15.jpg" id="goodsImgG2" />
                    <h4 id="goodsNameG2">情侣包套餐</h4>
                    <h4 class="price"><span class="small-rmb">￥</span><span id="goodspriceG2">72.0</span></h4>
                    <h5>￥90</h5>
                </div>
                <div class="hot-intro-div">
                    <div class="vertical-line"></div>
                    <div class="hot-intro">
                        <h4 class="intro-header">套餐介绍：</h4>
                        <h4>背包/斜跨<br />包（非皮制)<br />最大边≤40cm x2</h4>
                    </div>
                </div>
            </div>-->

        </div>