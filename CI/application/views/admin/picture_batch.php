
<!-- $Id: goods_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - 商品列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?=base_url().'admin/css/general.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url().'admin/css/main.css' ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url().'admin/js/transport.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/common.js' ?>"></script>
</head>
<body>

<h1>
<span class="action-span"><a href="<?=site_url('admin/goodsList/add') ?>">添加新商品</a></span>
<span class="action-span1"><a href="index.php?act=main">管理中心</a> </span><span id="search_id" class="action-span1"> - 图片处理 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="<?=base_url().'admin/js/utils.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/listtable.js' ?>"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="" name="searchForm" method="post">
    <img src="<?=base_url().'admin/images/icon_search.gif' ?>" width="26" height="22" border="0" alt="SEARCH" />
        <!-- 分类 -->
    <select name="goodsStyle">
      <option value="0">所有款式</option>
      <?php foreach ($goodsStyleList as $key => $value): ?>
        <option value="<?=$value['id'] ?>" <?php if($search['goodsStyle']==$value['id']){ echo 'selected';} ?> ><?=$value['goodsStyleName'] ?></option>
      <?php endforeach ?>
    </select>

    <select name="goodsColor">
      <option value="">所有颜色</option>
      <?php foreach ($goodsColorList as $key => $value): ?>
        <option value="<?=$value['goodsColorName'] ?>" <?php if($search['goodsColor']==$value['goodsColorName']){ echo 'selected';} ?> ><?=$value['goodsColorName'] ?></option>
      <?php endforeach ?>
    </select>

    <select name="goodsSize">
      <option value="">所有号码</option>
      <?php foreach ($goodsSizeList as $key => $value): ?>
        <option value="<?=$value['goodsSizeName'] ?>" <?php if($search['goodsSize']==$value['goodsSizeName']){ echo 'selected';} ?> ><?=$value['goodsSizeName'] ?></option>
      <?php endforeach ?>
    </select>

      <!-- 上架 -->
      <select name="isOnSale">
      <option value='' <?php if($search['isOnSale']===''){ echo 'selected';} ?> >是否上架</option>
      <option value="1" <?php if($search['isOnSale']==='1'){ echo 'selected';} ?> >上架</option>
      <option value="0" <?php if($search['isOnSale']==='0'){ echo 'selected';} ?> >下架</option></select>

      <select name="isNew">
        <option value='' <?php if($search['isNew']===''){ echo 'selected';} ?> >是否新品</option>
        <option value="1" <?php if($search['isNew']==='1'){ echo 'selected';} ?> >新品</option>
        <option value="0" <?php if($search['isNew']==='0'){ echo 'selected';} ?> >非新品</option>
      </select>

      <select name="isHot">
        <option value='' <?php if($search['isHot']===''){ echo 'selected';} ?> >是否热销</option>
        <option value="1" <?php if($search['isHot']==='1'){ echo 'selected';} ?> >热销</option>
        <option value="0" <?php if($search['isHot']==='0'){ echo 'selected';} ?> >非热销</option>
      </select>
        <!-- 关键字 -->
    商品名称 <input type="text" name="goodsName" size="15" value="<?=isset($search['goodsName'])?$search['goodsName']:''  ?>" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>


