<!DOCTYPE html>

<html style="font-size: 40px;" lang="zh">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">

<title>购物车 -我的水果</title>

<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">

<meta name="format-detection" content="telephone=no">

<link href="<?=base_url().'home/css/shoppingcart.css' ?>" rel=" stylesheet">

<script src="<?=base_url().'home/js/jquery-3.0.0.js' ?>"></script>

<script src="<?=base_url().'home/js/jquery-006.js' ?>"></script>

</head>

<body class="">

<div id="body">
<div class="touchweb_header" style="background-color: #43CB9D;"> <a class="hd_left hd_back"><i class="iconfont"><img src="<?=base_url().'home/images/back1.jpg' ?>" style="width:1.6rem"></i></a> <span class="hd_title hd_title_style"> 购物车</span>
  <div class="hd_right"> <a class="btn_register">清空</a></div>
</div>
<div class="touchweb_content">
  <input name="selectli" id="shangcheng" checked="checked" type="radio">
  <div class="shangcheng"><div class="activity_box max_box"><div class="label lable_jian">秒</div>
        <div class="lable_remark">
          <div class="label_price"> <span> 已购2件,参加这里是一个秒杀的专场</span><span>￥600.00</span></div>
          <div class="label_miaoshu"> 11月01日  08:33 - 12月21日 21:33</div>
        </div></div><div class="cart_p_info">
    
     <div class="cart_p_img"> <a href="prshow?id=1"><img src="<?=base_url().'home/images/app161122010052.jpg' ?>"></a></div>
        <div class="cart_p_name"> <a href="pr_show.php?id=1">好吃的青苹果营养丰富阳光充足 红色 </a></div>
        <div class="cart_p_num">
          <div class="cart_input"> <a class="sub" data="1">-</a>
            <input disabled="disabled" maxlength="4" value="1" class="pnum" data="1" data-xg="0" data-qs="1" data-sk="74" data-ct="1" data-cid="34965861" data-pid="10664,10677,10892" type="text">
            <a class="add" data="1">+</a>  
      </div>
        </div>
        <div class="cart_p_price"> 
    <div class="edit_box"> <span>￥500.00</span></div>
        </div>
     <font class="delpr" data="1"  style="float:right; margin-top:0.3rem; margin-right:0.4rem; font-size:0.4rem;background-color:#f60;border-radius: 0.1rem; padding-left:0.3rem; padding-right:0.3rem; padding-top:0.1rem; padding-bottom:0.1rem; color:#FFFFFF">删除</font> 
      </div><div class="cart_p_info">
    
     <div class="cart_p_img"> <a href="prshow?id=16"><img src="<?=base_url().'home/images/app161122010052.jpg' ?>"></a></div>
        <div class="cart_p_name"> <a href="pr_show.php?id=16">好吃的青苹果营养丰富阳光充足 你才 </a></div>
        <div class="cart_p_num">
          <div class="cart_input"> <a class="sub" data="16">-</a>
            <input disabled="disabled" maxlength="4" value="1" class="pnum" data="16" data-xg="0" data-qs="1" data-sk="74" data-ct="1" data-cid="34965861" data-pid="10664,10677,10892" type="text">
            <a class="add" data="16">+</a>  
      </div>
        </div>
        <div class="cart_p_price"> 
    <div class="edit_box"> <span>￥100.00</span></div>
        </div>
     <font class="delpr" data="16"  style="float:right; margin-top:0.3rem; margin-right:0.4rem; font-size:0.4rem;background-color:#f60;border-radius: 0.1rem; padding-left:0.3rem; padding-right:0.3rem; padding-top:0.1rem; padding-bottom:0.1rem; color:#FFFFFF">删除</font> 
      </div> <div class="total_box" style="margin-top:11px;">
        <div class="total_content">
          <div class="total_left">
            <p> 总计：<em>￥600.00</em></p>
            <p style="display:none"> 原价：<em>￥675.00</em></p>
          </div>
          <div class="total_right" id="divSettlementn" data-ct="1" data-cid="34965861,34965874,34965868" data-pay="1"> <a>去结算</a> </div>
        </div>
      </div>
    </div>
</div>

<!-- <div class="touchweb_content">
  <input name="selectli" id="shangcheng" checked="checked" type="radio">
  <div class="shangcheng">  <div class="null_img_box"> <img src="<?=base_url().'home/images/null_cart.png' ?>"></div><div class="login_btn min_bottom"> <a class="btn" href="./">去首页看看</a></div></div>
</div> -->

<script type="text/javascript"> 
 (function (doc, win) {
        var docEl = doc.documentElement,
                  resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                  recalc = function () {
                      var clientWidth = docEl.clientWidth;
                      if (!clientWidth) return;
                      if (clientWidth > 640) clientWidth = 640;
                      docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
                  };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);

</script>
<div class="search_page">
  <div class="touchweb_header"><a class="hd_left hd_back search_width" id="search_back"><i class="iconfont"> <img src="<?=base_url().'home/images/back.jpg' ?>" style="margin-top:21%; width:80%; margin-right:15%" class="fan"> </i></a>
    <div class="hd_title hd_search"><span><i class="icon iconfont"><img src="<?=base_url().'home/images/soc.jpg' ?>" style="width:80%; margin-top:7%; height:76%; "></i></span>
      <input placeholder="搜索" id="search_text" type="text">
    </div>
    <div class="hd_right" id="search_product"><a class="hd_btn">搜索</a></div>
  </div>
  <div class="search_list">
    <ul>
    </ul>
  </div>
</div>


</div>


</body>

</html>

