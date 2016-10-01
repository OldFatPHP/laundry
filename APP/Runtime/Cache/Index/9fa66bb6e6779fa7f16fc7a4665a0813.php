<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0045)http://um.mama.cn/passport/wapindex/register/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>注册帐号</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
        <meta content="telephone=no" name="format-detection">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <script src="__PUBLIC__/js/jquery.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/md5.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/common.js"></script>

        <script type="text/javascript" src="__PUBLIC__/js/wap_common.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/wap_register.js"></script>
        <script type="text/javascript">
            var ajax_domain = '';
        </script>
        <link rel="stylesheet" href="__PUBLIC__/css/register-wap.css">
    
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/35ff706fd57d11c141cdefcd58d6562b.js" charset="gb2312"></script><script type="text/javascript">
hQGHuMEAyLn('[id="bb9c190068b8405587e5006f905e790c"]');</script></head>
    <body><style>[id="bb9c190068b8405587e5006f905e790c"]{display:none;position:absolute;top:-1000000px;visibility:hidden}</style>
        <nav class="sp">
            <a href="" class="goback">
                <b></b>
            </a>
           注册帐号        </nav>
        <form class="register-form" action="<?php echo U(GROUP_NAME . '/Login/addRegister');?>" id="register_form" autocomplete="off" method="post">
            <section class="groups-wrap g-area">
                <div class="form-group">
                    <div class="label-text">手机号：</div>
                    <div class="ipt-wrap">
                        <div class="cls-btn"></div>
                        <input type="phone" class="ipt-text" id="phone" name="phone" placeholder="手机号">
                    </div>
                </div>
<!--                 <div class="form-group verfiy-group">
                    <div class="label-text">验证码：</div>
                    <div class="ipt-wrap">
                        <input type="text" name="phone_vcode" class="ipt-text ipt-verfiycode" id="wap_verify_code_input" placeholder="验证码" maxlength="4">
                        <div class="get-verifycode-box">
                            <span id="time_show" style="display:none;"><i class="time" id="seconds_show">60</i>秒后重新获取</span>
                            <a id="getcode" class="get-verify-btn" href="javascript:void(0);">获取验证码</a>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="label-text">用户名：</div>
                    <div class="ipt-wrap">
                        <div class="cls-btn"></div>
                        <input type="text" name="username" class="ipt-text" id="username" placeholder="用户名">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label-text">请设置密码：</div>
                    <div class="ipt-wrap">
                        <div class="cls-btn"></div>
                        <input type="password" name="password" maxlength="20" class="ipt-text" id="password" placeholder="数字+字母,6-20位">
                    </div>
                    <div class="ipt-wrap password-power">
                        <div class="process-bar">
                            <div class="bar-item"><span>低</span></div>
                            <div class="bar-item"><span>中</span></div>
                            <div class="bar-item"><span>强</span></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label-text">请确认密码：</div>
                    <div class="ipt-wrap">
                        <div class="cls-btn"></div>
                        <input type="password" name="repassword" maxlength="20" class="ipt-text" id="repassword" placeholder="确认密码">
                    </div>
                </div>
            </section>

            <!-- 登录按键 -->
            <section class="btn-group g-area">
                <button type="button" id="submit">注 册</button>
            </section>

            <section class="text-center">
                已经注册过，
                <a href="<?php echo U(GROUP_NAME . '/Login/index');?>">直接登录</a>
            </section>
        </form>        
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff2babe867b10ece0ff53079ad6c04981' type='text/javascript'%3E%3C/script%3E"));
</script><script src="__PUBLIC__/js/h.js" type="text/javascript"></script>   

    

<div class="g-blackTipsMask"></div></body></html>