<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
<!-- start goods list -->
 <div class="bg bor3 mod-album js-album-item js-album-transition" data-allowaccess="1" data-anonymity="0" data-bitmap="11000000" data-classid="106" data-comment="0" data-createtime="1339145027" data-desc="" data-handset="11" data-id="V1024pRt4TSYT8" data-lastuploadtime="1339145029" data-modifytime="1364611003" data-name="微博相册" data-order="0" data-pre="http://b98.photo.store.qq.com/psb?/V1024pRt4TSYT8/jf1tH.cVYbaLQfeaxjCRkGtHdA1u39LxsLsDsJtXO3o!/a/YbHhdTp0dgAAYva8bzoNdwAA" data-priv="3" data-pypriv="3" data-total="1" data-viewtype="0" data-autoxss="true" aorder="0" style="width:150px;top:0px;left:0px;">
  <div class="album-bd js-album-item-imgBox" style="height:142px;">
   <a href="javascript:;" class="album-cover js-album-cover" data-hottag="list.albumcover">
    <img class="js-cover-img" src="http://b98.photo.store.qq.com/psb?/V1024pRt4TSYT8/jf1tH.cVYbaLQfeaxjCRkGtHdA1u39LxsLsDsJtXO3o!/m/YbHhdTp0dgAAYva8bzoNdwAA&amp;rf=albumlist&amp;t=5" onload="this.onload=null;preLoadNoScale(this,'http://b98.photo.store.qq.com/psb?/V1024pRt4TSYT8/jf1tH.cVYbaLQfeaxjCRkGtHdA1u39LxsLsDsJtXO3o!/m/YbHhdTp0dgAAYva8bzoNdwAA',150,142);" style="width: 222.467px; height: 142px; margin-top: 0px; margin-left: -36px;">
    <span class="pic-num-wrap"><span class="pic-num">1</span></span>   </a>   <div class="js-mod-photo-op mod-photo-op">
    <span class="photo-op-tip js-album-op-tip" style="display: none;" title="编辑或删除"><i class="icon-m icon-expansion-m"></i></span>
    <div class="photo-op-list js-album-op-list" style="display: none;">
     <ul>
      <li>
       <a href="javascript:;" class="js-album-modify" data-hottag="list.edit_bianjixiangce"><i class="icon-m icon-edit-m"></i>编辑</a>
      </li>
      <li>
       <a href="javascript:;" class="js-album-setLimit" data-hottag="list.edit_setpriv"><i class="icon-m icon-limitop-m"></i>权限设置</a>
      </li>
      <li>
       <a href="javascript:;" class="js-album-makeCover" data-hottag="list.zzfm"><i class="icon-m icon-cover-m"></i>制作封面</a>
      </li>
      <li>
       <a href="javascript:;" class="js-album-delete" data-hottag="list.edit_deletalbum"><i class="icon-m icon-rubbish-m"></i>删除</a>
      </li>
     </ul>
    </div>
   </div>
  </div>
  <div class="album-ft">
   <div class="album-desc  album-has-limit">    <div class="album-desc-side js-album-setLimit" data-hottag="list.icon_setpriv"><i class="icon-m icon-private-m" title="仅自己可见"></i></div>    <div class="album-tit"><a href="javascript:;" class="c-tx2 js-album-desc-a" title="微博相册" data-hottag="list.albumtitle">微博相册</a></div>
   </div>
  </div><div class="download-tips">
 <span class="download-count-bg"></span>
 <span class="download-photo-bg"></span>
 <p class="download-count">排队中</p>
 <span class="download-speed"></span>
</div> </div>
<!-- end goods list -->
<div align="right" nowrap="true" style="width:90%;"><?=$pageStr ?></div> 

</div>

</form>

<script type="text/javascript">
  listTable.recordCount = 22;
  listTable.pageCount = 2;

    listTable.filter.cat_id = '0';
    listTable.filter.intro_type = '';
    listTable.filter.is_promote = '0';
    listTable.filter.stock_warning = '0';
    listTable.filter.brand_id = '0';
    listTable.filter.keyword = '';
    listTable.filter.suppliers_id = '';
    listTable.filter.is_on_sale = '';
    listTable.filter.sort_by = 'goods_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.extension_code = '';
    listTable.filter.is_delete = '0';
    listTable.filter.real_goods = '1';
    listTable.filter.record_count = '22';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '2';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
    startCheckOrder(); // 开始检查订单
    document.forms['listForm'].reset();
  }

  /**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }

  function changeAction()
  {
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';
			
			      frm.elements['suppliers_id'].style.display = frm.elements['type'].value == 'suppliers_move_to' ? '' : 'none';
			
      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

</script>
<script>
// document.write('<img class=topicwidth width="' + topic_width + '" height="' + topic_height + '" border="0" src="../' + img_url + '">');
</script>
<div id="footer">
版权所有
</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

<!--
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="<?=base_url().'admin/images/online.swf' ?>">
  <param name="quality" value="high">
  <embed src="<?=base_url().'admin/images/online.swf' ?>" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background: #278296;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>
</body>
</html>