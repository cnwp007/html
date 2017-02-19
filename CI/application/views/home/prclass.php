<!DOCTYPE html>

<html style="font-size: 40px;" lang="zh">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">

<title>商品分类 -我的水果</title>

<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">

<meta name="format-detection" content="telephone=no">

<link href="<?=base_url().'home/css/productcategory.css' ?>" rel=" stylesheet">

<script src="<?=base_url().'home/js/jquery.js' ?>"></script>

</head>

<body>

<div id="body">

 <div class="touchweb_header" style="height: 2.2rem;

background-color: #43CB9D;

color: #fff;">

 <a class="hd_left hd_back" ><i class="iconfont" ><img src="<?=base_url().'home/images/back1.jpg' ?>"  style="width:1.7rem"></i></a>

  <div class="hd_title hd_search"  style="background-color: #2F9D78;"> <span><i class="icon iconfont"><img src="<?=base_url().'home/images/soc.jpg' ?>"  style="width:80%; margin-top:7%;"></i></span>

    <input placeholder="查找您喜欢的水果.." id="ckSearch" type="text"  style="padding: 0; height: 1.4rem;

width: 10.5rem;

float: left;

border-radius: 0rem 0.2rem 0.2rem 0rem;

font-size: 0.6rem;

background-color: #2F9D78;

color: #fff;">

  </div>

</div>

 

 



<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height:2.5rem">

  <tr>

    <td>&nbsp;</td>



  </tr>

</table>





  

   <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=2#dw2')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 测试一个分类</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=1#dw1')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 111</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=3#dw3')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 333</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=4#dw4')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 444</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=5#dw5')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 555</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=6#dw6')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 666</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=7#dw7')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 777</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom: 1px solid #e1e1e1; background-color:#FFFFFF " onClick="goty('prlist?id=8#dw8')">

    <tr>

      <td width="96%" height="52" style="padding-left:0.5rem; color:#666666; font-size:0.7rem"> 888</td>

      <td width="4%" align="right" style="padding-right:0.3rem"><img src="<?=base_url().'home/images/icon-ps.png' ?>"></td>

    </tr>

  </table>

      		

		

   

</div>

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

$(function(){ 

$("#ckSearch").click(function(){ 

 $(".search_page").show();

}); 

$(".fan").click(function(){ 

 $(".search_page").hide();

}); 



$("#search_product").click(function(){ 







window.location.href="prlist?key="+document.getElementById("search_text").value ; 

}); 





}); 



function goty(c){

window.location.href=c; 

}



//document.getElementById("zhh"). innerHTML ='';

</script>

<div class="search_page">

  <div class="touchweb_header"  style="background-color: #43CB9D;"><a class="hd_left hd_back search_width" id="search_back"><i class="iconfont"> <img src="<?=base_url().'home/images/back.jpg' ?>" style="margin-top:21%; width:80%; margin-right:15%" class="fan"> </i></a>

    <div class="hd_title hd_search" style="background-color: #2F9D78;" ><span><i class="icon iconfont" ><img src="<?=base_url().'home/images/soc.jpg' ?>"  style="width:80%; margin-top:7%; height:76%; "></i></span>

      <input placeholder="查找您喜欢的水果.." id="search_text" type="text" name="key" style="

background-color: #2F9D78;">

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

