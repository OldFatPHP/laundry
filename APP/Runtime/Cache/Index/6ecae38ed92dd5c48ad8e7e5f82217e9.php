<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script src="__PUBLIC__/js/jquery-2.0.0.min.js"></script>
    <title>意见反馈</title>
    <style>
        /* 1. General */
        body {
            background-color: #f0f0f0;
            overflow-x: hidden;
            margin: 0px;
            color: #999999;
            font-family: "Microsoft JhengHei ", Times, serif;
            text-align: center;
            font-size: 14px;
        }

        .mainbody {
            width: 100%;
            padding-bottom: 70px;
            text-align: center;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        .header{
            height:60px;
            padding-top:30px;
            background-color:#fff;
        }
        .table {
            background-color: #fff;
            width: 100%;
            border-top: 1px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            margin-top: 20px;
        }
            .table td {
                height:40px;
            }
            .table th{
                height: 30px;
                border-bottom:1px solid #f0f0f0;
                text-align:left;
            }
        .type {
            width: 85%;
            border: 1px solid #999999;
            margin-left: 10%;
            height: 30px;
            line-height: 30px;
            border-radius: 4px;
            color: #333333;
            cursor: default;
            margin-top: 10px;
        }
        textarea {
            width: 100%;
            border: none;
            outline:none;
            resize: none;
            height:80px;
            text-indent:10px;
            line-height:20px;
        }
        .submit {
            width: 90%;
            height: 40px;
            background-color: #c8c5c5;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
            margin-bottom: 40px;
            outline: none;
        }
        .footer{
            line-height:20px;
        }
        .choose {
            border: 1px solid #00d9f4;
            width: 85%;
            margin-left: 10%;
            height: 30px;
            line-height: 30px;
            border-radius: 4px;
            color: #00d9f4;
            margin-top: 10px;
            cursor:default;
        }
    </style>
    <script>
        Num = new Array(0,0,0,0,0,0);
        var chooseNum =0; 
        text = '';
        function choose(x) {
            var ifchoose = x.className;
            var i = parseInt(x.id);
            if (ifchoose == "choose") {
                x.className = "type";
                chooseNum--;
                Num[i-1] = 0;
            }
            else {
                chooseNum++;
                Num[i-1] = 1;
                x.className = "choose";
            }
        }
        function if_fulfil() {
            
             text = document.getElementById("text").value;
            if (chooseNum>0 && text.length>0) {
                document.getElementById("submit").disabled = false;
                document.getElementById("submit").style.background = "#00dbf5";
            }
            else {
                document.getElementById("submit").disabled = true;
                document.getElementById("submit").style.background = "#c8c5c5";
            }
        }
        var sub = document.getElementById("submit").innerText;
        function succeed() {
            $.post("<?php echo U('Home/addSuggest');?>",
                  {
                    data:text,
                    choose:Num
                    
                  },
                  function(data){                
                      //console.log(data);
                    if(data == 200){
                        alert("反馈成功！");
                        window.location.href = "<?php echo U(GROUP_NAME . '/Home/index');?>";
                    }else{
                        alert("反馈失败！请稍后重试");
                    }
                });
            
            
        }
    </script>
</head>
<body>
    <div class="mainbody">
        <div class="header">净柏干洗致力为您提供专业、高效、高品质的洗护服务<br />
欢迎您提供宝贵的意见或建议</div>
        <table class="table">
            <tr><th colspan="3">反馈类型</th></tr>
            <tr>
                <td><div class="type" id="1" onclick="choose(this); if_fulfil()">洗护质量</div></td>
                <td><div class="type" id="2" onclick="choose(this); if_fulfil()">服务态度</div></td>
                <td><div class="type" id="3" onclick="choose(this); if_fulfil()">物流速度</div></td>
            </tr>
            <tr>
                <td><div class="type" id="4" onclick="choose(this); if_fulfil()"style="margin-bottom: 10px;">产品易用性</div></td>
                <td><div class="type" id="5" onclick="choose(this); if_fulfil()" style="margin-bottom: 10px;">付款流程</div></td>
                <td><div class="type" id="6" onclick="choose(this); if_fulfil()" style="margin-bottom: 10px;">其他</div></td>
            </tr>
            <tr><th colspan="3"style="border-top: 1px solid #f0f0f0; ">反馈内容</th></tr>
            <tr><td colspan="3"><textarea id="text" placeholder="请输入您的意见或建议"onkeyup="if_fulfil()" onblur="if_fulfil()"></textarea></td></tr>
        </table>
        <input id="submit" type="submit" class="submit" value="提交" disabled="disabled"onclick="succeed()" />
        <div class="footer">
            客服热线: 400-888-8888<br/>
            (周一到周日8:30-22:00)<br />
            您也可以关注我们官方公众号"净柏干洗"与我们联系。
        </div>






    </div>

</body>
</html>