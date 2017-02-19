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

<div class="touchweb_header" style="background-color: #43CB9D;"> <a class="hd_left hd_back"><i class="iconfont"><img src="<?=base_url().'home/images/back1.jpg' ?>"  style="width:1.6rem"></i></a> <span class="hd_title hd_title_style"> 购物车</span>

  <div class="hd_right"> <a class="btn_register">清空</a></div>

</div>

<div class="touchweb_content">

  <input name="selectli" id="shangcheng" checked="checked" type="radio">

  <div class="shangcheng"> </div>

</div>

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

    <div class="hd_title hd_search"><span><i class="icon iconfont" ><img src="<?=base_url().'home/images/soc.jpg' ?>"  style="width:80%; margin-top:7%; height:76%; "></i></span>

      <input placeholder="搜索" id="search_text" type="text">

    </div>

    <div class="hd_right" id="search_product"><a class="hd_btn">搜索</a></div>

  </div>

  <div class="search_list">

    <ul>

    </ul>

  </div>

</div>

</body>

</html>

