<!DOCTYPE html>

<html style="font-size: 40px;" lang="zh">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">

<title>商品详情 -我的水果</title>

<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">

<meta name="format-detection" content="telephone=no">

<link href="<?=base_url().'home/css/productdetailc.css' ?>" rel=" stylesheet">

<link href="<?=base_url().'home/css/productdetail.css' ?>" rel=" stylesheet">

<link href="<?=base_url().'home/css/islider.css' ?>" rel=" stylesheet">

<script src="<?=base_url().'home/js/jquery.js' ?>"></script>

</head>

<body>



<div style="display: none;" class="touchweb_mask">

  <div class="confirm" style="border-top: .2rem solid #2F9D78;">

    <div class="confirm_content">添加购物车成功！</div>

    <div class="confirm_buttom"><a class="confirmclick" style="color: #2F9D78;">继续购物</a><a class="cancelclick">去购物车</a></div>

  </div>

</div>

<div style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;" id="nTalk_post_hiddenElement"></div>

<div id="body">

<input name="name" id="SkuId" value="1" type="hidden">

<div style="top: 0px; z-index: 1000;background-color: #43CB9D;" class="touchweb_header"> <a class="hd_left hd_back"><i class="iconfonty"><img src="<?=base_url().'home/images/back1.jpg' ?>"  style="width:1.6rem"></i></a>

  <div class="hd_title hd_search" style="background-color: #2F9D78;"> <span><i class="icon iconfont"><img src="<?=base_url().'home/images/soc.jpg' ?>"  style="width:80%; margin-top:7%;"></i></span>

    <input placeholder="查找您喜欢的水果.." id="ckSearch" type="text" style="background-color: #2F9D78;">

  </div>

  <div class="hd_right" id="cart_num">

    <div class="cart"> <img src="<?=base_url().'home/images/d_cart.png' ?>"><span class="number"> 0</span> </div>

  </div>

</div>

<link rel="stylesheet" type="text/css" href="<?=base_url().'home/css/swiper.css' ?>">

<div id="iSlider-wrapper">

  <div class="scroll-box">

    <div style="cursor: grab;" class="swiper-container swiper-container-horizontal">

      <div style="transition-duration: 0ms; transform: translate3d(-1280px, 0px, 0px);" class="swiper-wrapper">

        <div style="width: 640px;" data-swiper-slide-index="0" class="swiper-slide swiper-slide-duplicate"> <img class="scroll-img" src="<?=base_url().'home/images/app161122010052.jpg' ?>" style="width:100%; height:14rem"> </div>

        <div style="width: 640px;" data-swiper-slide-index="0" class="swiper-slide swiper-slide-prev"> <img class="scroll-img" src="<?=base_url().'home/images/app161122010052.jpg' ?>" style="width:100%; height:14rem"> </div>

                <div style="width: 640px;" data-swiper-slide-index="0" class="swiper-slide swiper-slide-prev"> <img class="scroll-img" src="<?=base_url().'home/images/app161122010105.jpg' ?>" style="width:100%; height:14rem"> </div>

                        <div style="width: 640px;" data-swiper-slide-index="0" class="swiper-slide swiper-slide-duplicate swiper-slide-active"> <img class="scroll-img" src="<?=base_url().'home/images/app161122010052.jpg' ?>" style="width:100%; height:14rem"> </div>

      </div>

    </div>

    <script src="<?=base_url().'home/js/swiper.js' ?>"></script>

    <script>

        var mySwiper = new Swiper('.swiper-container', {

            pagination: '.swiper-pagination',

            loop: true,

            grabCursor: true,

            paginationClickable: true

        })

		

		

		 function tt(idd){

			 window.location.href="prshow?id="+idd; 

			}

		

    </script>

  </div>

</div>

<div class="touchweb_content">

  <div class="productInfo">

    <div class="p_price"> <span class="em_price">¥<em>500.00 </em></span> </div>

    <div class="p_name"> 好吃的青苹果营养丰富阳光充足</div>

    <div class="p_tip">甘肃大山的美味</div>

    <div class="time_count" data-prostate="0" data-protime="0"> </div>

  </div>

</div>

<div class="specifications">

  <div class="sf_item">

    

    <span class="title_span">颜色</span>

    <div class="sf_lab">

     

	 	 

      <span class="lable_sp" >

      <cc  style="display:none">1</cc>

      <input id="specCK10000" data-spec="" name="ckSpec" checked="checked" type="radio">

      <label for="specCK10000" style="background-color:#FF6600" > <em style="color:#FFFFFF">红色</em>

            <i class="icon iconfont" style="display:block"><img src="<?=base_url().'home/images/fanc.png' ?>" ></i>

            </label>

      </span>

      	 

      <span class="lable_sp" >

      <cc  style="display:none">16</cc>

      <input id="specCK10001" data-spec="" name="ckSpec" checked="checked" type="radio">

      <label for="specCK10001"  style="background-color:#ffffff" > <em style="color:#82737A">你才</em>

            </label>

      </span>

      	  

	  

    </div>



    <span class="title_span">

        </span>

    <div class="sf_lab">

           </div>


  </div>

