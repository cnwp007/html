
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?=base_url().'admin/css/general.css' ?>" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
var noHelp   = "<p align='center' style='color: #666'>暂时还没有该部分内容</p>";
var helpLang = "zh_cn";
//-->
</script>

<style type="text/css">
.article_menu {
	margin: 0;
	padding: 0;
}
.article_menu UL {
	WIDTH: 100%;
	margin: 0;
	padding: 0;
}
.article_menu LI {
	LIST-STYLE-TYPE: none;
	TEXT-ALIGN: left;
}
.article_menu LI.menu {
	PADDING-RIGHT: 0px;
	PADDING-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	WIDTH: 100%;
	PADDING-TOP: 0px
}
.article_menu LI.button_wu A {
	DISPLAY: block;
	FONT-SIZE: 14px;
	BACKGROUND: url(images/menu_bottom.gif) no-repeat 0px 0px;
	OVERFLOW: hidden;
	WIDTH: 100%;
	TEXT-INDENT: 35px;	
	LINE-HEIGHT: 35px;
	POSITION: relative;
	HEIGHT: 35px;
}
.article_menu LI.button_wu A SPAN {
	RIGHT: 5px;
	BACKGROUND: url(images/help_menu-b5.gif) no-repeat;
	WIDTH: 16px;
	float: right;
	TOP: 15px;
	HEIGHT: 16px
}
.article_menu LI.button {}
.article_menu LI.button A {
	BACKGROUND: url(images/menu_bottom.gif) #e6e6e6 no-repeat center 44px;
	DISPLAY: block;
	FONT-SIZE: 14px;
	OVERFLOW: hidden;
	WIDTH: 100%;
	TEXT-INDENT: 45px;
	LINE-HEIGHT: 45px;
	POSITION: relative;
	HEIGHT: 45px;
}
.article_menu LI.button A em {
	background: url(images/allico.png) no-repeat;
	background-position: 18px -528px;
	POSITION: absolute;
	top: 5px;
	left: 0px;
	width: 45px;
	height: 45px
}
.article_menu LI.button a em#h1_02_cat_and_goods {
	background-position: 18px -3px;
}
.article_menu LI.button a em#h1_03_promotion {
	background-position: 18px -40px;
}
.article_menu LI.button a em#h1_04_order {
	background-position: 18px -82px;
}
.article_menu LI.button a em#h1_05_banner {
	background-position: 18px -120px;
}
.article_menu LI.button a em#h1_06_stats {
	background-position: 18px -160px;
}
.article_menu LI.button a em#h1_07_content {
	background-position: 18px -200px;
}
.article_menu LI.button a em#h1_08_members {
	background-position: 18px -242px;
}
.article_menu LI.button a em#h1_10_priv_admin {
	background-position: 18px -276px;
}
.article_menu LI.button a em#h1_11_system {
	background-position: 18px -313px;
}
.article_menu LI.button a em#h1_12_template {
	background-position: 18px -352px;
}
.article_menu LI.button a em#h1_13_backup {
	background-position: 18px -387px;
}
.article_menu LI.button a em#h1_14_sms {
	background-position: 18px -424px;
}
.article_menu LI.button a em#h1_15_rec {
	background-position: 18px -458px;
}
.article_menu LI.button a em#h1_16_email_manage {
	background-position: 18px -493px;
}
.article_menu LI.button A:hover {
	TEXT-DECORATION: none
}
.article_menu LI.button A SPAN {
	RIGHT: 5px;
	BACKGROUND: url(images/help_menu-plus.gif) no-repeat;
	WIDTH: 16px;
	POSITION: absolute;
	TOP: 20px;
	HEIGHT: 16px
}
.article_menu LI.button A SPAN.add {
	RIGHT: 5px;
	BACKGROUND: url(images/help_menu-b5.gif) no-repeat;
	WIDTH: 16px;
	POSITION: absolute;
	TOP: 15px;
	HEIGHT: 16px
}
#menu-ul-suo{
	BACKGROUND:url(images/show_right.gif) no-repeat left top;
	width: 37px;
	height: 490px;
	display: none;
	float: left;
}
.dropdown {
	DISPLAY: none;
	width: 100%;
}
.dropdown LI {
	DISPLAY: block;
	PADDING-LEFT: 55px;
	BACKGROUND: url(images/menu_arrow.gif) no-repeat 0px center;
	COLOR: #666;
	LINE-HEIGHT: 30px;
	BORDER-BOTTOM: #f2f2f2 1px solid;
	HEIGHT: 30px;
}
.article_menu P {
	PADDING-RIGHT: 10px;
	PADDING-LEFT: 10px;
	PADDING-BOTTOM: 10px;
	PADDING-TOP: 10px;
	TEXT-ALIGN: center
}
</style>

