<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - 编辑商品信息 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?=base_url().'admin/css/general.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url().'admin/css/main.css' ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url().'admin/js/transport.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/common.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/jquery.min.js' ?>"></script>
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
    if($("#goodsColor").val()==null){
      alert('请选择商品有几种颜色');
      return false;
    }
    if($("#goodsSize").val()==null){
      alert('请选择商品有几种尺码');
      return false;
    }
    if($("#isNew").val()==''){
      alert('请选择是否新品');
      return false;
    }
    if($("#isHot").val()==''){
      alert('请选择是否热销');
      return false;
    }
    $("#theForm").submit();
  }
</script>

<h1>
<span class="action-span"><a href="<?=site_url('admin/goodsList/index') ?>">商品列表</a></span>
<span class="action-span1"><a href="index.php?act=main">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加商品信息 </span>
<div style="clear:both"></div>
</h1>

<div class="tab-div">
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" id="theForm" name="theForm" >
        <!-- 最大文件限制 -->
        <input type="hidden" name="save" value="save" />
        <input type="hidden" name="id" value="<?=isset($view['id'])?$view['id']:'' ?>" />
        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">商品名称：</td>
            <td>
            <input type="text" id="goodsName" name="goodsName" value="<?=isset($view['goodsName'])?$view['goodsName']:''?>" style="float:left;color:;" size="20" />
            <span class="require-field">*</span>
            </td>
          </tr>
          <tr>
            <td class="label">商品货号： </td>
            <td><input type="text" id="goodsNum" name="goodsNum" value="<?=isset($view['goodsNum'])?$view['goodsNum']:''?>" size="20" /><span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">商品款式：</td>
            <td>
            <select id="goodsStyle" name="goodsStyle" onchange="hideCatDiv()" >
              <option value="">请选择...</option>
              <?php foreach ($goodsStyleList as $key => $item): ?> 
                <option value="<?=$item['id'] ?>" <?php if($view['goodsStyle']==$item['id']){ echo 'selected';} ?> ><?=$item['goodsStyleName'] ?></option>
              <?php endforeach ?>
            </select>

              <span class="require-field">*</span>
            </td>
          </tr>
          <tr>
            <td class="label">商品价格：</td>
            <td><input type="text" id="goodsPrice" name="goodsPrice" size="20" value="<?=isset($view['goodsPrice'])?$view['goodsPrice']:''?>" oninput="if(isNaN(this.value)){this.value=''}" maxlength="11" />
            <span class="require-field">元*</span></td>
          </tr>
           <tr>
            <td class="label">商品颜色：</td>
            <td>
             <select id="goodsColor" name="goodsColor[]" onchange="hideCatDiv()" class="selectpicker bla bla bli" multiple data-live-search="true">
              <option value="">请选择...</option>
              <?php foreach ($goodsColorList as $key => $item): ?> 
                <option value="<?=$item['goodsColorName'] ?>" <?php if($view['goodsColor']==$item['id']){ echo 'selected';} ?> ><?=$item['goodsColorName'] ?></option>
              <?php endforeach ?>
            </select>
            <span class="require-field">(可多选)*</span></td>
          </tr>
           <tr>
            <td class="label">商品尺码：</td>
            <td>
             <select id="goodsSize" name="goodsSize[]" onchange="hideCatDiv()" class="selectpicker bla bla bli" multiple data-live-search="true">
              <option value="">请选择...</option>
              <?php foreach ($goodsSizeList as $key => $item): ?> 
                <option value="<?=$item['goodsSizeName'] ?>" <?php if($view['goodsSize']==$item['id']){ echo 'selected';} ?> ><?=$item['goodsSizeName'] ?></option>
              <?php endforeach ?>
            </select>
            <span class="require-field">(可多选)*</span></td>
          </tr>
            <tr>
            <td class="label">新品：</td>
            <td>
              <input type="radio" name="isNew" id="isNew" value="0" <?php if($view['isNew']==0){echo 'checked';} ?>/>否
              <input type="radio" name="isNew" id="isNew" value="1" <?php if($view['isNew']=='1'){echo 'checked';} ?> />是
            </td>
          </tr>
           <tr>
            <td class="label">热销：</td>
            <td>
              <input type="radio" name="isHot" id="isHot" value="0" <?php if($view['isHot']==0){echo 'checked';} ?>/>否
              <input type="radio" name="isHot" id="isHot" value="1" <?php if($view['isHot']=='1'){echo 'checked';} ?> />是
            </td>
          </tr>
        </table>
       
      </form>
    </div>
</div>


 <div class="button-div">
      <input type="button" value=" 确定 " class="button" onclick="checkData()" />
    <!-- <input type="reset" value=" 重置 " class="button" /> -->
  </div>
<!-- 新订单提示信息 -->

</body>
</html>