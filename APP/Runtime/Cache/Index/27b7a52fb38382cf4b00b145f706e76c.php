<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>预约取件</title>
    <script src="js/jquery-2.0.0.min.js"></script>
    <style>
        /* 1. General */
        body {
            background-color: #F5F9FA;
            overflow-x: hidden;
            margin: 0px;
            color: #1a1a1a;
            font-family: "Microsoft YaHei", Times, serif;
            text-align: center;
            font-size:15px;
            width:100%;
        }

        .mainbody {
            width: 100%;
            padding-bottom: 60px;
            text-align: center;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        .addressbg {
            width: 100%;
            height: 100px;
            background: url(http://localhost/laundry/index.php/Index/Tpl/Public/images/adressbg.png) repeat;
            margin-top: 6px;
            margin-bottom: 6px;
            color: #bbc1cc;
            vertical-align: middle;
            background-size:auto 100%;
        }
        .fare {
            text-align: left;
            width: 100%;
            background-color: #fff;
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 1px solid #e5eeff;
            border-bottom: 1px solid #e5eeff;
            float: left;
            color: #bbc2cd;
            margin-top: 12px;
            margin-bottom: 19px;
            line-height: 25px;
        } 
        .get-time {
            text-align: left;
            width: 100%;
            background-color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            border-top: 1px solid #e5eeff;
            border-bottom: 1px solid #e5eeff;
            float: left;
            color: #bbc2cd;
            font-size:14px;
        }
        .float-right {
            float: right;
            margin-right:15px;
        }
        .float-left{
            float:left;
            margin-left:15px;
        }

        textarea {
            width: 100%;
            height: 30px;
            border: none;
            outline: none;
            background-color: #fff;
            border-bottom: 1px solid #e5eeff;
            float: left;
            text-indent: 15px;
            padding-top: 12px;
            font-size: 14px;
            padding-bottom: 12px;
            margin-bottom: 6px;
        }
        .btn-appointment {
            width: 90%;
            border: none;
            color: #fff;
            background-color: #bbc1cc;
            font-size: 20px;
            height: 50px;
            font-family: "Microsoft YaHei", Times, serif;
            line-height: 50px;
            outline:none;
            border-radius: 8px;
        }
      
        .no-address{
            float:left;
            font-size:15px;
            line-height:95px;
            padding-left:20px;
        }
        .address {
            float: left;
            font-size: 15px;
            padding-left: 20px;
            line-height: 28px;
            margin-top: 15px;
            color: #000000;
        }
        table {
            background-color: #fff;
            margin-top: 5px;
            margin-bottom: 10px;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            color: #1a1a1a;
        }

        .list-data td:nth-child(1) {
            width: auto;
        }

        .list-data td:nth-child(2) {
            width: 15px;
            text-align: right;
            font-size: 12px;
        }

        .list-data td:nth-child(3) {
            text-align: right;
            width: 55px;
        }

        td {
            height: 25px;
            line-height: 25px;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 13px;
        }

        .header {
            font-size: 15px;
            border-bottom: 1px solid #e9ebf3;
            width: 30%;
            padding-left: 10px;
        }

        .header-small {
            font-size: 8px;
            text-align: right;
            width: 70%;
            padding-right: 10px;
        }

        .list-data td, .list-data th {
            font-size: 13px;
            height: 35px;
            line-height: 35px;
        }

        .list-data td {
            border-bottom: 1px solid #e9ebf3;
        }

        th {
            font-weight: normal;
        }

        .color-orange {
            color: #ff6a00;
        }

        .color-gray {
            color: #aaaaaa;
        }
    </style>
    <script>
        
        function GetQueryString(name) 
        var theAddress = decodeURI(GetQueryString("address"));//获取并解密地址值
        var nametel = decodeURI(GetQueryString("nametel"));//获取并解密名字和电话号码
        var timechosed = decodeURI(GetQueryString("timechosed"));//获取并解密取件时间
        var datechosed = decodeURI(GetQueryString("datechosed"));//获取并解密取件日期
        function changeaddress() 
            else 
        }
        function changetime() 
            else {
                document.getElementById("time").innerHTML =datechosed + timechosed;
                document.getElementById("time").style.color = "#000000";
            }
        }
    </script>
    <script>
        $(document).ready(function () );
        });
       
        function Price() 
            else if (coupon==true) 
            else 
            if (totalPrice < 60) 
            else 
            document.getElementById("totalPrice").innerText = totalPrice.toFixed(1);
        }
    </script>
    <script>
        function testfinish() 
            else {
                document.getElementById("btnOrder").disabled = true;
                document.getElementById("btnOrder").style.backgroundColor = "#bbc1cc";
            }
        }
        function order() 
    </script>

</head>
<body onload="changeaddress(); changetime(); Price()"onmouseover="    testfinish()">
    <div class="mainbody">
           
        <div class="addressbg"onclick="window.location.href='http://localhost/laundry/index.php/Index/Order/address'">
            <div id="address" class="no-address">添加/填写地址</div><div class="float-right"style="line-height:95px;">></div>
        </div>

        <div class="get-time"onclick="window.location.href='ServerTime.html'"><div id="time" class="float-left">请选择取件时间</div><span class="float-right">></span></div>
            <textarea placeholder="如果有问题请备注留言"></textarea>
        <table id="list-data" class="list-data">
            <tr>
                <td colspan="3" class="header">订单列表</td>
            </tr>
            <tr>
                <td>洗衬衫</td>
                <td>x<span id="num1">1</span></td>
                <td>¥<span id="price1">20.0</span></td>
            </tr>
            <tr>
                <td>钱包（边油）</td>
                <td>x<span id="num2">2</span></td>
                <td>¥<span id="price2">18.0</span></td>
            </tr>
            <tr>
                <td>裤子</td>
                <td>x<span id="num3">1</span></td>
                <td>¥<span id="price3">20.0</span></td>
            </tr>
            <tr class="color-orange">
                <td colspan="2">合计</td><td> ¥<span id="PrimaryPrice">0.0</span></td>
            </tr>
            <tr id="DiscountTr" class="color-orange">
                <td colspan="2">全场6折（不和其他活动同享）<input type="checkbox" id="Discount" value="Discount" checked="checked"onchange="Price()" /></td>
                <td>-¥<span id="DiscountPrice">0.0</span></td>
            </tr>
            <tr id="CouponTr" class="color-gray">
                <td colspan="2">使用优惠券 <input type="checkbox" id="Coupon" value="Coupon" onchange="Price()" /></td>
                <td>-¥<span id="CouponPrice">20.0</span></td>
            </tr>
            <tr>
                <td colspan="2">运费（满60免邮）</td>
                <td> ¥<span id="farePrice">20.0</span></td>
            </tr>
            <tr class="color-orange">
                <td colspan="3" style="text-align:right;">实付款 ¥<span id="totalPrice">0.0</span></td>
            </tr>
        </table>
     
        <button id="btnOrder"class="btn-appointment"disabled="disabled" onclick="order()">立即预约</button><!--当且仅当地址和日期都填了之后该按钮才能动-->
    </div>
</body>
</html>