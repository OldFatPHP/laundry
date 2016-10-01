<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>城市列表</title>
    <style>
        body, .location-table, .location-table table {
            width: 100%;
            padding: 0;
            margin: 0;
            font-size: 14px;
            font-family: "Microsoft YaHei", Times, serif;
        }
            .location-table table th {
                background-color: #eeeeee;
                text-align: left;
                font-weight: normal;
                padding-top: 6px;
                padding-left: 20px;
                padding-bottom: 6px;
            }
            .location-table table td {
                padding-top: 10px;
                padding-left: 20px;
                padding-bottom: 10px;
                border-bottom:1px solid #eeeeee;
            }
                .location-table table td button {
                    border: 1px solid #eeeeee;
                    background-color: #fff;
                    padding: 6px 12px;
                    border-radius: 5px;
                    margin-right: 10px;
                    font-family: "Microsoft YaHei", Times, serif;
                    cursor: pointer;
                    outline: none;
                }
    </style>
    <script>
        function loction() 
        function choose() 
        function returnIndex(x) 
    </script>
</head>
<body>
    <div class="location-table">
        <table>
            <tr><th>当前定位城市</th></tr>
            <tr><td id="chooseCity" style="border:none;"onclick="loction();">请选择城市</td><td id="locating" style="display:none;">定位中...</td></tr>
            <tr><th>热门城市</th></tr>
            <tr>
                <td style="border:none;">
                    <button type="button" onclick="returnIndex(this);">北京</button>
                    <button type="button" onclick="returnIndex(this);">上海</button>
                    <button type="button" onclick="returnIndex(this);">深圳</button>
                    <button type="button" onclick="returnIndex(this);">杭州</button>
                </td>
            </tr>
            <tr><th>其他城市</th></tr>
            <tr><td onclick="returnIndex(this);">天津</td></tr>
            <tr><td onclick="returnIndex(this);">武汉</td></tr>
            <tr><td onclick="returnIndex(this);">西安</td></tr>
            <tr><td onclick="returnIndex(this);">南京</td></tr>
            <tr><td onclick="returnIndex(this);">苏州</td></tr>
            <tr><td onclick="returnIndex(this);">宁波</td></tr>
            <tr><td onclick="returnIndex(this);">成都</td></tr>
            <tr><td onclick="returnIndex(this);">广州</td></tr>
            <tr><td onclick="returnIndex(this);">青岛</td></tr>
            <tr><td onclick="returnIndex(this);">福州</td></tr>
            <tr><td onclick="returnIndex(this);">无锡</td></tr>
            <tr><td onclick="returnIndex(this);">重庆</td></tr>
            <tr><td onclick="returnIndex(this);">济南</td></tr>
            <tr><td onclick="returnIndex(this);">石家庄</td></tr>
            <tr><td onclick="returnIndex(this);">厦门</td></tr>
            <tr><td onclick="returnIndex(this);">南宁</td></tr>
            <tr><td onclick="returnIndex(this);">沈阳</td></tr>
            <tr><td onclick="returnIndex(this);">长沙</td></tr>
            <tr><td onclick="returnIndex(this);">徐州</td></tr>
            <tr><td onclick="returnIndex(this);">常州</td></tr>
            <tr><td onclick="returnIndex(this);">哈尔滨</td></tr>
            <tr><td onclick="returnIndex(this);">株洲</td></tr>
            <tr><td onclick="returnIndex(this);">佛山</td></tr>
            <tr><td onclick="returnIndex(this);">太原</td></tr>
            <tr><td onclick="returnIndex(this);">廊坊</td></tr>
            <tr><td onclick="returnIndex(this);">保定</td></tr>
            <tr><td onclick="returnIndex(this);">大连</td></tr>
            <tr><td onclick="returnIndex(this);">韶关</td></tr>
            <tr><td onclick="returnIndex(this);">唐山</td></tr>
            <tr><td style="border:none;" onclick="returnIndex(this);">盐城</td></tr>
            <tr><th style="height:30px;"></th></tr>
        </table>
    </div>
</body>
</html>