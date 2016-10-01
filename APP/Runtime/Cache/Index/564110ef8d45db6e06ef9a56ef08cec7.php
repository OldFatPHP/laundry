<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>订单列表</title>
    <style>
        /* 1. General */
        body {
            background-color: #f0f0f0;
            overflow-x: hidden;
            margin: 0px;
            color: #1a1a1a;
            font-family: "Microsoft YaHei", Times, serif;
            text-align: center;
            font-size: 15px;
        }

        .mainbody {
            width: 100%;
            padding-bottom: 70px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding-top:40px;
        }
        /*<!--底部菜单栏-->*/
        #bottomNav {
            background-color: #fff;
            height: 40px;
            z-index: 999;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            _position: absolute; /* for IE6 */
            _top: expression(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); /* for IE6 */
            overflow: visible;
            border-top: 1px solid #E6E6E6;
            padding-top: 8px;
        }

            #bottomNav .nav {
                text-align: center;
                width: 33.3%;
                float: left;
                color: #808080;
            }

                #bottomNav .nav img {
                    width: 20px;
                    border: 0;
                }

                #bottomNav .nav h5 {
                    margin-top: -4px;
                    font-weight: normal;
                    font-size: 12px;
                }

        .nav-active h5 {
            color: #1eb0fc;
        }
        /*<!--底部菜单栏--end-->*/

        .header{
            height:40px;
            font-size:16px;
            background-color:#fff;
            line-height:40px;
            border-bottom:1px solid #e5e5e5;
            position:fixed;
            width:100%;
            top:0;
        }
        .completed-order {
            position: absolute;
            top: 0;
            text-align: right;
            right:20px;
            line-height: 40px;
            height: 40px;
            font-size:13px;
            color:#00e1f8;
            
        }
        .no-order{
            font-size:14px;
            margin-top:40px;
        }
        .to-order{
            border:1px solid #00e1f8;
            background-color:#fff;
            height:35px;
            color:#00e1f8;
            line-height:35px;
            border-radius:5px;
            width:70px;
            outline:none;
            margin-top:50px;
        }
        .no-order-div{
            display:none;
        }
        .order-div {
            background-color: #fff;
            border-top: 1px solid #e5e5e5;
            margin-top: 10px;
            text-indent: 10px;
            font-size: 13px;
            text-align: left;
        }
        .order-header {
            height: 50px;
            line-height: 50px;
            border-bottom: 1px solid #e5e5e5;
            font-size:16px;
        }
        .order-header img{
            width:25px;
            margin-bottom:-6px;
            margin-right:10px;
        }
        .process {
            height: 45px;
            float: right;
            color: #00e1f8;
            font-size: 12px;
            line-height:26px;
            text-align: right;
            margin-right:15px;
            margin-top:5px;
        }
        .process5 {
            height: 45px;
            float: right;
            color: #ff6a00;
            font-size: 12px;
            line-height: 26px;
            text-align: right;
            margin-right: 15px;
            margin-top: 5px;
        }
        .process5 img {
            float: right;
            margin-right: 0px;
            width: 100px;
        }
             .process img {
                float: right;
                margin-right: 0px;
                width: 80px;
            }
        .order-data {
            border-bottom: 1px solid #e5e5e5;
            height: 70px;
            line-height: 32px;
            padding-top: 5px;
        }
        .modify img{
            width:14px;
            margin-left:10px;
            margin-right:3px;
            margin-bottom:-1px;
        }
        .modify{
            color:#00e1f8;
            font-size:12px;
            cursor:default;
        }
        .process-step{
            height:40px;
            line-height:40px;
        }
        h5{
            font-weight:normal;
            color:#a19999;
        }
    </style>
</head>
<body>
    <div class="mainbody">
        <div class="header">
            <div>未完成</div>
            <div class="completed-order" onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/completedOrder'">已完成</div>
        </div>
        <div class="no-order-div"><!--当没有订单时显示该模块-->
            <div class="no-order">您没有未完成的订单</div>
            <button class="to-order" onclick="window.location.href='Index.html'">去下单</button>
        </div>
        <div class="order-div"onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/orderDetail'">
            <div class="order-header">
                <img src="__PUBLIC__/images/bagclean.png" />袋洗
                <div class="process">
                    待付款<br />
                    <img src="__PUBLIC__/images/process1.png" />
                </div>
            </div>
            <div class="order-data">
                <div>订单编号：16083165 915291</div>
                <div>取件时间：2016-09-03 23：00-24：00</div>
            </div>
            <div class="process-step">等待付款</div>
        </div>
        <div class="order-div" onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/orderDetail'">
            <div class="order-header">
                <img src="__PUBLIC__/images/bagclean.png" />袋洗
                <div class="process">
                    待上门取件<br />
                    <img src="__PUBLIC__/images/process2.png" />
                </div>
            </div>
            <div class="order-data" onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/orderDetail'">
                <div>订单编号：16083165 915291</div>
                <div>取件时间：2016-09-03 23：00-24：00</div>
            </div>
            <div class="process-step">待上门取件</div>
        </div>
        <div class="order-div" onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/orderDetail'">
            <div class="order-header">
                <img src="__PUBLIC__/images/bagclean.png" />袋洗
                <div class="process">
                    待上门派件<br />
                    <img src="__PUBLIC__/images/process3.png" />
                </div>
            </div>
            <div class="order-data">
                <div>订单编号：16083165 915291</div>
                <div>取件时间：2016-09-03 23：00-24：00</div>
            </div>
            <div class="process-step">待上门派件</div>
        </div>
        <div class="order-div" onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/orderDetail'">
            <div class="order-header">
                <img src="__PUBLIC__/images/bagclean.png" />袋洗
                <div class="process5">
                    维权状态<br />
                    <img src="__PUBLIC__/images/process5.png" />
                </div>
            </div>
            <div class="order-data">
                <div>订单编号：16083165 915291</div>
                <div>取件时间：2016-09-03 23：00-24：00</div>
            </div>
            <div class="process-step">退款中</div>
        </div>



        <h5>无更多订单</h5>
    </div>
    

    <!--底部菜单栏-->
    <div id="bottomNav">
        <a href="<?php echo U(GROUP_NAME . '/Index/index');?>" target="_parent">
            <div id="footBtn1" class="nav" onclick="bottomNavClick(this.id)">
                <img id="footBtnImg1" src="__PUBLIC__/images/home.png" />
                <h5>首页</h5>
            </div>
        </a>
        <a href="<?php echo U(GROUP_NAME . '/Order/index');?>" target="_parent">
            <div id="footBtn2" class="nav" onclick="bottomNavClick(this.id)">
                <img id="footBtnImg2" src="__PUBLIC__/images/order.png" />
                <h5>订单</h5>
            </div>
        </a>
        <a href="<?php echo U(GROUP_NAME . '/Home/index');?>" target="_parent">
            <div id="footBtn3" class="nav-active  nav" onclick="bottomNavClick(this.id)">
                <img id="footBtnImg3" src="__PUBLIC__/images/Personal-Center-active.png" />
                <h5>我的</h5>
            </div>
        </a>
    </div>
</body>
</html>