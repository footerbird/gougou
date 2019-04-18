<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
</head>
<body>

<div class="header">
  <div class="top-bar">
    <div class="container after-cls">
      <div class="sologan"></div>
      <div class="location">
          <a href="javascript:;" class="current-location">杭州市</a>
          <div class="location-panel">
              <div class="title">请选择您所在的城市
                  <a href="javascript:;" data-target="provincelist">省份</a>
                  <a href="javascript:;" class="curtype" data-target="citylist">城市</a>
              </div>
              <div id="provincelist" class="provincelist list after-cls">
                  
              </div>
              <div id="citylist" class="citylist list after-cls">
                  
              </div>
          </div>
      </div>
      <div class="bar-item">
        <ul>
          <li><a href="javascript:;">登录</a></li>
          <li><a href="javascript:;">注册</a></li>
          <li><a href="javascript:;">帮助中心</a></li>
          <li><a href="javascript:;">入驻流程</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="top-search" style="height: 120px;">
    <div class="container after-cls">
      <a href="/page/home" class="top-logo"></a>
      <div class="balance-flow"></div>
    </div>
  </div>
</div>


<div class="container" style="width: 1000px;">
    <div class="f18" style="line-height: 56px;">填写并核对订单信息</div>
    <div class="balance-panel mb30">
        <div class="balance-item">
            <div class="lh24 f16 col-gray9 mb10">收货人信息</div>
            <div class="default-address">
                <p><font class="f16 col-gray3 mr40">橘色的猫</font><span>联系电话135****2235</span></p>
                <p>浙江省&nbsp;&nbsp;杭州市&nbsp;&nbsp;西湖区&nbsp;&nbsp;XXX路XX号XX单元<span class="tag-default ml15">默认地址</span></p>
                <a href="javascript:;" class="edit-btn">修改地址</a>
            </div>
            <div class="pl15" style="line-height: 54px;">
                <a href="javascript:;" class="f14 col-default">+ 新增收货地址</a>
            </div>
        </div>
        <div class="balance-item">
            <div class="lh24 f16 col-gray9 mb10 mt20">支付方式</div>
            <div class="payway after-cls mb30">
                <label class="alipay">
                    <input type="radio" name="payway" value="alipay" />
                </label>
                <label class="unionpay cur">
                    <input type="radio" name="payway" value="unionpay" checked="checked" />
                </label>
                <label class="wechat">
                    <input type="radio" name="payway" value="wechat" />
                </label>
            </div>
        </div>
        <div class="balance-item">
            <div class="lh24 f16 col-gray9 mb10 mt20">送货清单</div>
            <table width="100%" class="bill-table mb30">
                <thead>
                    <tr>
                        <th width="15%" align="left"></th>
                        <th width="45%" align="left">商品</th>
                        <th>价格</th>
                        <th>数量</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/htdocs/images/pet.png" /></td>
                        <td style="line-height: 24px;">出售健康纯种比熊犬、免费送货签售后协议、可刷卡</td>
                        <td align="center"><span class="f20 col-default"><i class="f16 mr5">¥</i>20000</span></td>
                        <td align="center">1</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="background-color: #f8f8f8;">
                        <td colspan="4" class="h50 pl20 pr30">
                            <span class="f14 col-gray6"><i class="ico-house"></i>花都宠物生活馆</span>
                            <span class="fl-r">配送方式：快递运输</span>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="balance-item">
            <div class="lh24 f16 col-gray9 mb10 mt20">发票信息</div>
            <div class="invoiceway after-cls mb30">
                <label class="cur">不开发票
                    <input type="radio" name="invoiceway" value="noinvoice" checked="checked" />
                </label>
                <label>普通发票
                    <input type="radio" name="invoiceway" value="invoice" />
                </label>
            </div>
        </div>
        <div class="balance-item" style="border-bottom: 0;">
            <div class="lh24 f16 col-gray9 mb10 mt20">结算信息</div>
            <div class="fl-l lh36 f14 col-gray9">
                <p class="col-gray3">共<font class="col-default">1</font>件商品</p>
                <p>寄送至：浙江&nbsp;&nbsp;杭州市&nbsp;&nbsp;西湖区&nbsp;&nbsp;****路***街道**号 </p>
                <p>收货人：xxx 135****7286</p>
            </div>
            <div class="fl-r feearea">
                <dl class="after-cls">
                    <dt>总金额：</dt>
                    <dd>¥ 2000</dd>
                </dl>
                <dl class="after-cls">
                    <dt>邮费：</dt>
                    <dd>¥ 20</dd>
                </dl>
                <dl class="after-cls lh50">
                    <dt>总支付金额：</dt>
                    <dd><font class="f26 col-default">¥ 6000.00</font></dd>
                </dl>
                <dl class="after-cls pt15 pb15">
                    <dt>&nbsp;</dt>
                    <dd><a href="javascript:;" class="fee-btn">递交订单</a></dd>
                </dl>
            </div>
            <div class="after-cls"></div>
        </div>
    </div>
</div>

<?php include_once('templete/pub_foot_simple.php') ?>
<script src="/htdocs/js/magnifier.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    $(".payway label").on("click",function(){
        $(this).addClass("cur").siblings().removeClass("cur");
    })
    
    $(".invoiceway label").on("click",function(){
        $(this).addClass("cur").siblings().removeClass("cur");
    })
})
</script>
</body>
</html>
