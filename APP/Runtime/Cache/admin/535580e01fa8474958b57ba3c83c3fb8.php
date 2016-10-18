<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/style.css" />
<title>净柏干洗</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="index.html">净柏干洗管理平台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="index.html">v1.0</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs"></span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>登录账号：</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($user['name']); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo U('Login/logout');?>">退出</a></li>
						</ul>
					</li>
					<!-- <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li> -->
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
				    <li><a _href="<?php echo U('Order/index');?>" data-title="待付款订单列表" href="javascript:void(0)">待付款订单列表</a></li>
				    <li><a _href="<?php echo U('Order/WaitingMember');?>" data-title="待取件订单列表" href="javascript:void(0)">待取件订单列表</a></li>
					<li><a _href="<?php echo U('Order/WaitingSend');?>" data-title="待派件订单列表" href="javascript:void(0)">待派件订单列表</a></li>
					<li><a _href="<?php echo U('Order/Completed');?>" data-title="已完成订单列表" href="javascript:void(0)">已完成订单列表</a></li>
                    <!-- <li><a _href="<?php echo U('Order/Refunding');?>" data-title="退款中订单列表" href="javascript:void(0)">退款中订单列表</a></li> -->
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 维权情况管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Order/Refunding');?>" data-title="维权处理中" href="javascript:void(0)">维权处理中</a></li>
					<li><a _href="<?php echo U('Order/EndRefund');?>" data-title="已退款订单" href="javascript:void(0)">已退款订单</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论及反馈管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Comment/index');?>" data-title="评论列表" href="javascript:void(0)">评论列表</a></li>
					<li><a _href="<?php echo U('Comment/feedback');?>" data-title="意见反馈列表" href="javascript:void(0)">反馈列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 商品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U(GROUP_NAME . '/Product/clothes');?>" data-title="衣服类" href="javascript:void(0)">衣服类</a></li>
					<li><a _href="<?php echo U(GROUP_NAME . '/Product/shoe');?>" data-title="鞋类" href="javascript:void(0)">鞋类</a></li>
					<li><a _href="<?php echo U(GROUP_NAME . '/Product/household');?>" data-title="家居用品类" href="javascript:void(0)">家居用品类</a></li>
					<li><a _href="<?php echo U(GROUP_NAME . '/Product/luxury');?>" data-title="奢侈品护理" href="javascript:void(0)">奢侈品护理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U(GROUP_NAME . '/User/userList');?>" data-title="会员列表" href="javascript:;">会员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 积分及优惠活动<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U(GROUP_NAME . '/Coupon/couponList');?>" data-title="优惠券管理" href="javascript:void(0)">优惠券管理</a></li>
					<li><a _href="<?php echo U(GROUP_NAME . '/Coupon/discountPage');?>" data-title="优惠打折" href="javascript:void(0)">优惠打折</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统设置<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U(GROUP_NAME . '/System/bannerSettingShow');?>" data-title="Banner图设置" href="javascript:void(0)">Banner图设置</a></li>
					<?php if($user['name'] == 123): ?><li><a _href="<?php echo U(GROUP_NAME . '/System/adminList');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
					<?php else: ?>
						<li><a _href="<?php echo U(GROUP_NAME . '/System/adminList');?>" data-title="管理员列表" href="javascript:void(0)" style="display: none">管理员列表</a></li><?php endif; ?>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href=<?php echo U('Index/welcome');?>>我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui.admin/js/H-ui.admin.js"></script> 
</body>
</html>