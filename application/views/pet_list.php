<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
</head>
<body>
<?php include_once('templete/menubar.php') ?>

<div class="container">
    <!-- 面包屑导航 -->
    <div class="breadcrumbs"><span>所在位置：</span><a href="/page/home">首页</a><em></em><span>宠物交易</span></div>
</div>

<!-- 筛选面板 -->
<div class="container">
    <div class="filter-panel">
        <div class="condition">
            <dl>
                <dt>体型</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">小型</a></dd>
                <dd><a href="javascript:;">中型</a></dd>
                <dd><a href="javascript:;">大型</a></dd>
            </dl>
        </div>
        <div class="condition">
            <dl>
                <dt>功能</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">家庭犬</a></dd>
                <dd><a href="javascript:;">玩具犬</a></dd>
                <dd><a href="javascript:;">工作犬</a></dd>
                <dd><a href="javascript:;">梗类犬</a></dd>
                <dd><a href="javascript:;">牧羊犬</a></dd>
                <dd><a href="javascript:;">狩猎犬</a></dd>
                <dd><a href="javascript:;">枪猎犬</a></dd>
            </dl>
        </div>
        <div class="condition">
            <dl>
                <dt>特点</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">聪明</a></dd>
                <dd><a href="javascript:;">粘人</a></dd>
                <dd><a href="javascript:;">不掉毛</a></dd>
                <dd><a href="javascript:;">不爱叫</a></dd>
                <dd><a href="javascript:;">友善</a></dd>
                <dd><a href="javascript:;">会看家</a></dd>
                <dd><a href="javascript:;">耐热</a></dd>
                <dd><a href="javascript:;">易驯</a></dd>
            </dl>
        </div>
        <div class="condition">
            <dl class="pr0">
                <dt>种类</dt>
                <dd style="float: none; padding: 5px 0 5px 20px;">
                    <div class="f12 lh24 col-gray9">共为您提供<span class="col-default">178</span>个宠物狗品种交易信息</div>
                    <div class="letterlist after-cls">
                        <font class="on">A</font>
                        <font>B</font>
                        <font>C</font>
                        <font>D</font>
                        <font>E</font>
                        <font>F</font>
                        <font>G</font>
                        <font>H</font>
                        <font>I</font>
                        <font>J</font>
                        <font>K</font>
                        <font>L</font>
                        <font>M</font>
                        <font>N</font>
                        <font>O</font>
                        <font>P</font>
                        <font>Q</font>
                        <font>R</font>
                        <font>S</font>
                        <font>T</font>
                        <font>U</font>
                        <font>V</font>
                        <font>W</font>
                        <font>X</font>
                        <font>Y</font>
                        <font>Z</font>
                    </div>
                    <div class="typelist">
                        <font>Affenpinscher（阿芬平嘉犬）</font>
                        <font>Afghan Hound（阿富汗猎犬）</font>
                        <font>Airedale Terrier（万能梗）</font>
                        <font>Akita（秋田犬）</font>
                        <font>Alaskan Malamute（阿拉斯加雪橇犬）</font>
                        <font>American Eskimo Dog（美国爱斯基摩犬）</font>
                        <font>American Staffordshire Terrier（美国斯塔福梗）</font>
                        <font>American Water Spaniel（美国水猎犬）</font>
                        <font>Anatolian Shepherd（安娜图牧羊犬）</font>
                        <font>Australian Cattle Dog（澳洲牧牛犬）</font>
                        <font>Australian Shepherd（澳洲牧羊犬）</font>
                        <font>Australian Terrier（澳洲梗）</font>
                    </div>
                </dd>
            </dl>
        </div>
        <div class="condition ellip">
            <a href="javascript:;" class="more" id="city_more">更多</a>
            <dl>
                <dt>地区</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">直辖市</a></dd>
                <dd><a href="javascript:;">浙江</a></dd>
                <dd><a href="javascript:;">江苏</a></dd>
                <dd><a href="javascript:;">福建</a></dd>
                <dd><a href="javascript:;">广东</a></dd>
                <dd><a href="javascript:;">湖北</a></dd>
                <dd><a href="javascript:;">河南</a></dd>
                <dd><a href="javascript:;">山东</a></dd>
                <dd><a href="javascript:;">河北</a></dd>
                <dd><a href="javascript:;">陕西</a></dd>
                <dd><a href="javascript:;">内蒙古</a></dd>
                <dd><a href="javascript:;">广西</a></dd>
                <dd><a href="javascript:;">西藏</a></dd>
                <dd><a href="javascript:;">黑龙江</a></dd>
                <dd><a href="javascript:;">吉林</a></dd>
                <dd><a href="javascript:;">辽宁</a></dd>
                <dd><a href="javascript:;">宁夏</a></dd>
                <dd><a href="javascript:;">青海</a></dd>
                <dd><a href="javascript:;">江西</a></dd>
                <dd><a href="javascript:;">云南</a></dd>
            </dl>
        </div>
        <div class="condition">
            <dl>
                <dt>价格</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">0-300</a></dd>
                <dd><a href="javascript:;">300-500</a></dd>
                <dd><a href="javascript:;">500-1000</a></dd>
                <dd><a href="javascript:;">1000-2000</a></dd>
                <dd><a href="javascript:;">2000以上</a></dd>
                <dd>
                    <div class="price-range">
                        <input type="text" />-<input type="text" />元
                        <input type="button" value="确定" />
                    </div>
                </dd>
            </dl>
        </div>
        <div class="condition" style="border-bottom: none;">
            <dl>
                <dt>年龄</dt>
                <dd class="cur"><a href="javascript:;">不限</a></dd>
                <dd><a href="javascript:;">2月龄以下</a></dd>
                <dd><a href="javascript:;">2-5月龄</a></dd>
                <dd><a href="javascript:;">5-12月龄</a></dd>
                <dd><a href="javascript:;">1岁以上</a></dd>
            </dl>
        </div>
        <div class="result">
            <dl>
                <dt>当前选择</dt>
                <dd><a href="javascript:;">体型筛选：小型犬</a></dd>
                <dd><a href="javascript:;">功能筛选：牧羊犬</a></dd>
                <dd><a href="javascript:;">地区筛选：浙江省</a></dd>
                <dd><input type="button" value="清空筛选" /></dd>
            </dl>
        </div>
    </div>
