<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="__PUBLIC__/login/js/jquery-2.0.0.min.js"></script>
    <title>注册账号</title>
    <link href="__PUBLIC__/login/css/login.css" rel="stylesheet" />
   
    <script type="text/javascript">
        var InterValObj; //timer变量，控制时间
        var count = 30; //间隔函数，1秒执行
        var curCount;//当前剩余秒数
        function validatemobile(mobile) {
            var myreg = /^1[3|4|5|8][0-9]\d{4,8}$/;

            if (mobile.length != 11 || !myreg.test(mobile)) {
                $(".error").css("display", "block");
                $(".error").html("请输入有效手机号码！");
                return false;
            }
            else {
                document.getElementById("error").style.display = "none";
                return true;
            }

        }
        function sendMessage() {
            var mobile = document.getElementById("mobile").value;
            validatemobile(mobile);//调用上边的方法验证手机号码的正确性
            if (validatemobile(mobile) == true) {
                curCount = count;
                //设置button效果，开始计时
                $("#btnSendCode").attr("disabled", "true");
                $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
                InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                //向后台发送处理数据
                $.ajax({
                    type: "POST", //用POST方式传输     　　
                    url: '', //目标地址.
                    data: "&a=" + mobile,
                    success: function (result) {

                    }
                });
            }
        }
        //timer处理函数
        function SetRemainTime() {
            if (curCount == 0) {
                window.clearInterval(InterValObj);//停止计时器
                $("#btnSendCode").removeAttr("disabled");//启用按钮
                $("#btnSendCode").val("重新发送验证码");
            }
            else {
                curCount--;
                $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
            }
        }
        //验证是否可提交
        $(document).ready(function () {
            $('.btn').click(function () {
                if ($("#mobile").val().length <= 0) {
                    $(".error").css("display", "block");
                    $(".error").html("请输入手机号码！");
                    return false;
                }
                else if (!$("#mobile").val().match(/^1[3|4|5|8][0-9]\d{4,8}$/)) {
                    $(".error").css("display", "block");
                    $(".error").html("手机号码不正确！");
                    return false;
                }
                else if ($("#username").val().length <= 0) {
                    $(".error").css("display", "block");
                    $(".error").html("用户名不能为空！");
                    return false;
                }
                else if ($("#VerifyCode").val().length <= 0) 
                else if ($("#pwd").val().length < 6 || $("#pwd").val().length > 16) {
                    $(".error").css("display", "block");
                    $(".error").html("密码长度只能设置为6~16位！");
                    return false;
                }
                else if ($("#pwd").val() != $("#comfirmpwd").val()) {
                    $(".error").css("display", "block");
                    $(".error").html("密码不一致，请重新输入新密码！");
                    return false;
                }

                else {
                    $(".error").css("display", "none");
                    return true;
                }
            });
        });
    </script>



</head>
<body>
    <div class="header">
        <a onclick="javascript:history.back();">返回</a>
        注册账号
    </div>
    <form action="<?php echo U(GROUP_NAME . '/Login/addRegister');?>" method="post">
        <table>
            <tr>
                <td>
                    <div class="input-div tel">
                        <input id="mobile" name="userPhone" type="tel" placeholder="手机号" required/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-div username">
                        <input id="username" name="userName" type="text" placeholder="用户名" required/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-div psd">
                        <input id="pwd" type="password" name="userPwd" placeholder="请设置长为6~16位的密码" required/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-div psd">
                        <input id="comfirmpwd" name="comfirmpwd" type="password" placeholder="请确认密码" required/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-div Verify-code">
                        <input id="VerifyCode" name="VerifyCode" type="text" placeholder="请输入验证码" style="width:110px;" required/>
                        <input id="btnSendCode" type="button" value="获取验证码" onclick="sendMessage()" style="float:right;height:100%;padding-left:10px;padding-right:10px;" />
                    </div>
                </td>
            </tr>
        </table>
        <input id="submit" class="btn" type="submit" value="提交" />

    </form>
    <div id="error" class="error"></div>

</body>
</html>