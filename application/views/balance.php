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
