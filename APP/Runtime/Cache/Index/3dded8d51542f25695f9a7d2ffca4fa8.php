<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="__PUBLIC__/js/jquery-2.0.0.min.js"></script>
    <title>个人中心</title>
    <style>
        body {
            text-align: center;
        }

        .to-shopping {
            text-align: right;
            height: 20px;
            line-height: 20px;
            font-size: 14px;
        }

            .to-shopping img {
                height: 13px;
            }

        a {
            color: #8a8a8a;
            text-decoration: none;
        }

        .remainder {
            height: 66px;
            width: 90px;
            border-radius: 50px;
            background-color: #ff9900;
            color: #fff;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 25px;
        }

            .remainder h4 {
                font-weight: normal;
                margin-bottom: 5px;
                margin-top: 0px;
            }

        button {
            border: 1px solid #dcdcdc;
            height: 30px;
            background-color: #fff;
            color: #8a8a8a;
            width: 110px;
            border-radius: 5px;
            outline: none;
        }

        hr {
            border: none;
            border-top: 1px solid #e8e8e8;
            text-align: center;
            margin-top: 25px;
            height: 0px;
            margin-bottom: -1px;
        }

            hr:after {
                content: '优惠价列表';
                position: relative;
                top: -12px;
                padding: 0 10px;
                background: #fff;
                color: #c1c1c1;
                font-size: 14px;
            }
        .remainder span {
            font-size: 20px;
        }
        .coupon-div {
            text-align: center;
            padding-bottom: 40px;
            padding-right: 5%;
            padding-left: 5%;
            padding-bottom:60px;
            padding-top:15px;
            float:left;
        }
        .coupon {
            width: 100%;
            border-radius: 10px;
            height: 80px;
            border: 1px solid #d8e9e9;
            cursor: pointer;
            margin-top: 5px;
            margin-bottom: 5px;
            float: left;
        }

        .coupon-value {
            width: 20%;
            height: 80px;
            float: left;
            line-height: 80px;
            font-size: 26px;
            font-weight: bold;
            color: #fff;
        }

        .coupon-data {
            width: 75%;
            height: 80px;
            float: left;
            border-left: 1px dashed #fff;
            margin-left: -1px;
            text-align: left;
            line-height: 22px;
            padding-top: 20px;
            padding-left: 5%;
            color: #fff;
        }

        .coupon-date {
            font-size: 12px;
        }

        .coupon-blue {
            background-color: #6aa5ff;
        }

        .coupon-pink {
            background-color: #f58eae;
        }

        .coupon-green {
            background-color: #81dab3;
        }

        .coupon-purple {
            background-color: #976bc5;
        }

            .coupon-gray .coupon-date span {
                color: #f58eae;
                margin-left: 10px;
            }
            .exchange{
                position:relative;
                height:32px;
                width:60px;
                border-radius:10px;
                background-color:#fff;
                color:#ff9900;
                float:right;
                margin-top:-80px;
                margin-right:4%;
                padding-top:4px;
                padding-bottom:4px;
                line-height:16px;
                font-size:14px;
                border:1px solid #ff9900;
            }
    </style>
    <script>

          function exchange(x) {
            var num = x.charAt(x.length - 1);
            var valueId = "value" + num;
            var myIntergral = document.getElementById("myIntergral").innerText;
            var value = document.getElementById(valueId).innerText;
            var ifenough = Number(myIntergral) - Number(value);
            if (ifenough >= 0) {

                $.post("<?php echo U('Home/integralChange');?>",
                  {
                    type:num
                  },
                  function(data){
                    if(data == 200){
                        document.getElementById("myIntergral").innerText = ifenough;
                        alert("兑换成功！可在个人中心的优惠券中查看！");
                    }else{
                        alert("兑换失败！请稍后重试");
                    }
                    // console.log(data);
                });

                
            }
            else {
                alert("您的积分不够！");
            }
        }

        
    </script>
</head>
<body>
    <div>
        <div class="to-shopping">
            <a href="<?php echo U(GROUP_NAME . '/Index/index');?>">
                <img src="__PUBLIC__/images/trolley.png" />
                <span>去下单</span>
            </a>
        </div>
        <div class="remainder">
            <h4>积分</h4>
            <h4><span id="myIntergral"><?php echo ($user['userIntegral']); ?></span></h4>
        </div>
        <button>积分兑换</button>
    </div>
    <hr />
    <div class="coupon-div">
    <?php if(is_array($couponData)): $i = 0; $__LIST__ = $couponData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Vo): $mod = ($i % 2 );++$i;?><div class="coupon coupon-pink">
            <div class="coupon-value">￥<span><?php echo ($Vo["couponCut"]); ?></span></div>
            <div class="coupon-data">
                <div>满<?php echo ($Vo["couponFull"]); ?>元可用优惠券</div>
                <div class="coupon-date">有效期<?php echo ($Vo["couponTime"]); ?>天</div>
            </div>
                <!-- <div id="exchange1" class="exchange"onclick="exchange(this.id)"><span id="value1">100</span>积分<br />兑换</div> -->
                <div id="exchange<?php echo ($Vo["couponId"]); ?>" class="exchange"onclick="exchange(this.id)"><span id="value<?php echo ($Vo["couponId"]); ?>"><?php echo ($Vo["couponIntegral"]); ?></span>积分<br />兑换</div>           
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
      <!--   <div class="coupon coupon-blue">
            <div class="coupon-value">¥<span>20</span></div>
            <div class="coupon-data">
                <div>无门槛20元袋洗券</div>
                <div class="coupon-date">有效期5天</div>
            </div>
            <div id="exchange2" class="exchange" onclick="exchange(this.id)"><span id="value2">200</span>积分<br />兑换</div>
        </div>
        <div class="coupon coupon-green">
            <div class="coupon-value">¥<span>30</span></div>
            <div class="coupon-data">
                <div>无门槛30元袋洗券</div>
                <div class="coupon-date">有效期5天</div>
            </div>
            <div id="exchange3" class="exchange" onclick="exchange(this.id)"><span id="value3">300</span>积分<br />兑换</div>
        </div>
        <div class="coupon coupon-purple">
            <div class="coupon-value">¥<span>40</span></div>
            <div class="coupon-data">
                <div>无门槛40元袋洗券</div>
                <div class="coupon-date">有效期5天</div>
            </div>
            <div id="exchange4" class="exchange" onclick="exchange(this.id)"><span id="value4">400</span>积分<br />兑换</div>
        </div> -->       
    </div>
    
</body>
</html>