<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>专业清洗</title>
<link href="__PUBLIC__/css/ProfessionalCleaning.css" rel="stylesheet" type="text/css" />
    <script src="__PUBLIC__/js/CreateList.js"></script>
    <script src="__PUBLIC__/js/jquery-2.0.0.min.js"></script>

    <style>
        iframe {
            width: 100%;
            margin: 0 0 1em;
            border: 0;
        }

    </style>
</head>

<body>
    <div class="mainbody">
        <!--一级菜单栏-->
        <div class="nav">
            <ul>
                <li id="Server1" class="active" onclick="navClick1(this.id);">洗衣</li>

                <li id="Server2" onclick="navClick1(this.id);">洗鞋</li>

                <li id="Server3" onclick="navClick1(this.id);">洗家居</li>
                <li id="Server4" onclick="navClick1(this.id);">奢侈品</li>

                
            </ul>
        </div>
        <style media="screen,print">
            #body {
                width: 70em;
                max-width: 100%;
                margin: 0 auto;
            }

            iframe {
                width: 100%;
                margin: 0 0 1em;
                border: 0;
            }
        </style>
        <script>
            /*
             * When the iframe is on a different subdomain, uncomment the following line
             * and change "example.com" to your domain.
             */
            // document.domain = "example.com";
            function setIframeHeight(iframe) {
                if (iframe) {
                    var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
                    if (iframeWin.document.body) {
                        iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
                    }
                }
            };

            // window.onload = function () {
            // 	setIframeHeight(document.getElementById('external-frame'));
            // };
        </script>
        <div id="body">
            <iframe src="<?php echo U(GROUP_NAME . '/Order/topClothes');?>" frameborder="0" id ="ServerDiv" onload="setIframeHeight(this)"></iframe>
        </div>
        

        <!--服务内容-->
        <div class="server-div">
            <div class="server">
                <img src="__PUBLIC__/images/hight-server.png" />
                <h5>高效服务</h5>
            </div>
            <div class="server">
                <img src="__PUBLIC__/images/insurance.png" />
                <h5>平安保险</h5>
            </div>
            <div class="server">
                <img src="__PUBLIC__/images/get.png" />
                <h5>上门取件</h5>
            </div>
        </div>
        <div class="footer">
            <div class="footer-border">
                <div class="footer-bg">
                    <h6>
                        羽绒服、棉服等厚重衣物预计3-5天送回<br />
                        皮衣、裘衣预计7-9天送回
                    </h6>
                    <h6>点击查看<a href="">《e袋洗不能提供清洗服务衣物列表》</a></h6>
                </div>
            </div>
        </div>

        <!--预约取件-->
        <div id="primary-orderDiv" class="orderDiv"style="display:block;"onclick="window.location.href = 'http://localhost/laundry/index.php/Index/Order/appointment'">
            <div class="primary-order"><h2>预约取件</h2></div>
        </div>
        <div id="buy-orderDiv" class="orderDiv">
            <div class="tip">
                请等待小e上门确认价格并付款
            </div>
            <div class="basket">
                <div id="totalNum" class="buy-num">0</div>
                <img src="__PUBLIC__/images/market-basket.png"onclick="openShoppingBasket()" />
            </div>
            <div id="orderbtn2" onclick="yuyueqvjian()">
                <div class="primary-order"><h2>预约取件</h2></div>
            </div>
            <div class="estimated-price-div">
                <div class="estimated-price"><span>预估价格¥</span><span id="totalPrice">0.00</span></div>
                <div style="color:#bec3d7;">不含运费</div>
            </div>
        </div>
        <!--价格预估详情模块-->
        <div id="estimateBg"style="display:none;"></div>
        <div id="estimateDiv" style="display:none;">
            <div class="estimate-header">
                <span style="float:left;color:#00dbf5;" onclick="cleanBasket();">清空</span>
                <span>价格预估</span>
                <span style="float:right;color:#00dbf5;"onclick="closeShoppingBasket();">关闭</span>
            </div>
            <div style="height:70%;overflow:scroll;padding-bottom:30%;">
                <table id="list"></table>
            </div>
            





        </div>



    </div>
</body>

</html>