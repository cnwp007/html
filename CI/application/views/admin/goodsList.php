
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
<script language="JavaScript">
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="goods.php?act=add">添加新商品</a></span>
<span class="action-span1"><a href="index.php?act=main">管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="<?=base_url().'admin/js/utils.js' ?>"></script>
<script type="text/javascript" src="<?=base_url().'admin/js/listtable.js' ?>"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="<?=base_url().'admin/images/icon_search.gif' ?>" width="26" height="22" border="0" alt="SEARCH" />
        <!-- 分类 -->
    <select name="cat_id"><option value="0">所有分类</option><option value="21" >客餐厅</option><option value="77" >&nbsp;&nbsp;&nbsp;&nbsp;沙发茶几组合</option><option value="74" >&nbsp;&nbsp;&nbsp;&nbsp;餐桌组合</option><option value="33" >&nbsp;&nbsp;&nbsp;&nbsp;餐柜组合</option><option value="78" >&nbsp;&nbsp;&nbsp;&nbsp;吧台组合</option><option value="81" >测试</option></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
    <!-- 推荐 -->
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
         
      <!-- 供货商 -->
      <select name="suppliers_id"><option value="0">全部</option><option value="1">北京供货商</option><option value="2">上海供货商</option></select>
            <!-- 上架 -->
      <select name="is_on_sale"><option value=''>全部</option><option value="1">上架</option><option value="0">下架</option></select>
        <!-- 关键字 -->
    关键字 <input type="text" name="keyword" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>


<script language="JavaScript">
    function searchGoods()
    {

                listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
        listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
        listTable.filter['intro_type'] = document.forms['searchForm'].elements['intro_type'].value;
                    listTable.filter['suppliers_id'] = document.forms['searchForm'].elements['suppliers_id'].value;
                  listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;
        
        listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
        listTable.filter['page'] = 1;

        listTable.loadList();
    }