</div>

<!-- 宠物狗交易 -->
<div class="home-module home-module-pet">
    <div class="container after-cls">
        <div class="module-title">
            <font>宠物狗交易</font>
            <div class="filter">
                <label class="ml50"><input type="checkbox" name="size" value="small" /><i></i>小型</label>
                <label class="ml50"><input type="checkbox" name="size" value="middle" checked="checked" /><i></i>中型</label>
                <label class="ml50"><input type="checkbox" name="size" value="large" /><i></i>大型</label>
                <input type="text" placeholder="快速搜索想了解的宠物价格" class="ml50" />
                <input type="button" value="确定" class="ml10" />
            </div>
            <div class="result">共为您找到了<span class="col-default">19872</span>条宠物狗交易信息</div>
        </div>
        <div class="module-list after-cls">
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
            <a href="/page/pet_detail" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                    </div>
                    <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                    <div class="after-cls lh18">
                        <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                        <span class="f12 col-gray9 fl-r">上海</span>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="pagination">
            <ul>
                <li class="first"><a href="" data-ci-pagination-page="1" rel="start">&laquo;</a></li>
                <li class="pre"><a href="" data-ci-pagination-page="3" rel="prev">&lsaquo;</a></li>
                <li><a href="" data-ci-pagination-page="2">2</a></li>
                <li><a href="" data-ci-pagination-page="3">3</a></li>
                <li class="current"><a>4</a></li>
                <li><a href="" data-ci-pagination-page="5">5</a></li>
                <li><a href="" data-ci-pagination-page="6">6</a></li>
                <li class="next"><a href="" data-ci-pagination-page="5" rel="next">&rsaquo;</a></li>
                <li class="last"><a href="" data-ci-pagination-page="261">&raquo;</a></li>
                <li><span>共89页，到第</span><input type="text" /><span>页</span><input type="button" value="GO" ></li>
            </ul>
        </div>
        
    </div>
</div>

<!-- 买宠物狗的人还关注 -->
<div class="home-module home-module-attention" style="background-color: #f5f7fa;">
    <div class="container after-cls">
        <div class="module-title">
            <font>买宠物的人还关注</font>
            <a href="" target="_blank" class="more">更多&nbsp;&nbsp;&gt;</a>
        </div>
        <div class="module-list after-cls">
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="item">
                <div class="thumb"><img src="/htdocs/images/goods.png" /></div>
                <div class="desc">
                    <div class="after-cls lh24">
                        <span class="f20 col-default"><i class="f16 mr5">¥</i>56</span>
                        <span class="f14 col-gray6 fl-r">狗狗爱顽皮狗粮</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include_once('templete/navigation.php') ?>
<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    
    $("#city_more").on("click",function(){
        var $parent = $(this).parents(".condition");
        $parent.toggleClass("ellip");
        if($parent.hasClass("ellip")){
            $(this).text("更多");
        }else{
            $(this).text("收起");
        }
    })
    
    $(".condition dd a").on("click",function(){
        $(this).parents("dd").addClass("cur").siblings("dd").removeClass("cur");
    })
    
    $(".letterlist font").on("click",function(){
        $(this).addClass("on").siblings("font").removeClass("on");
    })
    
    $(".typelist font").on("click",function(){
        $(this).addClass("on").siblings("font").removeClass("on");
    })
    
})
</script>
</body>
</html>
