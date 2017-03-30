
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
<span class="action-span1"><a href="index.php?act=main">管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
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
      <option value="0">所有颜色</option>
      <?php foreach ($goodsColorList as $key => $value): ?>
        <option value="<?=$value['id'] ?>" <?php if($search['goodsColor']==$value['id']){ echo 'selected';} ?> ><?=$value['goodsColorName'] ?></option>
      <?php endforeach ?>
    </select>

    <select name="goodsSize">
      <option value="0">所有号码</option>
      <?php foreach ($goodsSizeList as $key => $value): ?>
        <option value="<?=$value['id'] ?>" <?php if($search['goodsSize']==$value['id']){ echo 'selected';} ?> ><?=$value['goodsSizeName'] ?></option>
      <?php endforeach ?>
    </select>

      <!-- 上架 -->
      <select name="isOnSale">
      <option value='' <?php if($search['isOnSale']===''){ echo 'selected';} ?> >是否上架</option>
      <option value="1" <?php if($search['isOnSale']==='1'){ echo 'selected';} ?> >上架</option>
      <option value="0" <?php if($search['isOnSale']==='0'){ echo 'selected';} ?> >下架</option></select>

      <select name="isBest">
        <option value='' <?php if($search['isBest']===''){ echo 'selected';} ?> >是否精品</option>
        <option value="1" <?php if($search['isBest']==='1'){ echo 'selected';} ?> >精品</option>
        <option value="0" <?php if($search['isBest']==='0'){ echo 'selected';} ?> >非精品</option>
      </select>

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
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('goods_id'); ">编号</a><img src="<?=base_url().'admin/images/sort_desc.gif' ?>"/>    </th>
    <th><a href="javascript:listTable.sort('goods_name'); ">商品名称</a></th>
    <th><a href="javascript:listTable.sort('goods_sn'); ">货号</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">价格</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">款式</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">颜色</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">号码</a></th>
    <th><a href="javascript:listTable.sort('is_on_sale'); ">上架</a></th>
    <th><a href="javascript:listTable.sort('is_best'); ">精品</a></th>
    <th><a href="javascript:listTable.sort('is_new'); ">新品</a></th>
    <th><a href="javascript:listTable.sort('is_hot'); ">热销</a></th>
    <th><a href="javascript:listTable.sort('sort_order'); ">推荐排序</a></th>
    <th><a href="javascript:listTable.sort('goods_number'); ">库存</a></th>
        <th>操作</th>

<?php foreach ($view as $key => $value): ?>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="<?=$value['id'] ?>" /><?=$value['id'] ?></td>
    <td class="first-cell" style=""><span><?=$value['goodsName'] ?></span></td>
    <td><span><?=$value['goodsNum'] ?></span></td>
    <td align="right"><span><?=$value['goodsPrice'] ?>
    </span></td>
    <td align="center"><span><?=$value['goodsStyleName'] ?></span></td>
    <td align="center"><span><?=$value['goodsColorName'] ?></span></td>
    <td align="center"><span><?=$value['goodsSizeName'] ?></span></td>
    <td align="center">
    <?php if($value['isOnSale']=='1'){ ?>
      <img src="<?=base_url().'admin/images/yes.gif' ?>" /></td>
    <?php }else{ ?>
      <img src="<?=base_url().'admin/images/no.gif' ?>" /></td>
    <?php } ?>
    <td align="center">
    <?php if($value['isBest']=='1'){ ?>
      <img src="<?=base_url().'admin/images/yes.gif' ?>" /></td>
    <?php }else{ ?>
      <img src="<?=base_url().'admin/images/no.gif' ?>" /></td>
    <?php } ?>
    <td align="center">
    <?php if($value['isNew']=='1'){ ?>
      <img src="<?=base_url().'admin/images/yes.gif' ?>"  /></td>
    <?php }else{ ?>
      <img src="<?=base_url().'admin/images/no.gif' ?>" /></td>
    <?php } ?>
    <td align="center">
    <?php if($value['isHot']=='1'){ ?>
      <img src="<?=base_url().'admin/images/yes.gif' ?>"  /></td>
    <?php }else{ ?>
      <img src="<?=base_url().'admin/images/no.gif' ?>" /></td>
    <?php } ?>
    <td align="center"><span>100</span></td>
        <td align="right"><span>65535</span></td>
        <td align="center">
      <a href="<?=site_url('admin/goodsList/edit'.$item['id']) ?>" title="编辑"><img src="<?=base_url().'admin/images/icon_edit.gif' ?>" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?=$value['id'] ?>, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="<?=base_url().'admin/images/icon_trash.gif' ?>" width="16" height="16" border="0" /></a>
      <img src="<?=base_url().'admin/images/empty.gif' ?>" width="16" height="16" border="0" />          </td> 
  </tr>
<?php endforeach ?>

</table>
<!-- end goods list -->
<div align="right" nowrap="true" style="width:90%;"><?=$pageStr ?></div> 
<!-- 分页 -->
<!-- <table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
            <div id="turn-page">
        总计  <span id="totalRecords">22</span>
        个记录分为 <span id="totalPages">2</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)" />
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value='1'>1</option><option value='2'>2</option>          </select>
        </span>
      </div>
    </td>
  </tr>
</table> -->

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