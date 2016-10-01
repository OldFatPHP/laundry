<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="__PUBLIC__/js/jquery-2.0.0.min.js"></script>
    <title>选择地址</title>
   

    <style>
        /* 1. General */
        body {
            background-color: #f0f0f0;
            overflow-x: hidden;
            margin: 0px;
            color: #1a1a1a;
            font-family: "Microsoft YaHei", Times, serif;
            text-align: left;
            font-size: 18px;
            line-height:28px;
        }
       
        .add-address {
            background-color: #fff;
            text-align: center;
            height: 40px;
            z-index: 999;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            _position: absolute;
            overflow: visible;
            border-top: 1px solid #E6E6E6;
            padding-top: 8px;
        }
        .bg-div {
            width: 100%;
            background-color: #fff;
            padding: 10px 0;
            margin-bottom: 10px;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
        }
        .left-div {
            width: 65%;
            display: inline-block;
            text-indent:20px;
        }
            .left-div span {
                color: #ff6a00;
                font-size:10px;
                float:left;
            }
            .next-div {
                width: 20%;
                display: inline-block;
            }
             .right-div {
                width: 10%;
                display: inline-block;
            }
        .right-div img{
            width:30px;
        }
    </style>
    <script>
    var morenid = -1;
    $(function () {
        //选择默认地址
        $(".bg-div").on("click", function () {
            $(".bg-div").css('border-bottom', '1px dashed #fff');
            $(".bg-div").css('border-top', '1px dashed #fff');
            $(".bg-div").css('color', 'black');
            $(this).css('border-bottom', '1px dashed #ff6a00');
            $(this).css('border-top', '1px dashed #ff6a00');
            $(this).css('color', '#ff6a00');
            morenid = $(this).find('img').attr('data');
        })
        $(".right-div img").on("click", function () {
            $remove = $(this).parent().parent();
            // alert($(this).attr("data"));
            id = $(this).attr("data");
            $.post("<?php echo U('Home/addressDelete');?>",
                  {
                    data:id                 
                  },
                  function(data){                
                    if(data == 200){
                        alert("删除成功！");
                        $remove.remove();
                        
                    }else{
                        alert("删除失败！请稍后重试");
                    }
                });

        })
    });
    function moren() {
        if(morenid == -1){
            return false;
        }
        var url = "addressChange.html?id=" + morenid ; 
            window.open(encodeURI(url));
    }
    </script>
</head>
<body onload="GetRequest()">
    <div class="mainbody">        
        <?php if(is_array($addressData)): $i = 0; $__LIST__ = $addressData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Vo): $mod = ($i % 2 );++$i;?><div class="bg-div">      
                <div class="left-div">
                   <div><?php echo ($Vo["addressName"]); ?>  <?php echo ($Vo["addressPhone"]); ?></div>
                   <div><?php echo ($Vo["addressDetail"]); ?></div>
                   <input type="hidden" name="id" value="<?php echo ($Vo["addressId"]); ?>">
                </div>
                <div class="next-div"><input type="button"  value="默认地址" onclick="moren()"/></div>
                <div class="right-div">
                  <img src="__PUBLIC__/images/deleteAddress.png" data="<?php echo ($Vo["addressId"]); ?>" /><a href="<?php echo U(GROUP_NAME . '/Home/addressDelete', array('addressId' => $Vo['addressId']));?>"></a>
                </div><br/>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>        
        <!-- <input type="button"  value="默认地址" onclick="moren()"/> -->
        <div id="haha" class="add-address" onclick="window.location.href = '<?php echo U(GROUP_NAME . '/Home/addAddress');?>'">＋添加地址</div>
    </div>
</body>
</html>