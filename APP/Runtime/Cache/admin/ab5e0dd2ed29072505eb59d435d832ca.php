<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" href="lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<style type="text/css">
	tbody img {
		height: 100px;
	}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
</head>
<body class="pos-r">
<!-- <div class="pos-a" style="width:10px;left:0;top:0; bottom:0; height:100%; border-right:1px solid #e5e5e5; background-color:#f5f5f5">
	<ul id="treeDemo" class="ztree">
	</ul>
</div> -->
<div style="margin-left:10;">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> Banner图设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="100">序号</th>
						<th>图片</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-c va-m">
						<td>第 1 张</td>
						<td><img src="/laundry/APP/Modules/Index/Tpl/Public/images/ad-images-1.jpg"></td>
						<td><a style="text-decoration:none" class="ml-5" href="<?php echo U(GROUP_NAME . '/System/imageUploadShow', array('imageName'=>'ad-images-1'));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a></td>
					</tr>
					<tr class="text-c va-m">
						<td>第 2 张</td>
						<td><img src="/laundry/APP/Modules/Index/Tpl/Public/images/ad-images-2.jpg"></td>
						<td><a style="text-decoration:none" class="ml-5" href="<?php echo U(GROUP_NAME . '/System/imageUploadShow', array('imageName'=>'ad-images-2'));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a></td>
					</tr>
					<tr class="text-c va-m">
						<td>第 3 张</td>
						<td><img src="/laundry/APP/Modules/Index/Tpl/Public/images/ad-images-3.jpg"></td>
						<td><a style="text-decoration:none" class="ml-5" href="<?php echo U(GROUP_NAME . '/System/imageUploadShow', array('imageName'=>'ad-images-3'));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a></td>
					</tr>
				</tbody>
			</table>
			<div class="result page">&nbsp;&nbsp;&nbsp;<?php echo ($page); ?></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui.admin/js/H-ui.admin.js"></script> 
</body>
</html>