<script type="text/javascript" src="<?=base_url().'admin/js/jquery.min.js'
?>"></script><script type="text/javascript"
src="<?=base_url().'admin/js/jquery.easing.1.3.js'
?>"></script><script type="text/javascript"
src="<?=base_url().'admin/js/helpmenu.js'
?>"></script><script> function showmenu() {   frmBody =
parent.document.getElementById('frame-body');   imgArrow =
parent.drag_frame.document.getElementById('img');
  
    frmBody.cols="195, 12, *";
    imgArrow.src = "images/arrow_left.gif";
	parent.menu_frame.document.getElementById('menu-ul').style.display="block";
	document.getElementById('menu-ul-suo').style.display="none";
}
</script>
</head>
<body>
<div id="menu-list" class="article_menu">
<ul id="menu-ul" class="container">
<li class=menu>
<ul>
  <li class=button  key="02_cat_and_goods" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_02_cat_and_goods"></em>商品管理<SPAN id="fa_02_cat_and_goods"></SPAN></A></li>
  <li  class="dropdown" id="02_cat_and_goods">
         <ul>
          <li><a href="<?=site_url('admin/goodsList') ?>" target="main_frame">商品列表</a></li>
          <li><a href="goods.php?act=add" target="main_frame">添加新商品</a></li>
          <li><a href="category.php?act=list" target="main_frame">商品分类</a></li>
          <li><a href="comment_manage.php?act=list" target="main_frame">用户评论</a></li>
          <li><a href="brand.php?act=list" target="main_frame">商品品牌</a></li>
          <li><a href="goods_type.php?act=manage" target="main_frame">商品类型</a></li>
          <li><a href="goods.php?act=trash" target="main_frame">商品回收站</a></li>
          <li><a href="picture_batch.php" target="main_frame">图片批量处理</a></li>
          <li><a href="goods_batch.php?act=add" target="main_frame">商品批量上传</a></li>
          <li><a href="goods_export.php?act=goods_export" target="main_frame">商品批量导出</a></li>
          <li><a href="goods_batch.php?act=select" target="main_frame">商品批量修改</a></li>
          <li><a href="gen_goods_script.php?act=setup" target="main_frame">生成商品代码</a></li>
          <li><a href="tag_manage.php?act=list" target="main_frame">标签管理</a></li>
          <li><a href="goods.php?act=list&extension_code=virtual_card" target="main_frame">虚拟商品列表</a></li>
          <li><a href="goods.php?act=add&extension_code=virtual_card" target="main_frame">添加虚拟商品</a></li>
          <li><a href="virtual_card.php?act=change" target="main_frame">更改加密串</a></li>
          <li><a href="goods_auto.php?act=list" target="main_frame">商品自动上下架</a></li>
        </ul>
      </li>
  <li class=button  key="03_promotion" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_03_promotion"></em>促销管理<SPAN id="fa_03_promotion"></SPAN></A></li>
  <li  class="dropdown" id="03_promotion">
         <ul>
          <li><a href="snatch.php?act=list" target="main_frame">夺宝奇兵</a></li>
          <li><a href="bonus.php?act=list" target="main_frame">红包类型</a></li>
          <li><a href="pack.php?act=list" target="main_frame">商品包装</a></li>
          <li><a href="card.php?act=list" target="main_frame">祝福贺卡</a></li>
          <li><a href="group_buy.php?act=list" target="main_frame">团购活动</a></li>
          <li><a href="topic.php?act=list" target="main_frame">专题管理</a></li>
          <li><a href="auction.php?act=list" target="main_frame">拍卖活动</a></li>
          <li><a href="favourable.php?act=list" target="main_frame">优惠活动</a></li>
          <li><a href="wholesale.php?act=list" target="main_frame">批发管理</a></li>
          <li><a href="package.php?act=list" target="main_frame">超值礼包</a></li>
          <li><a href="exchange_goods.php?act=list" target="main_frame">积分商城商品</a></li>
        </ul>
      </li>
  <li class=button  key="04_order" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_04_order"></em>订单管理<SPAN id="fa_04_order"></SPAN></A></li>
  <li  class="dropdown" id="04_order">
         <ul>
          <li><a href="order.php?act=list" target="main_frame">订单列表</a></li>
          <li><a href="order.php?act=order_query" target="main_frame">订单查询</a></li>
          <li><a href="order.php?act=merge" target="main_frame">合并订单</a></li>
          <li><a href="order.php?act=templates" target="main_frame">订单打印</a></li>
          <li><a href="goods_booking.php?act=list_all" target="main_frame">缺货登记</a></li>
          <li><a href="order.php?act=add" target="main_frame">添加订单</a></li>
          <li><a href="order.php?act=delivery_list" target="main_frame">发货单列表</a></li>
          <li><a href="order.php?act=back_list" target="main_frame">退货单列表</a></li>
        </ul>
      </li>
  <li class=button  key="05_banner" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_05_banner"></em>广告管理<SPAN id="fa_05_banner"></SPAN></A></li>
  <li  class="dropdown" id="05_banner">
         <ul>
          <li><a href="ads.php?act=list" target="main_frame">广告列表</a></li>
          <li><a href="ad_position.php?act=list" target="main_frame">广告位置</a></li>
        </ul>
      </li>
  <li class=button  key="06_stats" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_06_stats"></em>报表统计<SPAN id="fa_06_stats"></SPAN></A></li>
  <li  class="dropdown" id="06_stats">
         <ul>
          <li><a href="flow_stats.php?act=view" target="main_frame">流量分析</a></li>
          <li><a href="guest_stats.php?act=list" target="main_frame">客户统计</a></li>
          <li><a href="order_stats.php?act=list" target="main_frame">订单统计</a></li>
          <li><a href="sale_general.php?act=list" target="main_frame">销售概况</a></li>
          <li><a href="users_order.php?act=order_num" target="main_frame">会员排行</a></li>
          <li><a href="sale_list.php?act=list" target="main_frame">销售明细</a></li>
          <li><a href="searchengine_stats.php?act=view" target="main_frame">搜索引擎</a></li>
          <li><a href="sale_order.php?act=goods_num" target="main_frame">销售排行</a></li>
          <li><a href="visit_sold.php?act=list" target="main_frame">访问购买率</a></li>
          <li><a href="adsense.php?act=list" target="main_frame">站外投放JS</a></li>
        </ul>
      </li>
  <li class=button  key="07_content" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_07_content"></em>文章管理<SPAN id="fa_07_content"></SPAN></A></li>
  <li  class="dropdown" id="07_content">
         <ul>
          <li><a href="articlecat.php?act=list" target="main_frame">文章分类</a></li>
          <li><a href="article.php?act=list" target="main_frame">文章列表</a></li>
          <li><a href="article_auto.php?act=list" target="main_frame">文章自动发布</a></li>
          <li><a href="vote.php?act=list" target="main_frame">在线调查</a></li>
        </ul>
      </li>
  <li class=button  key="08_members" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_08_members"></em>会员管理<SPAN id="fa_08_members"></SPAN></A></li>
  <li  class="dropdown" id="08_members">
         <ul>
          <li><a href="users.php?act=list" target="main_frame">会员列表</a></li>
          <li><a href="users.php?act=add" target="main_frame">添加会员</a></li>
          <li><a href="user_rank.php?act=list" target="main_frame">会员等级</a></li>
          <li><a href="integrate.php?act=list" target="main_frame">会员整合</a></li>
          <li><a href="user_msg.php?act=list_all" target="main_frame">会员留言</a></li>
          <li><a href="user_account.php?act=list" target="main_frame">充值和提现申请</a></li>
          <li><a href="user_account_manage.php?act=list" target="main_frame">资金管理</a></li>
        </ul>
      </li>
  <li class=button  key="10_priv_admin" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_10_priv_admin"></em>权限管理<SPAN id="fa_10_priv_admin"></SPAN></A></li>
  <li  class="dropdown" id="10_priv_admin">
         <ul>
          <li><a href="privilege.php?act=list" target="main_frame">管理员列表</a></li>
          <li><a href="admin_logs.php?act=list" target="main_frame">管理员日志</a></li>
          <li><a href="role.php?act=list" target="main_frame">角色管理</a></li>
          <li><a href="agency.php?act=list" target="main_frame">办事处列表</a></li>
          <li><a href="suppliers.php?act=list" target="main_frame">供货商列表</a></li>
        </ul>
      </li>
  <li class=button  key="11_system" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_11_system"></em>系统设置<SPAN id="fa_11_system"></SPAN></A></li>
  <li  class="dropdown" id="11_system">
         <ul>
          <li><a href="shop_config.php?act=list_edit" target="main_frame">商店设置</a></li>
          <li><a href="reg_fields.php?act=list" target="main_frame">会员注册项设置</a></li>
          <li><a href="payment.php?act=list" target="main_frame">支付方式</a></li>
          <li><a href="shipping.php?act=list" target="main_frame">配送方式</a></li>
          <li><a href="shop_config.php?act=mail_settings" target="main_frame">邮件服务器设置</a></li>
          <li><a href="area_manage.php?act=list" target="main_frame">地区列表</a></li>
          <li><a href="cron.php?act=list" target="main_frame">计划任务</a></li>
          <li><a href="friend_link.php?act=list" target="main_frame">友情链接</a></li>
          <li><a href="captcha_manage.php?act=main" target="main_frame">验证码管理</a></li>
          <li><a href="check_file_priv.php?act=check" target="main_frame">文件权限检测</a></li>
          <li><a href="filecheck.php" target="main_frame">文件校验</a></li>
          <li><a href="flashplay.php?act=list" target="main_frame">首页主广告管理</a></li>
          <li><a href="navigator.php?act=list" target="main_frame">自定义导航栏</a></li>
          <li><a href="license.php?act=list_edit" target="main_frame">授权证书</a></li>
          <li><a href="sitemap.php" target="main_frame">站点地图</a></li>
        </ul>
      </li>
  <li class=button  key="12_template" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_12_template"></em>模板管理<SPAN id="fa_12_template"></SPAN></A></li>
  <li  class="dropdown" id="12_template">
         <ul>
          <li><a href="template.php?act=list" target="main_frame">模板选择</a></li>
          <li><a href="template.php?act=setup" target="main_frame">设置模板</a></li>
          <li><a href="template.php?act=library" target="main_frame">库项目管理</a></li>
          <li><a href="edit_languages.php?act=list" target="main_frame">语言项编辑</a></li>
          <li><a href="template.php?act=backup_setting" target="main_frame">模板设置备份</a></li>
          <li><a href="mail_template.php?act=list" target="main_frame">邮件模板</a></li>
        </ul>
      </li>
  <li class=button  key="13_backup" name="menu">
  <A  href="javascript:void(0);" ><em  id="h1_13_backup"></em>数据库管理<SPAN id="fa_13_backup"></SPAN></A></li>
  <li  class="dropdown" id="13_backup">
         <ul>
          <li><a href="database.php?act=backup" target="main_frame">数据备份</a></li>
          <li><a href="database.php?act=optimize" target="main_frame">数据表优化</a></li>
          <li><a href="sql.php?act=main" target="main_frame">SQL查询</a></li>
          <li><a href="convert.php?act=main" target="main_frame">转换数据</a></li>
        </ul>
      </li>
  <li class=button  key="14_school" name="menu">
  <A  href="javascript:void(0);" style="color:#FA841E"><em  id="h1_14_school"></em>商之翼学院<SPAN id="fa_14_school"></SPAN></A></li>
  <li  class="dropdown" id="14_school">
         <ul>
          <li><a href="http://www.68ecshop.com/study/index.htm" target="_blank">ECShop在线手册</a></li>
          <li><a href="http://www.68ecshop.com/article_cat-26.html" target="_blank">ECShop视频教程</a></li>
          <li><a href="http://www.68ecshop.com/article_cat-31.html" target="_blank">ECShop安装使用</a></li>
          <li><a href="http://bbs.68ecshop.com/forum.php" target="_blank">ECShop交流论坛</a></li>
        </ul>
      </li>
</ul>
</li>
</ul>
<a href="javascript:void(0)" id="menu-ul-suo" onclick="showmenu()"></a>
</div>
</body>
</html>


