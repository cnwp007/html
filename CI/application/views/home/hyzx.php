
<!DOCTYPE html>
<html style="font-size: 40px;" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>个人中心</title>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
<meta name="format-detection" content="telephone=no">
<script src="<?=base_url().'home/js/jquery.js' ?>"></script>
<link href="<?=base_url().'home/css/usercenter.css' ?>" rel=" stylesheet">
</head>
<body>
<div id="body">
  <div class="content_header">
    <!--<div class="title_setup">
        <img src="img/icon/c-setup.png" />
    </div>-->
    <div class="user_info">
      <div class="user_photo"> <img id="imgUserPhoto" src="http://wx.qlogo.cn/mmopen/AnstziarBXM5Pz9fX7WDiaAL4ibyKrpHGIX2KvaURxl3PAP0n57H37tia0TwLnLI05l6gC0kPUiazN1eJaozDVbXJBX2neV90hhOe/0"> </div>
      <div class="user_text">
        <dl>
          <dt id="dtNickName">挖煤先森</dt>
          <dd> <span id="ddUserLevel">普通会员</span> </dd>
          <dd style="font-size:0.5rem"> 账户余额：￥0.00                      </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="touchweb_content">
    <div class="switch_menu">
      <div class="switch_title">
        <div class="sm_img"> <img src="<?=base_url().'home/images/c-6.png' ?>"> </div>
        <div class="title_text"> 我的订单 </div>
      </div>
      <ul>
        <li><a href="mydingdan?type=ddfk" class="stats" data-position="P_To_be_paid" data-category="C_To_be_paid">
          <dl>
            <dt id="dtStayPay"> <img src="<?=base_url().'home/images/c-bankcard.png' ?>"><span class="zeronum" id="spanStayPay"></span></dt>
            <dd> 待付款 </dd>
          </dl>
          </a></li>
        <li><a href="mydingdan?type=ddfh" class="stats" data-position="P_To_be_shipped" data-category="C_To_be_shipped">
          <dl>
            <dt id="dtStaySend"> <img src="<?=base_url().'home/images/c-parcel.png' ?>"><span class="zeronum" id="spanStaySend"></span></dt>
            <dd> 待发货 </dd>
          </dl>
          </a></li>
        <li><a href="mydingdan?type=ddsh" class="stats" data-position="P_Goods_to_be_received" data-category="C_Goods_to_be_received">
          <dl>
            <dt id="dtStayTake"> <img src="<?=base_url().'home/images/c-truck.png' ?>"><span class="zeronum" id="spanStayTake"></span></dt>
            <dd> 待收货 </dd>
          </dl>
          </a></li>
        <li><a href="mydingdan?type=ncc" class="stats" data-position="P_Completed" data-category="C_Completed">
          <dl>
            <dt id="dtFinish"> <img src="<?=base_url().'home/images/c-complete.png' ?>"><span class="zeronum" id="spanFinish"></span></dt>
            <dd> 已完成 </dd>
          </dl>
          </a></li>
        <li class="returnAPP stats" data-position="P_Return_goods" data-category="C_Return_goods"> <a href="cz" class="stats" data-position="P_Completed" data-category="C_Completed">
          <dl>
            <dt id="dtReturnaBle"> <img src="<?=base_url().'home/images/c-returngoods.png' ?>"><span class="zeronum" id="spanReturnaBle"></span></dt>
            <dd> 账户充值 </dd>
          </dl>
          </a> </li>
      </ul>
    </div>
    <div class="menu_list">
      <ul>
        <li class="returnAPP"><a  href="cz" class="stats" data-position="P_Deductible_voucher" data-category="C_Deductible_voucher">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-1.png' ?>"> </div>
            <span>在线充值</span> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
                <li class="returnAPP"><a  href="" class="stats" data-position="P_My_collection" data-category="C_My_collection">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-2.png' ?>"> </div>
            <span>已提交分销申请</span> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
                <li><a href="dizhi" class="stats" data-position="P_Address_management" data-category="C_Address_management">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-3.png' ?>"> </div>
            <span>地址管理</span> </div>
          <div class="num"> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
        <li style="display: none"><a class="stats" data-position="P_Online_customer_service" data-category="C_Online_customer_service">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-4.png' ?>"> </div>
            <span>在线客服</span> </div>
          <div class="num"> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
        <li style="display: none"><a class="stats" data-position="P_Official_micro_channel" data-category="C_Official_micro_channel">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-5.png' ?>"> </div>
            <span>官方微信</span> </div>
          <div class="num"> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
        <li><a href="zhanghao" class="stats">
          <div class="list_left">
            <div class="img_icon"> <img src="<?=base_url().'home/images/c-8.png' ?>"> </div>
            <span>账号设置</span> </div>
          <div class="num"> </div>
          <div class="list_right"> <img src="<?=base_url().'home/images/c-left-arrow.png' ?>"> </div>
          </a></li>
      </ul>
    </div>
    <a href="tuichu">
    <div class="btn_signout" id="signout" data-position="P_Sign_out" data-category="C_Sign_out"> 退出当前账户 </div>
    </a> </div>
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
</body>
</html>
