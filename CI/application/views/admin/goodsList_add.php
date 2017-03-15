<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - 编辑商品信息 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url().'admin/js/jquery-1.8.3.min.js' ?>"></script>
<link href="<?=base_url().'admin/css/general.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url().'admin/css/main.css' ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url().'admin/js/transport.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/common.js' ?>"></script>
</head>
<body>
<script>
  function checkData(){
    if($("#goodsName").val()==''){
      alert('请填写商品名称');
      return false;
    }
    if($("#goodsNum").val()==''){
      alert('请填写商品货号');
      return false;
    }
    if($("#goodsStyle").val()==''){
      alert('请选择商品款式');
      return false;
    }
    if($("#goodsPrice").val()==''){
      alert('请填写商品价格');
      return false;
    }
    if($("#goodsColor").val()==''){
      alert('请选择商品颜色');
      return false;
    }
    if($("#goodsSize").val()==''){
      alert('请选择商品尺码');
      return false;
    }
    $("#theForm").submit();
  }
</script>


<script>
  $(window).on('load', function () {
  $('.selectpicker').selectpicker({
    'selectedText': 'cat'
  });
  $('input[name!="salerteamid"]').css('display','inline');
});
</script>
<h1>
<span class="action-span"><a href="goods.php?act=list&uselastfilter=1">商品列表</a></span>
<span class="action-span1"><a href="index.php?act=main">  管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑商品信息 </span>
<div style="clear:both"></div>
</h1>
<link href="<?=base_url().'admin/css/calendar.css' ?>" rel="stylesheet" type="text/css" />


<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
<!--     <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span>
        <span class="tab-back" id="properties-tab">商品属性</span>
        <span class="tab-back" id="gallery-tab">商品相册</span>
      </p>
    </div> -->

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" id="theForm" name="theForm" >
        <!-- 最大文件限制 -->
        <input type="hidden" name="save" value="save" />
        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">商品名称：</td>
            <td>
            <input type="text" id="goodsName" name="goodsName" value="我在这" style="float:left;color:;" size="20" />
            <span class="require-field">*</span>
            </td>
          </tr>
          <tr>
            <td class="label">商品货号： </td>
            <td><input type="text" id="goodsNum" name="goodsNum" size="20" /><span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">商品款式：</td>
            <td>
            <select id="goodsStyle" name="goodsStyle" onchange="hideCatDiv()" class="selectpicker show-tick form-control" multiple data-live-search="false" >
              <option value="">请选择...</option>
              <option value="21" >客餐厅</option>
              <option value="21" >客餐厅1</option>
              <option value="21" >客餐厅2</option>
              <option value="21" >客餐厅3</option>
              <option value="21" >客餐厅4</option>
              <option value="21" >客餐厅5</option>
              <option value="21" >客餐厅6</option>
            </select>
              <a href="javascript:void(0)" onclick="rapidCatAdd()" title="添加分类" class="special">添加款式</a>
              <span id="category_add" style="display:none;">
              <input class="text" size="10" name="addedCategoryName" />
               <a href="javascript:void(0)" onclick="addCategory()" title=" 确定 " class="special" > 确定 </a>
               <a href="javascript:void(0)" onclick="hideCatDiv()" title="隐藏" class="special" ><<</a>
               </span>
                              <span class="require-field">*</span>            </td>
          </tr>
          <tr>
            <td class="label">商品价格：</td>
            <td><input type="text" id="goodsPrice" name="goodsPrice" size="20" onblur="priceSetted()"/>
            <span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">商品颜色：</td>
            <td>

            <span class="require-field">(可多选)*</span></td>
          </tr>
          <tr>
            <td class="label">商品尺码：</td>
            <td><input type="text" id="goodsSize" name="goodsSize" size="20" onblur="priceSetted()"/>
            <span class="require-field">(可多选)*</span></td>
          </tr>
</table>
       
      </form>
    </div>
</div>
<!-- end goods form -->


 <div class="button-div">
                    <input type="button" value=" 确定 " class="button" onclick="checkData()" />
          <!-- <input type="reset" value=" 重置 " class="button" /> -->
        </div>
<!-- 新订单提示信息 -->

</body>
</html>