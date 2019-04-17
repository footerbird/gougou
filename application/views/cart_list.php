<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
</head>
<body>
<?php include_once('templete/menubar.php') ?>

<div class="container">
    <div class="cart-list mb30">
        <div class="title">全部商品<font>（3）</font></div>
        <table width="100%" class="cart-table">
            <thead>
                <tr>
                    <th width="5%"><label><input type="checkbox" id="checkAll1" /><i class="mr0"></i></label></th>
                    <th width="20%" align="left">全选</th>
                    <th width="20%" align="left">商品名</th>
                    <th>价格</th>
                    <th>数量</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center"><label><input type="checkbox" class="check-item" checked="checked" /><i class="mr0"></i></label></td>
                    <td><img src="/htdocs/images/pet.png" /></td>
                    <td style="line-height: 24px;">出售健康纯种比熊犬、免费送货签售后协议、可刷卡</td>
                    <td align="center"><span class="f20 col-default"><i class="f16 mr5">¥</i>20000</span></td>
                    <td align="center">
                        <div class="count-wrap">
                            <a href="javascript:;" class="minus">-</a>
                            <input type="text" value="2">
                            <a href="javascript:;" class="plus">+</a>
                        </div>
                    </td>
                    <td align="center"><a href="javascript:;" class="operate underline">删除</a></td>
                </tr>
                <tr>
                    <td align="center"><label><input type="checkbox" class="check-item" /><i class="mr0"></i></label></td>
                    <td><img src="/htdocs/images/pet.png" /></td>
                    <td style="line-height: 24px;">出售健康纯种比熊犬、免费送货签售后协议、可刷卡</td>
                    <td align="center"><span class="f20 col-default"><i class="f16 mr5">¥</i>20000</span></td>
                    <td align="center">
                        <div class="count-wrap">
                            <a href="javascript:;" class="minus">-</a>
                            <input type="text" value="2">
                            <a href="javascript:;" class="plus">+</a>
                        </div>
                    </td>
                    <td align="center"><a href="javascript:;" class="operate underline">删除</a></td>
                </tr>
                <tr>
                    <td align="center"><label><input type="checkbox" class="check-item" /><i class="mr0"></i></label></td>
                    <td><img src="/htdocs/images/pet.png" /></td>
                    <td style="line-height: 24px;">出售健康纯种比熊犬、免费送货签售后协议、可刷卡</td>
                    <td align="center"><span class="f20 col-default"><i class="f16 mr5">¥</i>20000</span></td>
                    <td align="center">
                        <div class="count-wrap">
                            <a href="javascript:;" class="minus">-</a>
                            <input type="text" value="2">
                            <a href="javascript:;" class="plus">+</a>
                        </div>
                    </td>
                    <td align="center"><a href="javascript:;" class="operate">删除</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr style="background-color: #fff; border-top: 1px solid #f5f5f5;">
                    <td align="center"><label><input type="checkbox" id="checkAll2" /><i class="mr0"></i></label></td>
                    <td colspan="5" class="pr0" style="height: 80px; line-height: 40px;">
                        <a href="javascript:;" class="operate ml0 mr30">全选</a>
                        <a href="javascript:;" class="operate ml0 mr30">删除选中的商品</a>
                        <a href="javascript:;" class="operate ml0 mr30">清空购物车</a>
                        <div class="fl-r col-gray6">
                            <span class="mr15">已选择<font class="f18 col-default ml5 mr5">3</font>件商品</span>
                            <span class="mr20">总价：<font class="f26 col-default va-m"><i class="f24 mr5">¥</i>6000.00</font></span>
                            <a href="javascript:;" class="cart-btn">去结算</a>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php include_once('templete/pub_foot_simple.php') ?>
<script src="/htdocs/js/magnifier.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    $('#magnifier').magnifier();
    
    $(".product-intro .tab a").on("click",function(){
        $(this).addClass("cur").siblings().removeClass("cur");
    })
})
</script>
</body>
</html>
