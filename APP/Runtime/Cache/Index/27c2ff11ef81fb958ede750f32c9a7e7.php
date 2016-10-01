<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="__PUBLIC__/login/js/jquery-2.0.0.min.js"></script>
    <title>账号登陆</title>
    <link href="__PUBLIC__/login/css/login.css" rel="stylesheet" />
    <style>
        .input-div {
            margin-top: 22px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#submit').click(function () {

                if (!$("#tel").val().match(/^1[3|4|5|8][0-9]\d{4,8}$/)) {

                    $(".error").css("display", "block");
                    $(".error").html("您输入的手机号码不正确！");
                    return false;

                } else {
                    var name = $("#tel").val();
                    var password = $("#pwd").val();
                    $.post('http://localhost/laundry/index.php/Index/Login/check',
                            {
                                name:name,
                                password:password
                            },
                            function(data){
                                data = eval(data);
                                if (data.result == 1) {
                                    window.location.href = "http://localhost/laundry/index.php/Index/Index/index";
                                }else {
                                    //$(".error").css("display", "block");
                                    //$(".error").html("密码与手机号码不匹配，是否<a href='#'>忘记密码</a>?");
                                    return false;
                                }
                    })
                }
            });

        });
    </script>
</head>
<body>
    <div class="header">
        <a onclick="javascript:history.back();">返回</a>
        账号登陆
    </div>
    <form action="<?php echo U(GROUP_NAME . '/Login/check');?>" method="post">
        <div class="input-div tel">
            <input id="tel" type="tel" name="name" placeholder="手机号" />
        </div>
        <div class="input-div psd">
            <input id="pwd" type="password" name="password" placeholder="请输入密码" />
        </div>
        <input id="submit" class="btn" type="submit" value="登陆"/>
        
    </form>
    <a href="<?php echo U(GROUP_NAME . '/Login/findPwd');?>"class="a-link">找回密码</a>
    <a href="<?php echo U(GROUP_NAME . '/Login/register');?>" class="a-link">免费注册</a>
    <div class="error"></div>
</body>
</html>