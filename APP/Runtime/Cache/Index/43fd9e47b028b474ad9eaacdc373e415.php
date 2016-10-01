<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>我的优惠券</title>
    <style>
        body{
            background-color:#f0f0f0;
            padding:0;
            margin:0;
            text-align:center;
        }
        .header{
            height:40px;
            width:100%;
            background-color:#00dbf5;
            color:white;
            line-height:40px;
            font-size:16px;
        }
        .add-coupon {
            margin-top: 15px;
            margin-bottom: 20px;
            font-size: 16px;
            height: 45px;
            line-height: 45px;
            background-color: #fff;
            border-top: 1px solid #e8e8e8;
            border-bottom: 1px solid #e8e8e8;
        }
        .add-coupon span{
            font-size:18px;
        }
        .coupon-div{
            background-color:#ffffff;
            text-align:center;
            padding-top:20px;
            padding-bottom:40px;
            padding-right:5%;
            float:left;
            padding-left:5%;
            margin-bottom:60px;
        }
        .no-coupon img {
            margin-bottom: 10px;
            width: 100px;
        }
        .no-coupon {
            color: #ccc;
            font-size: 14px;
            padding-bottom:50px;
            padding-top:60px;
        }
        .coupon {
            width: 100%;
            border-radius: 10px;
            height: 80px;
            border: 1px solid #d8e9e9;
            cursor:pointer;
            margin-top:5px;
            margin-bottom:5px;
            float:left;
        }
         .coupon-value {
             width:20%;
             height:80px;
             float:left;
             line-height:80px;
             font-size:26px;
             font-weight:bold;
             color:#fff;

        }
        .coupon-data {
            width:75%;
            height: 80px;
            float: left;
            border-left:1px dashed #fff;
            margin-left:-1px;
            text-align:left;
            line-height:22px;
            padding-top:20px;
            padding-left:5%;
            color:#fff;
        }
        .coupon-date{
            font-size:12px;
        }
        .coupon-blue {
            background-color: #6aa5ff;
        }
        .coupon-pink{
            background-color:#f58eae;
        }
        .coupon-green {
            background-color: #81dab3;
        }
        .coupon-purple {
            background-color: #976bc5;
        }
        .coupon-gray {
            background-color: #828080;
        }
            .coupon-gray .coupon-date span{
                color:#f58eae;
                margin-left:10px;
            }
           
    </style>
</head>
<body>
    <div class="header">我的优惠券</div>
    <div class="add-coupon" onclick="window.location.href='<?php echo U(GROUP_NAME . '/Home/integral', array('userIntegral' => $user['userIntegral']));?>'"><span>＋</span> 兑换优惠券</div>
    <div class="coupon-div">
        <div class="no-coupon" style="display:none;"><!--!!当没有优惠券时显示该模块!!-->
            <img src="__PUBLIC__/images/no-coupon.png" />
            <div>无可用优惠券</div>
        </div>

        <?php if(is_array($usercouponData)): $i = 0; $__LIST__ = $usercouponData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Vo): $mod = ($i % 2 );++$i;?><div class="coupon coupon-pink">
            <div class="coupon-value">￥<span><?php echo ($Vo["couponCut"]); ?></span></div>
            <div class="coupon-data">
                <div>满<?php echo ($Vo["couponFull"]); ?>可用优惠券</div>
                <div class="coupon-date">抵用券<?php echo ($Vo["usercouponCreateTime"]); ?>至<?php echo ($Vo["failureTime"]); ?></div>

            </div>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>
         
    <!--     <div class="coupon coupon-blue">
            <div class="coupon-value">¥<span>20</span></div>
            <div class="coupon-data">
                <div>无门槛20元袋洗券</div>
                <div class="coupon-date">抵用券2016-8-25至2016-9-20号</div>
            </div>
        </div> -->
    <!--     <div class="coupon coupon-green">
            <div class="coupon-value">¥<span>20</span></div>
            <div class="coupon-data">
                <div>无门槛20元袋洗券</div>
                <div class="coupon-date">抵用券2016-8-25至2016-9-20号</div>
            </div>
        </div>
        <div class="coupon coupon-purple">
            <div class="coupon-value">¥<span>20</span></div>
            <div class="coupon-data">
                <div>无门槛20元袋洗券</div>
                <div class="coupon-date">抵用券2016-8-25至2016-9-20号</div>
            </div>
        </div> -->
       <!--  <div class="coupon coupon-gray">
            <div class="coupon-value">¥<span>20</span></div>
            <div class="coupon-data">
                <div>无门槛20元袋洗券</div>
                <div class="coupon-date">抵用券2016-8-25至2016-9-20号<span>已过期</span></div>
            </div>
        </div> -->


    </div>
    
</body>
</html>