</script>
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
    <th><a href="javascript:listTable.sort('is_on_sale'); ">上架</a></th>
    <th><a href="javascript:listTable.sort('is_best'); ">精品</a></th>
    <th><a href="javascript:listTable.sort('is_new'); ">新品</a></th>
    <th><a href="javascript:listTable.sort('is_hot'); ">热销</a></th>
    <th><a href="javascript:listTable.sort('sort_order'); ">推荐排序</a></th>
        <th><a href="javascript:listTable.sort('goods_number'); ">库存</a>11</th>
        <th>操作</th>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="34" />34</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 34)">我在这</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 34)">ECS000034</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 34)">0.00
    </span></td>
    <td align="center"><img src="<?=base_url().'admin/images/yes.gif' ?>" onclick="listTable.toggle(this, 'toggle_on_sale', 34)" /></td>
    <td align="center"><img src="<?=base_url().'admin/images/yes.gif' ?>" onclick="listTable.toggle(this, 'toggle_best', 34)" /></td>
    <td align="center"><img src="<?=base_url().'admin/images/no.gif' ?>" onclick="listTable.toggle(this, 'toggle_new', 34)" /></td>
    <td align="center"><img src="<?=base_url().'admin/images/no.gif' ?>" onclick="listTable.toggle(this, 'toggle_hot', 34)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 34)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 34)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=34" target="_blank" title="查看"><img src="<?=base_url().'admin/images/icon_view.gif' ?>" width="16" height="16" border="0" /></a>
      <a href="<?=site_url('admin/goodsList/edit') ?>" title="编辑"><img src="<?=base_url().'admin/images/icon_edit.gif' ?>" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(34, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="<?=base_url().'admin/images/icon_trash.gif' ?>" width="16" height="16" border="0" /></a>
      <img src="<?=base_url().'admin/images/empty.gif' ?>" width="16" height="16" border="0" />          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="33" />33</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 33)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 33)">ECS000033</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 33)">0.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 33)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 33)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_new', 33)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 33)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 33)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 33)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=33" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=33&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=33&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(33, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <img src="images/empty.gif" width="16" height="16" border="0" />          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="32" />32</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 32)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 32)">ECS000032</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 32)">3010.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 32)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 32)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 32)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 32)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 32)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 32)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=32" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=32&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=32&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(32, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=32" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="31" />31</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 31)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 31)">ECS000031</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 31)">1337.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 31)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_best', 31)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 31)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 31)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 31)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 31)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=31" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=31&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=31&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(31, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <img src="images/empty.gif" width="16" height="16" border="0" />          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="24" />24</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 24)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 24)">ECS000024</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 24)">2000.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 24)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 24)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 24)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 24)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 24)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 24)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=24" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=24&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=24&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(24, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=24" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="23" />23</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 23)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 23)">ECS000023</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 23)">3700.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 23)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 23)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 23)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 23)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 23)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 23)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=23" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=23&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=23&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(23, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=23" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="22" />22</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 22)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 22)">ECS000022</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 22)">5999.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 22)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 22)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_new', 22)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 22)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 22)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 22)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=22" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=22&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=22&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(22, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=22" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="21" />21</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 21)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 21)">ECS000021</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 21)">2000.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 21)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_best', 21)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 21)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 21)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 21)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 21)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=21" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=21&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=21&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(21, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=21" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="20" />20</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 20)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 20)">ECS000020</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 20)">280.00
    </span></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 20)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_best', 20)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 20)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 20)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 20)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 20)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=20" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=20&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=20&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(20, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=20" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="17" />17</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 17)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 17)">ECS000017</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 17)">2300.00
    </span></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 17)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 17)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 17)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 17)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 17)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 17)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=17" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=17&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=17&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(17, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=17" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="14" />14</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 14)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 14)">ECS000014</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 14)">2625.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 14)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 14)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 14)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 14)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 14)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 14)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=14" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=14&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=14&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(14, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=14" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="13" />13</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 13)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 13)">ECS000013</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 13)">1311.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 13)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_best', 13)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 13)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 13)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 13)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 13)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=13" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=13&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=13&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(13, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=13" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="12" />12</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 12)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 12)">ECS000012</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 12)">983.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 12)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 12)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_new', 12)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 12)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 12)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 12)">65535</span></td>
        <td align="center">
      <a href="../goods.php?id=12" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=12&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=12&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(12, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <img src="images/empty.gif" width="16" height="16" border="0" />          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="10" />10</td>
    <td class="first-cell" style="color:red;"><span onclick="listTable.edit(this, 'edit_goods_name', 10)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 10)">ECS000010</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 10)">1328.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 10)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_best', 10)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 10)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_hot', 10)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 10)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 10)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=10" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=10&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=10&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(10, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=10" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="9" />9</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 9)">ECSHOP模板中心68ecshop.com测试商品</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 9)">ECS000009</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 9)">2298.00
    </span></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_on_sale', 9)" /></td>
    <td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_best', 9)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_new', 9)" /></td>
    <td align="center"><img src="images/no.gif" onclick="listTable.toggle(this, 'toggle_hot', 9)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 9)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 9)">65534</span></td>
        <td align="center">
      <a href="../goods.php?id=9" target="_blank" title="查看"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=9&extension_code=" title="编辑"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=9&extension_code=" title="复制"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(9, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=product_list&goods_id=9" title="货品列表"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a>          </td> 
  </tr>
  </table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
          <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
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
</table>

</div>

<div>
  <input type="hidden" name="act" value="batch" />
  <select name="type" id="selAction" onchange="changeAction()">
    <option value="">请选择...</option>
    <option value="trash">回收站</option>
    <option value="on_sale">上架</option>
    <option value="not_on_sale">下架</option>
    <option value="best">精品</option>
    <option value="not_best">取消精品</option>
    <option value="new">新品</option>
    <option value="not_new">取消新品</option>
    <option value="hot">热销</option>
    <option value="not_hot">取消热销</option>
    <option value="move_to">转移到分类</option>
	    <option value="suppliers_move_to">转移到供货商</option>
	    
  </select>
  <select name="target_cat" style="display:none">
    <option value="0">请选择...</option><option value="21" >客餐厅</option><option value="77" >&nbsp;&nbsp;&nbsp;&nbsp;沙发茶几组合</option><option value="74" >&nbsp;&nbsp;&nbsp;&nbsp;餐桌组合</option><option value="33" >&nbsp;&nbsp;&nbsp;&nbsp;餐柜组合</option><option value="78" >&nbsp;&nbsp;&nbsp;&nbsp;吧台组合</option><option value="75" >&nbsp;&nbsp;&nbsp;&nbsp;隔断柜组合</option><option value="34" >&nbsp;&nbsp;&nbsp;&nbsp;羽绒服</option><option value="76" >&nbsp;&nbsp;&nbsp;&nbsp;牛仔裤</option><option value="73" >&nbsp;&nbsp;&nbsp;&nbsp;针织衫</option><option value="1" >卧房</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;衣帽间</option><option value="53" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据1</option><option value="54" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据2</option><option value="55" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据3</option><option value="69" >&nbsp;&nbsp;&nbsp;&nbsp;飘窗利用</option><option value="91" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据1</option><option value="92" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据2</option><option value="93" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据3</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;定制床</option><option value="94" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据3</option><option value="88" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据1</option><option value="89" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据2</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;米兰范儿卧房</option><option value="60" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据3</option><option value="84" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据6</option><option value="82" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据4</option><option value="58" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据1</option><option value="95" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据9</option><option value="85" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据7</option><option value="83" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据5</option><option value="59" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据2</option><option value="87" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据8</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;整体衣柜</option><option value="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据2</option><option value="51" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据3</option><option value="52" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据4</option><option value="49" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据1</option><option value="22" >厨房</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;U型</option><option value="79" >&nbsp;&nbsp;&nbsp;&nbsp;英伦晴风</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;新实用厨房</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;一字型</option><option value="26" >&nbsp;&nbsp;&nbsp;&nbsp;L型</option><option value="12" >充值卡</option><option value="14" >&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15" >&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13" >&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option><option value="23" >运动户外</option><option value="38" >&nbsp;&nbsp;&nbsp;&nbsp;运动包</option><option value="37" >&nbsp;&nbsp;&nbsp;&nbsp;运动鞋</option><option value="62" >建材</option><option value="64" >&nbsp;&nbsp;&nbsp;&nbsp;灯饰照明</option><option value="63" >&nbsp;&nbsp;&nbsp;&nbsp;卫浴用品</option><option value="20" >青少年房</option><option value="65" >&nbsp;&nbsp;&nbsp;&nbsp;衣柜组合</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;床组合</option><option value="68" >&nbsp;&nbsp;&nbsp;&nbsp;上下床组合</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;飘窗学习区</option><option value="66" >&nbsp;&nbsp;&nbsp;&nbsp;风衣</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;储物间</option><option value="67" >&nbsp;&nbsp;&nbsp;&nbsp;榻榻米</option><option value="90" >测试数据3</option><option value="6" >书房</option><option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;榻榻米</option><option value="71" >&nbsp;&nbsp;&nbsp;&nbsp;多功能床</option><option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;直角书桌组合</option><option value="45" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据4</option><option value="46" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据5</option><option value="72" >&nbsp;&nbsp;&nbsp;&nbsp;转角书桌组合</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;书柜组合</option><option value="47" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据6</option><option value="48" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据7</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;韩式田园书房</option><option value="41" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试数据</option><option value="39" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;原装电池</option><option value="40" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电池测试2</option><option value="70" >&nbsp;&nbsp;&nbsp;&nbsp;绕线器</option><option value="81" >测试</option>  </select>
	  <!--二级主菜单：转移供货商-->
  <select name="suppliers_id" style="display:none">
    <option value="-1">请选择...</option>
    <option value="0">转移到网店</option>
          <option value="1">北京供货商</option>
          <option value="2">上海供货商</option>
      </select>
  <!--end!-->
	  
    <input type="hidden" name="extension_code" value="" />
    <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
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
共执行 7 个查询，用时 0.013000 秒，Gzip 已禁用，内存占用 3.421 MB<br />
&copy; 2005-2015 ECSHOP 版权所有，并保留所有权利。
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