</div>







<div class="product_into">

  <div class="product_info_item">

    <div class="product_info_title"> 商品参数和使用指南</div>

    <div class="product_info_attr" id=suiyue> </div>

    <div class="product_info_desc"> 
    <img src="<?=base_url().'home/images/276133191479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/638307181479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/454484121479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/316480131479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/923762151479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/663124181479790889.jpg' ?>" />
    <img src="<?=base_url().'home/images/163682181479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/756240151479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/670647141479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/834293151479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/496999131479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/999640161479790890.jpg' ?>" />
    <img src="<?=base_url().'home/images/409311161479790890.jpg' ?>" />
    </div>

  </div>

</div>

<div class="add_cart_menu">

  <ul>

    <li>

      <div class="Cservice"> </div>

    </li>

    <li>

      <div class="cart_p_num">

        <div class="cart_input"> <a class="subbtn">-</a>

          <!--

                            data-Max：最大可卖量

                            data-XG：限购

                            data-QS：起售数量

                            -->

          <input id="ProductNum" value="1" data-max="19039" data-xg="0" data-qs="1" data-runnum="1" type="text">

          <a class="addbtn">+</a> </div>

      </div>

    </li>

    <li>

      <!--

                    描述：add_cart_disable 不可点击

                    -->

      <div    class="add_cart" data-position="P_addCart" data-category="C_addCart" data-malltype="1" data-ptype="1" style="background-color: #2F9D78;"> 加入购物车</div>

    </li>

  </ul>

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





$("#cart_num").click(function(){ 

 

window.location.href='cart'; 

 

}); 





$(".lable_sp").click(function(){ 



dadi = $(this).find("cc").html();



window.location.href='prshow?id='+ dadi; 

});







$(".lable_sptt").click(function(){ 



dadiy = $(this).find("zz").html();



window.location.href='prshow?id='+ dadiy; 

});











function goty(c){

window.location.href=c; 

}





$("#search_product").click(function(){ 



window.location.href="prlist?key="+document.getElementById("search_text").value ; 

}); 









$(".iconfonty").click(function(){ 

window.history.go(-1); 

});











$("#ProductNum").on('input',function(e){  

numc = $("#ProductNum").val(); 

$.ajax({                    

    cache: true,

	type: "get",

	url: "cart1?type=zhi&id=1&num="+ numc +"&cfe="+ new Date().getTime(),

	async: false,

	dataType: "json",

	error: function(request) {

	},

	success: function(data) {

	if(data.tt==0){

	$("#ProductNum").val('1');

		alert(data.error);

	}else{

	

	

	$("#ProductNum").val(data.error);

	}

	}

    }); 

	           

});

            

			

       

		



$(".addbtn").click(function(){ 

numc = $("#ProductNum").val(); 

$.ajax({                    

    cache: true,

	type: "get",

	url: "cart1?type=jia&id=1&num="+ numc +"&cfe="+ new Date().getTime(),

	async: false,

	dataType: "json",

	error: function(request) {

	},

	success: function(data) {

	if(data.tt==0){

		alert(data.error);

	}else{

	

	

	$("#ProductNum").val(data.error);

	}

	}

    }); 

});



$(".subbtn").click(function(){ 

numc = $("#ProductNum").val();

if(numc>1){ 

$.ajax({                    

    cache: true,

	type: "get",

	url: "cart1?type=jian&id=1&num="+ numc +"&cfe="+ new Date().getTime(),

	async: false,

	dataType: "json",

	error: function(request) {

	},

	success: function(data) {

	if(data.tt==0){

		alert(data.error);

	}else{

	

	$("#ProductNum").val(data.error);

	}

	

	}

    }); 

}	

});





// 加入购物车

$(".add_cart").click(function(){ 

numc = $("#ProductNum").val(); 

$.ajax({                    

    cache: true,

	type: "get",

	url: "cart1?id=1&num="+ numc +"&cfe="+ new Date().getTime(),

	async: false,

	dataType: "json",

	error: function(request) {

	},

	success: function(data) {

	if(data.tt==0){

		alert(data.error);

	}else{

		

		 $(".touchweb_mask").show();

		

		

	}

		

	}

    }); 



});











$(".confirmclick").click(function(){ 

 $(".touchweb_mask").hide();

}); 



$(".cancelclick").click(function(){ 

window.location.href='cart'; 

}); 











}); 



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

<script>	

		function goty(c){

window.location.href=c; 

}

</script>

</body>

</html>

