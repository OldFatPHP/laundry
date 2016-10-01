<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<script type="text/javascript">
        function rec(){
          var mymessage=confirm("你确定删除吗？");
          if(mymessage==true)
          {
            return true;
          }
          else
          {
              return false;
          }
        }    
  </script>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 待付款订单列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="100">订单号</th>
						<th width="100">顾客姓名</th>
						<th width="110">联系电话</th>
						<th width="300">订单地址</th>
						<th width="100">订单详情</th>
						<th width="100">下单时间</th>
						<th width="50">原价</th>
						<th width="50">优惠金额</th>
						<th width="50">实际收款</th>
						<th width="60">订单状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($order)): foreach($order as $key=>$vo): ?><tr class="text-c va-m">
						<td><?php echo ($vo["orderId"]); ?></td>
						<td><?php echo ($vo["orderName"]); ?></td>
						<td><?php echo ($vo["orderPhone"]); ?></td>
						<td><?php echo ($vo["orderAddressDetail"]); ?></td>
						<td><?php echo ($vo["orderDetail"]); ?></td>  
						<td><?php echo ($vo["orderTime"]); ?></td>
						<td><?php echo ($vo["orderOldPrice"]); ?></td>
						<td><?php echo ($vo["orderCouponCut"]); ?></td>
						<td><?php echo ($vo["orderPrice"]); ?></td>
						<td class="td-status"><span class="label label-success radius">待付款</span></td>
						<td class="td-manage"><a href="<?php echo U('orderDelete',array('id' => $vo['orderId']));?>" class="btn btn-sm btn-danger" onClick="return rec()">删除</a></td>
					</tr><?php endforeach; endif; ?>
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