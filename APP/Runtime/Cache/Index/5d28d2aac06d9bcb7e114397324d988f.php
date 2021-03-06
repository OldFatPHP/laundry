<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>订单详情</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            font-family: "Microsoft YaHei", Times, serif;
            text-align: left;
            padding-bottom:90px;
            float:left;
        }
        .step-div {
            width: 100%;
            background-color: #fff;
            float: left;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ededed;
        }
        .step-div img{
            width:95%;
        }
        .header {
            height: 30px;
            line-height: 30px;
            text-indent: 10px;
            border-bottom: 1px solid #ededed;
            font-size: 14px;
        }
        .data-div {
            background-color: #fff;
            border-bottom: 1px solid #ededed;
            border-top: 1px solid #ededed;
            font-size: 13px;
            margin-bottom: 10px;
            text-indent: 35px;
            float: left;
            width: 100%;
        }
         .header img {
            width: 15px;
            margin-right: 10px;
        }
        .detail-div {
            padding-top: 12px;
            padding-bottom: 14px;
        } .logistics-data-div {
            background-color: #fff;
            width: 100%;
            text-align: left;
            border-collapse:collapse;
        }
            .logistics-data-div th {
                width: 120px;
                border-bottom: 1px solid #ededed;
            }
                .logistics-data-div th img {
                    width:100%;
                    float:left;
                    margin:0;
                }

            .logistics-data-div td {
                vertical-align: top;
                border-bottom: 1px solid #ededed;
                padding-top: 10px;
                text-align: left;
                line-height: 20px;
                text-indent: 0;
            }
        
        .data {
            color: #00e1f8;
            float: left;
            width: 95%;
        }

            .data div {
                margin-bottom: 5px;
            }
        .data-detail {
            height: 60px;
        }
        .line-div{
            width:5%;
            float:left;
        }
        .btn-div {
            background-color: #fff;
            height: 50px;
            z-index: 999;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            _position: absolute; /* for IE6 */
            _top: expression(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); /* for IE6 */
            overflow: visible;
            border-top: 1px solid #E6E6E6;
        }
        button{
            border:1px solid #6f7278;
            color:#6f7278;
            background-color:#fff;
            height:30px;
            border-radius:4px;
            width:80px;
            float:right;
            margin-right:10px;
            margin-top:10px;
        }
        .active{
            border:1px solid #00e1f8;
            color:#00e1f8;
        }
    </style>
</head>
<body>
    <div class="step-div">
        <img src="__PUBLIC__/images/step.png" />
    </div>
    <div class="data-div">
        <div class="header"><img src="__PUBLIC__/images/orderdata.png" />订单信息</div>
        <div class="detail-div">
            <div>订单编号：16083165 915291</div>
            <div>取件时间：2016-09-06 23:00-24:00</div>
            <div>派件时间：2016-09-16 23:00-24:00</div>
            <div>服务项目：袋洗</div>
        </div>
    </div>
    <div class="data-div">
        <div class="header"><img src="__PUBLIC__/images/logistics.png" />衣物信息</div>
            <table class="logistics-data-div">
                <tr>
                    <th><img src="__PUBLIC__/images/goods10.png" /></th><!--放客人自己衣服图片的地方-->
                    <td>上衣，蓝色<br />衣领破损,袖子破了</td><!--编辑衣物信息的地方-->
                </tr>
                <tr>
                    <th><img src="__PUBLIC__/images/goods10.png" /></th><!--放客人自己衣服图片的地方-->
                    <td>上衣，蓝色<br />衣领破损,袖子破了</td><!--编辑衣物信息的地方-->
                </tr>
            </table>
            

           
    </div>

    <div class="data-div">
        <div class="header"><img src="__PUBLIC__/images/addressdata.png" />地址信息</div>
        <div class="detail-div">
            <div>广东 惠州 惠城区<span style="float:right;margin-right:10px;">15767970000</span></div>
            <div>演达大道46号惠州学院</div>
        </div>
    </div>
    <div class="btn-div">
        <button onclick="ifcomfirm()">确认收货</button>
        <button class="active" onclick="reWash()">申请重洗</button>
    </div>
    <script>
        function ifcomfirm() {
            var ifconfirm = confirm("是否确认收货");
            if (ifconfirm == true) {
                window.location.href = "<?php echo U(GROUP_NAME . '/Order/iWantComment');?>";
            }
        }
        function reWash() {
            alert("您的请求已转发给工作人员，工作人员将在两天内和您联系！")
        }
    </script>
</body>
</html>