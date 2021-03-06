<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>在线充值</title>
    <style>
        body {
            text-align: center;
            font-family: "Microsoft YaHei", Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f3f7fa;
        }
        .header{
            height:50px;
            color:white;
            background-color:#00dbf5;
            line-height:50px;
            font-size:18px;
        }
        .remainder{
            height:110px;
            line-height:110px;
            vertical-align:bottom;
            font-size:15px;
            background-color:#fff;
            margin-bottom:30px;
        }
        .remainder span{
            color:#ff435e;
            font-size:27px;
            margin-left:10px;
        }
        table{
            width:100%;
        }
        td{
            width:50px;
        }
        .value-div {
            width: 90%;
            margin-left:5%;
            border: 1px solid #e5eeff;
            background-color: #fff;
            height:40px;
            margin-bottom:10px;
            border-radius:8px;
            line-height:22px;
            padding-top:12px;
            padding-bottom:12px;
        }
        .largess{
            color:#bbc1cc;
            font-size:14px;
        }
        .active{
            border:1px solid #00dbf5;
            color:#00dbf5;
        }
            .active .largess{
                color:#00dbf5;
            }
        .text{
            width:100%;
            height:50px;
            font-size:15px;
            outline:none;
            border:none;
            text-align:center;
            margin-top:10px;
            margin-bottom:30px;
        }
        .money{
            width:90%;
            height:50px;
            color:#fff;
            font-size:22px;
            background-color:#00dbf5;
            border:none;
            outline:none;
            border-radius:10px;
        }
    </style>
    <script src="__PUBLIC__/js/jquery-2.0.0.min.js" charset="utf-8"></script>
    <script>
        $(document).ready(function(){
              $('#value1').click(function(){
                $('#value1').toggleClass('active') ;
                $('#value2').removeClass('active') ;
                $('#value3').removeClass('active') ;
                $('#value4').removeClass('active') ;
                $('#money').val('100');
              });
              $('#value2').click(function(){
                $('#value2').toggleClass('active') ;
                $('#value1').removeClass('active') ;
                $('#value3').removeClass('active') ;
                $('#value4').removeClass('active') ;
                $('#money').val('200');
              });
              $('#value3').click(function(){
                $('#value3').toggleClass('active') ;
                $('#value1').removeClass('active') ;
                $('#value2').removeClass('active') ;
                $('#value4').removeClass('active') ;
                $('#money').val('300');
              });
              $('#value4').click(function(){
                $('#value4').toggleClass('active') ;
                $('#value1').removeClass('active') ;
                $('#value2').removeClass('active') ;
                $('#value3').removeClass('active') ;
                $('#money').val('400');
              });
        });       
    </script>    
</head>
<body>
    <div class="header">在线充值</div>
    <div class="remainder">余额<span>￥ <?php echo ($user['userBalance']); ?> 元</span></div>
    <table>      
        <tr>
            <td>
                <div id="value1" class="value-div active"  type="what" value="100">
                    <div>100元</div>
                    <div class="largess">赠送：10元</div>
                </div>
            </td>
            <td>
                <div id="value2" class="value-div" onclick="choose(this.id)">
                    <div>200元</div>
                    <div class="largess">赠送：20元</div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="value3" class="value-div" onclick="choose(this.id)">
                    <div>300元</div>
                    <div class="largess">赠送：30元</div>
                </div>
            </td>
            <td>
                <div id="value4" class="value-div" onclick="choose(this.id)">
                    <div>400元</div>
                    <div class="largess">赠送：40元</div>
                </div>
            </td>
        </tr>
    </table>
    <form action="<?php echo U(GROUP_NAME . '/Home/rechargeAdd', array('userBalance' => $user['userBalance']));?>" method="post" accept-charset="utf-8">            
    <input id="money" type="text" name="value" placeholder="输入其他金额" class="text"/>
    <input class="money" type="submit" value="立即充值" />
   </form> 
</body>
</html>