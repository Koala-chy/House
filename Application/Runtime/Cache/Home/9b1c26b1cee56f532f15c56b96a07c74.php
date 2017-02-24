<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="mobile-agent" content="format=html5;url=http://m.hfhouse.com/newhouse/">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>合肥二手房_合肥二手房房源_合肥二手房交易-合房网二手房</title>
    <meta name="keywords" content="合肥二手房,合肥二手房出售,合肥二手房买卖,合肥二手房交易,合肥二手房价格">
    <meta name="description" content="合肥本地真实的二手房房源信息，二手房出售信息及较新合肥二手房价格，尽在合房网二手房，每日实时更新大量优质二手房房源，为您买卖合肥二手房省时省力又省钱。">
    <link rel="stylesheet" type="text/css" href="/Public/css/hfhouse.css"/>
    <script type="text/javascript" src="/Public/js/jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            if("<?php echo (CONTROLLER_NAME); ?>"=="Agent"){
                $("#Agent").attr("class","on");
            }
            if("<?php echo (CONTROLLER_NAME); ?>"=="Index"){
                $("#Index").attr("class","on");
            }
            if("<?php echo (CONTROLLER_NAME); ?>"=="Sale"){
                $("#Sale").attr("class","on");
            }
            if("<?php echo (CONTROLLER_NAME); ?>"=="Hire"){
                $("#Hire").attr("class","on");
            }
            if("<?php echo (CONTROLLER_NAME); ?>"=="Lawyer"){
                $("#Lawyer").attr("class","on");
            }
            $("#anhui").bind('mouseover',function(){
                $("#anhuisheng").show();
            })
            $("#anhui").bind('mouseleave',function(){
                $("#anhuisheng").hide();
            })
            $("#lianxi").bind('mouseover',function(){
                $("#lianxikuang").show();
            })
            $("#lianxi").bind('mouseleave',function(){
                $("#lianxikuang").hide();
            })
            $("#daohang").bind('mouseover',function(){
                $("#daohangbiao").show();
            })
            $("#daohang").bind('mouseleave',function(){
                $("#daohangbiao").hide();
            })
        })
    </script>
</head>
<body>
<!--导航 Begin-->
<div class="topNav">
    <div class="topNav-width clearfix">
        <div class="tnLeft">
            <dd><h3 style="font-size: 100%;"><a href="/Home/Index/index" style="color: white">找房网</a></h3></dd>
            <dd id="anhui"><h3 style="font-size: 100%;"><a href="" style="color: white">安徽<i></i></a></h3><ul id="anhuisheng" class="xk_area" style="display: none;">
                <em></em>
                <a href="" title="合肥房地产交易网">合肥</a>
                <a href="" title="芜湖房地产交易网">芜湖</a>
                <a href="" title="蚌埠房地产交易网">蚌埠</a>
                <a href="" title="淮南房地产交易网">淮南</a>
                <a href="" title="淮北房地产交易网">淮北</a>
                <a href="" title="铜陵房地产交易网">铜陵</a>
                <a href="" title="安庆房地产交易网">安庆</a>
                <a href="" title="黄山房地产交易网">黄山</a>
                <a href="" title="阜阳房地产交易网">阜阳</a>
                <a href="" title="宿州房地产交易网">宿州</a>
                <a href="" title="滁州房地产交易网">滁州</a>
                <a href="" title="六安房地产交易网">六安</a>
                <a href="" title="宣城房地产交易网">宣城</a>
                <a href="" title="巢湖房地产交易网">巢湖</a>
                <a href="" title="池州房地产交易网">池州</a>
                <a href="" title="亳州房地产交易网">亳州</a>
                <a href="" title="天长房地产交易网">天长</a>
                <a href="" title="桐城房地产交易网">桐城</a>
                <a href="" title="宁国房地产交易网">宁国</a>
                <a href="" title="马鞍山房地产交易网" target="_blank">马鞍山</a>
            </ul>
            </dd>
            <dd><h3 style="font-size: 100%;"><a href="" style="color: white">移动产品<i></i></a></h3></dd>
        </div>
        <div class="tnRight">
            <?php if(($_SESSION['userid']) == ""): ?><dd><h3 style="font-size: 100%;"><a href="/Home/Index/login" style="color: white">登录</a></h3></dd>
            <?php else: ?>
                <dd><h3 style="font-size: 100%;"><a href="" style="color: white"><?php echo (session('username')); ?></a></h3></dd>
                <dd><h3 style="font-size: 100%;"><a href="/Home/Index/logout" style="color: white">注销登录</a></h3></dd><?php endif; ?>
            <dd id="lianxi"><h3 style="font-size: 100%;"><a href=""  style="color: white">联系我们<i></i></a></h3>
                <ul class="add_sc" id="lianxikuang" style="display: none;">
                    <em class="top_jt"></em>
                    <div class="fl" style="float: left;padding-right: 10px"><img height="150px" src="/Public/image/2weima.jpg"></div>
                    <div class="fr" style="float: left">
                        <p class="f14">扫二维码直接进入技术团队群~</p>
                        <p class="f14">服务电话 888-888-8888</p>
                        <p class="f14">客服QQ群 584749590</p>
                        <p class="f14">技术团队 合肥PHP技术研发二组</p>
                        <a class="add_btn" style="cursor: pointer" onclick="alert('Ctrl+D 把找房网放入收藏夹 全面了解实时二手房资讯，方便快捷！')">加入收藏</a>
                    </div>
                    <div class="clear"></div>
                </ul>
            </dd>
            <dd id="daohang"><h3 style="font-size: 100%;"><a href="" style="color: white;position: relative;padding-left: 30px;"><b></b>网站导航<i></i></a></h3>
                <ul id="daohangbiao" class="web_nav" style="display: none;">
                    <li><b class="f16"><a href="/Home/Index/index" target="_blank">二手房</a></b>
                        <p class="f14">
                            <a href="" >不动产评估</a>
                            <a href="/Home/Sale/addData" target="_blank">出售</a>
                            <a href="/Home/Lawyer/index" target="_blank">律师在线</a>
                            <a href="/Home/Hire/addData" target="_blank">租房</a>		                    <a href="http://oldhouse.hfhouse.com/agent/" target="_blank">房产经纪人</a>
                        </p>
                    </li>
                </ul>
            </dd>
        </div>
    </div>
</div>
<!--头部框架-->
<div class="wrop_top">
    <div class="newhouse_logo">
        <div class="newhouse_logo_L logo_340100">
            <a href="#" style="float: left;"><img style="height: 65px" src="/Public/image/logo.png">
                <img src="/Public/image/xf_logo.gif">
            </a>
            <dl>
                <dd id="lr_systembtn" style="margin-left: 0px;">
                    <h3><a href="#">合肥</a></h3>
                    <div id="lr_menu" style="display: none">
                        <!--<div style="border-bottom:dashed 1px #ccc;">-->
                            <!--<h4>华东地区</h4>-->
                            <!--<div class="lr_list">-->
                                <!--<a target="_blank" href="http://wh.ahhouse.com/">芜湖</a>-->
                                <!--<a target="_blank" href="http://ch.ahhouse.com/">巢湖</a>-->
                                <!--<a target="_blank" href="http://hn.ahhouse.com/">淮南</a>-->
                                <!--<a target="_blank" href="http://aq.ahhouse.com/">安庆</a>-->
                                <!--<a target="_blank" href="http://cz.ahhouse.com/">池州</a>-->
                                <!--<a target="_blank" href="http://hs.ahhouse.com/">黄山</a>-->
                                <!--<a target="_blank" href="http://la.ahhouse.com/">六安</a>-->
                                <!--<a target="_blank" href="http://bb.ahhouse.com/">蚌埠</a>-->
                                <!--<a target="_blank" href="http://tl.ahhouse.com/">铜陵</a>-->
                                <!--<a target="_blank" href="http://fy.ahhouse.com/">阜阳</a>-->
                                <!--<a target="_blank" href="http://hb.ahhouse.com/">淮北</a>-->
                                <!--<a target="_blank" href="http://xc.ahhouse.com/">宣城</a>-->
                                <!--<a target="_blank" href="http://chz.ahhouse.com/">滁州</a>-->
                                <!--<a target="_blank" href="http://bz.ahhouse.com/">亳州</a>-->
                                <!--<a target="_blank" href="http://sz.ahhouse.com/">宿州</a>-->
                                <!--<a target="_blank" href="http://mas.ahhouse.com/">马鞍山</a>-->
                            <!--</div>-->
                            <!--<div class="cl"></div>-->
                        <!--</div>-->
                    </div>
                </dd>
            </dl>
        </div>
    </div>
    <form method="get" action="" id="myFormId">
        <div class="newhouse_search" style="height: 40px;margin-left: 20px;margin-top: 10px;">
            <dl class="arrow" id="saleSeach">
                <dt>
                    <input id="zushouxuanze" type="text" value="出租" style="border:0;width: 53px;background: #fff;cursor: pointer;padding-left: 15px; height: 36px;line-height: 36px;" disabled>
                    <i></i>
                </dt>
                <dd id="xuanchushou">出售</dd>
                <dd id="xuanchuzu" style="border-bottom-width: 2px;border-bottom-style: solid;border-bottom-color: rgb(0, 174, 102);">出租</dd>
            </dl>
            <input type="submit" class="sbutton" value="">
            <input name="search" type="text" class="sinput" id="sinput" style="color: #333;outline: none" autocomplete="off" placeholder="请输入要搜索的楼盘关键词" value="">
        </div>
        <script type="text/javascript">
            $("#saleSeach").mouseover(function(){
                $("#xuanchushou").show();
                $("#xuanchuzu").show();
            })
            $("#saleSeach").mouseout(function(){
                $("#xuanchushou").hide();
                $("#xuanchuzu").hide();
            })
            $("#xuanchushou").click(function(){
                $("#zushouxuanze").attr("value","出售")
                $("#myFormId").attr("action","/Home/Sale/Sale_LookHou")
            })
            $("#xuanchuzu").click(function(){
                $("#zushouxuanze").attr("value","出租")
                $("#myFormId").attr("action","Hire")
            })
        </script>
    </form>
    <div class="telephone">
        <img src="/Public/image/kf_top.gif">
    </div>
    <div class="cl" style="clear: both"></div>
</div>
<!--主导航-->
<div class="wrap_nav">
    <div class="wrap">
        <div class="mainnav">
            <a href="/Home/Index/index" id="Index" target="_blank">首页</a>
            <a href="/Home/Sale/Sale_Shouye" id="Sale" target="_blank">出售</a>
            <a href="/Home/Hire/Hire_Shouye" id="Hire" target="_blank">出租</a>
            <a href="" >资讯</a>
            <a href="/Home/Agent/agent" id="Agent" target="_blank">房产经纪人</a>
            <a href="/Home/Lawyer/index" id="Lawyer" target="_blank">律师在线</a>
            <a href="" >不动产评估</a>
        </div>
    </div>
</div>
<!--主体开始-->
<a target="_blank" style="position: fixed" href="http://wpa.qq.com/msgrd?v=1&uin=1580889738&site=qq&menu=yes">
    <img src="/Public/image/zaixiankefu.jpg" width="60px" border="0"/>
</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="mobile-agent" content="format=html5;url=http://m.hfhouse.com/newhouse/">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>合肥二手房_合肥二手房房源_合肥二手房交易-合房网二手房</title>
    <meta name="keywords" content="合肥二手房,合肥二手房出售,合肥二手房买卖,合肥二手房交易,合肥二手房价格">
    <meta name="description" content="合肥本地真实的二手房房源信息，二手房出售信息及较新合肥二手房价格，尽在合房网二手房，每日实时更新大量优质二手房房源，为您买卖合肥二手房省时省力又省钱。">
    <link rel="stylesheet" type="text/css" href="/Public/css/hfindex.css"/>
    <script src="/Public/js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $("#k-jumpTo0").click(function(){
                $(window).scrollTop(754);
            })
            $("#k-jumpTo0").mouseover(function(){
                $("#k-jumpTo0").attr("class","on")
            })
            $("#k-jumpTo0").mouseout(function(){
                $("#k-jumpTo0").attr("class","")
            })
            $("#k-jumpTo1").mouseover(function(){
                $("#k-jumpTo1").attr("class","on")
            })
            $("#k-jumpTo1").mouseout(function(){
                $("#k-jumpTo1").attr("class","")
            })
            $("#k-jumpTo2").mouseover(function(){
                $("#k-jumpTo2").attr("class","on")
            })
            $("#k-jumpTo2").mouseout(function(){
                $("#k-jumpTo2").attr("class","")
            })
            $("#k-jumpTo3").mouseover(function(){
                $("#k-jumpTo3").attr("class","on")
            })
            $("#k-jumpTo3").mouseout(function(){
                $("#k-jumpTo3").attr("class","")
            })
            $("#k-jumpTo1").click(function(){
                $(window).scrollTop(1300);
            })
            $("#k-jumpTo2").click(function(){
                $(window).scrollTop(1730);
            })
            $("#k-jumpTo3").click(function(){
                $(window).scrollTop(2128);
            })
            $("#k-jumpTo5").click(function(){
                $(window).scrollTop(0);
            })
            $(window).scroll(function(){
                if($(window).scrollTop()>700){
                    $("#k-jumpTo5").show();
                }
                if($(window).scrollTop()<700){
                    $("#k-jumpTo5").hide();
                }
                console.log($(window).scrollTop()+" px");
                if($(window).scrollTop()<754){
                    $("#k-jumpTo0").attr("class","")
                    $("#k-jumpTo1").attr("class","")
                    $("#k-jumpTo2").attr("class","")
                    $("#k-jumpTo3").attr("class","")
                    $("#k-jumpTo4").attr("class","")
                }
                if($(window).scrollTop()>=754 && $(window).scrollTop()<1300){
                    $("#k-jumpTo0").attr("class","on")
                    $("#k-jumpTo1").attr("class","")
                    $("#k-jumpTo2").attr("class","")
                    $("#k-jumpTo3").attr("class","")
                    $("#k-jumpTo4").attr("class","")
                }
                if($(window).scrollTop()>=1300 && $(window).scrollTop()<1730){
                    $("#k-jumpTo0").attr("class","")
                    $("#k-jumpTo1").attr("class","on")
                    $("#k-jumpTo2").attr("class","")
                    $("#k-jumpTo3").attr("class","")
                    $("#k-jumpTo4").attr("class","")
                }
                if($(window).scrollTop()>=1730 && $(window).scrollTop()<2128){
                    $("#k-jumpTo0").attr("class","")
                    $("#k-jumpTo1").attr("class","")
                    $("#k-jumpTo2").attr("class","on")
                    $("#k-jumpTo3").attr("class","")
                    $("#k-jumpTo4").attr("class","")
                }
                if($(window).scrollTop()>=2128 && $(window).scrollTop()<2728){
                    $("#k-jumpTo0").attr("class","")
                    $("#k-jumpTo1").attr("class","")
                    $("#k-jumpTo2").attr("class","")
                    $("#k-jumpTo3").attr("class","on")
                    $("#k-jumpTo4").attr("class","")
                }
            })
        })
    </script>
</head>
<body>
<!--主体开始-->
<div class="warp" id="fadebd">
    <div style="margin: auto">
        <img src="/Public/image/II6LA1476856170.png">
    </div>
    <dl class="propaganda" style="background-color: rgba(30, 19, 19, 0.33);">
        <dt>找房网二手房<br>“家”的选择</dt>
        <dd>
            <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('请先登录后发表')" class="propaganda_btn">我要卖房</a>
                <?php else: ?>
                <a target="_blank" href="/Home/Sale/addData" class="propaganda_btn">我要卖房</a><?php endif; ?>
        </dd>
        <dd>
            <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('请先登录后发表')" class="propaganda_btn">我要出租</a>
                <?php else: ?>
                <a target="_blank" href="/Home/Hire/addData" class="propaganda_btn">我要出租</a><?php endif; ?>
        </dd>
    </dl>
</div>

<!--出租出售-->

<div class="warp">
    <div class="sale_warp">
        <ul class="salehouse_tit">
            <li class="on" id="chushou">出售</li>
            <li class="" id="chuzu">出租</li>
        </ul>

        <div class="sale_con hide" id="chushouF">
            <dl>
                <dt class="hot_quarters">热门小区</dt>
                <!--<?php if(is_array($dataHot)): $i = 0; $__LIST__ = $dataHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>-->
                    <!--<dd><a href="/xqzf?xqname=博澳丽苑" target="_blank"><?php echo ($row["sale_house_name"]); ?></a></dd>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <dd><a href="/Home/Sale/Sale_Userinfo/id/21" target="_blank">博澳丽苑</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/20" target="_blank">润安大厦</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/19" target="_blank">观湖苑</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/18" target="_blank">保利海上五月花</a></dd>
            </dl>
            <dl>
                <dt class="hot_area">热门区域</dt>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/ly" target="_blank">庐阳区</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/bhe" target="_blank">包河区</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/ss" target="_blank">蜀山区</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/bhu" target="_blank">滨湖区</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/zw" target="_blank">政务区</a></dd>
            </dl>
            <dl>
                <dt class="hot_type">类型找房</dt>
                <dd><a href="/Home/Sale/Sale_LookHou/type/1" target="_blank">住宅</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/2" target="_blank">商铺</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/3" target="_blank">写字楼</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/4" target="_blank">别墅</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/5" target="_blank">厂房</a></dd>
            </dl>
            <dl class="bor_non">
                <dt class="pay_money">购房预算</dt>
                <dd><a href="/Home/Sale/Sale_Shouye/js/1" target="_blank">40万以下</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/2" target="_blank">40-70万</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/3" target="_blank">70-100万</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/4" target="_blank">100-120万</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/5" target="_blank">120-150万</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/6" target="_blank">150万以上</a></dd>
            </dl>
        </div>
        <div class="sale_con" id="chuzuF" style="display: none">
            <dl>
                <dt class="hot_quarters">热门小区</dt>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/21" target="_blank">博澳丽苑</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/20" target="_blank">润安大厦</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/19" target="_blank">观湖苑</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/18" target="_blank">保利海上五月花</a></dd>
                </dd>
            </dl>
            <dl>
                <dt class="hot_area">热门区域</dt>
                <dd><a href="/Home/Hire/hire_Shouye/fn/ss" target="_blank">蜀山区</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/bhe" target="_blank">包河区</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/ly" target="_blank">庐阳区</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/zw" target="_blank">政务区</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/bhu" target="_blank">滨湖区</a></dd>
            </dl>
            <dl>
                <dt class="hot_type">类型找房</dt>
                <dd><a href="/Home/Sale/Sale_LookHou/type/1" target="_blank">住宅</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/2" target="_blank">商铺</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/3" target="_blank">写字楼</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/4" target="_blank">别墅</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/5" target="_blank">厂房</a></dd>
            </dl>
            <dl class="bor_non">
                <dt class="pay_money">租房预算</dt>
                <dd><a href="/Home/Hire/hire_Shouye/sell/1" target="_blank">500元以下</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/2" target="_blank">500-1000元</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/3" target="_blank">1000-1500元</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/4" target="_blank">1500-2000元</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/5" target="_blank">2000-2500元</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/6" target="_blank">2500元以上</a></dd>
            </dl>
        </div>
    </div>
</div>
<!--1楼-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">1F</div>
        <h2 class="dgray28px">
            <a href="/sale/" target="_blank">出售房源</a>
            <span class="tips">
                <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('请先登录后发表')" class="propaganda_btn">我要出售</a>
                    <?php else: ?>
                    <a target="_blank" href="/Home/Sale/addData" class="propaganda_btn">我要出售</a><?php endif; ?>
                <a href="" target="_blank">我要求购</a>
            </span>
        </h2>
        <div class="floor_menu_c dgray14px9">
        </div>
        <div style="clear: both"></div>
    </div>
    <div class="wrap900">
        <div class="slideTxtBox">
            <div class="hd" data-val="0">
                <ul>
                    <li id="CSH1" class="on">个人房源</li>
                    <li id="CSH2" class="">新推房源</li>
                    <li id="CSH3" class="">急售房源</li>
                    <li id="CSH4" class="">无税房</li>
                    <li id="CSH5" class="">地铁房</li>
                    <li id="CSH6" class="">毛坯房</li>
                    <li id="CSH7" class="">精装修</li>
                </ul>
            </div>
            <div class="bd" data-val="0">
                <ul id="cshF1" style="display: block;">
                    <?php if(is_array($dataNew)): $i = 0; $__LIST__ = $dataNew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank">
                                    <img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476431441769795.jpg!320x320" alt="海亮精装绝佳好房，拎包即住，诚意出售" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;width: 200px"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="海亮精装绝佳好房，拎包即住，诚意出售"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                             <div class="cl"></div>
                </ul>
                <ul id="cshF2" style="display: none;">
                    <?php if(is_array($dataNew)): $i = 0; $__LIST__ = $dataNew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy"  alt="[金成港湾]生态公园旁 地铁三号线口 交通便利 生活方便 采光好" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[金成港湾]生态公园旁 地铁三号线口 交通便利 生活方便 采光好"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="cl"></div>
                </ul>
                <ul id="cshF3" style="display: none;">
                    <?php if(is_array($dataWrr)): $i = 0; $__LIST__ = $dataWrr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy"  alt="广视花园地势好，阳光好，小区环境好，实际面积大 实验本部" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="广视花园地势好，阳光好，小区环境好，实际面积大 实验本部"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF4" style="display: none;">
                    <?php if(is_array($dataNon)): $i = 0; $__LIST__ = $dataNon;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[学林雅苑]经开区 学林雅苑 南北通透 精装无税 68中学区房 地铁口" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[学林雅苑]经开区 学林雅苑 南北通透 精装无税 68中学区房 地铁口"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF5" style="display: none;">
                    <?php if(is_array($dataMet)): $i = 0; $__LIST__ = $dataMet;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[银领时代]家天下生活广场附近 房主急售 地铁口 通透户型 随时看房" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[银领时代]家天下生活广场附近 房主急售 地铁口 通透户型 随时看房"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <div class="cl"></div>
            </ul>
                <ul id="cshF6" style="display: none;">
                    <?php if(is_array($dataMao)): $i = 0; $__LIST__ = $dataMao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[和昌都汇华郡]蒙城北路 三室毛坯 婚房首选 低价出售" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[和昌都汇华郡]蒙城北路 三室毛坯 婚房首选 低价出售"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF7" style="display: none;">
                    <?php if(is_array($dataJin)): $i = 0; $__LIST__ = $dataJin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[景尚名郡]美诚地产 高新区 精装 兴园中学学区 南北通透 户型工整" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>万</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[景尚名郡]美诚地产 高新区 精装 兴园中学学区 南北通透 户型工整"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!--2楼-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">2F</div>
        <h2 class="dgray28px">
            <a href="/hire/" target="_blank">出租房源</a>
            <span class="tips">
                <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('请先登录后发表')" class="propaganda_btn">我要出租</a>
                    <?php else: ?>
                    <a target="_blank" href="/Home/Hire/addData" class="propaganda_btn">我要出租</a><?php endif; ?>
                <a href="" target="_blank">我要求租</a>
            </span>
        </h2>
        <div class="dgray14px9">
        </div>
        <div class="cl"></div>
    </div>
    <div class="wrap900">
        <div class="slideTxtBox">
            <div class="hd" data-val="1">
                <ul>
                    <li id="2L1" class="on">整租</li>
                    <li id="2L2" class="">
                        合租
                    </li>
                    <li id="2L3" class="">
                        个人
                    </li>
                    <li id="2L4" class="">
                        经纪人
                    </li>
                    <li id="2L5" class="">
                        中介
                    </li>
                </ul>
            </div>
            <div class="bd" data-val="1">
                <div id="2L1XX" class="bd_inner" style="display: block;">
                    <ul>
                        <?php if(is_array($dataZen)): $i = 0; $__LIST__ = $dataZen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank"><img class="lazy" alt="紫辰阁大三房  便宜招租" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>元/月</span>
                                    <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank" title="紫辰阁大三房  便宜招租"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div style="clear: both"></div>
                    </ul>
                    <?php if(is_array($dataZen)): $i = 0; $__LIST__ = $dataZen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>元/月</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <div id="2L2XX" class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataHen)): $i = 0; $__LIST__ = $dataHen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="合肥全诚大学生求职短租公寓(非中介)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>元/月</span>
                                    <a href="/hire/314296.html" target="_blank" title="合肥全诚大学生求职短租公寓(非中介)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataHen)): $i = 0; $__LIST__ = $dataHen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>元/月</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div id="2L3XX" class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataGen)): $i = 0; $__LIST__ = $dataGen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="合肥全诚大学生求职短租公寓(非中介)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>元/月</span>
                                    <a href="/hire/314296.html" target="_blank" title="合肥全诚大学生求职短租公寓(非中介)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataGen)): $i = 0; $__LIST__ = $dataGen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>元/月</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div  id="2L4XX"class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataJing)): $i = 0; $__LIST__ = $dataJing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="合肥全诚大学生求职短租公寓(非中介)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>元/月</span>
                                    <a href="/hire/314296.html" target="_blank" title="合肥全诚大学生求职短租公寓(非中介)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataJing)): $i = 0; $__LIST__ = $dataJing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>元/月</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div  id="2L5XX"class="bd_inner hide" style="display: none;">
                    <ul>
                        <li>
                            <div class="bd_pic">
                                <div class="picfont">骆园小区</div>
                                <a href="/hire/308896.html" target="_blank"><img class="lazy" data-original="http://img3.hfhouse.com/oldhouse/cache_b/11/0410/2011041079715689.JPG" alt="合巢路两室一厅" src="http://img3.hfhouse.com/oldhouse/cache_b/11/0410/2011041079715689.JPG" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px">1000元/月</span>
                                <a href="/hire/308896.html" target="_blank" title="合巢路两室一厅">包河区</a>
                            </h5>
                        </li><li>
                        <div class="bd_pic">
                            <div class="picfont">万振城市广场</div>
                            <a href="/hire/308882.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/05/1441420863_457500.jpg" alt="马鞍山路万震城市广场1室1厅1卫" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/05/1441420863_457500.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">1500元/月</span>
                            <a href="/hire/308882.html" target="_blank" title="马鞍山路万震城市广场1室1厅1卫">包河区</a>
                        </h5>
                    </li><li>
                        <div class="bd_pic">
                            <div class="picfont">创智广场</div>
                            <a href="/hire/308942.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441623895_839286.jpg" alt="小户型大风景稀缺户型居家首选" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441623895_839286.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">2000元/月</span>
                            <a href="/hire/308942.html" target="_blank" title="小户型大风景稀缺户型居家首选">包河区</a>
                        </h5>
                    </li><li>
                        <div class="bd_pic">
                            <div class="picfont">枫丹城市花园</div>
                            <a href="/hire/308939.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441622436_414731.jpg" alt="小户型大风景稀缺户型居家首选" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441622436_414731.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">1800元/月</span>
                            <a href="/hire/308939.html" target="_blank" title="小户型大风景稀缺户型居家首选">包河区</a>
                        </h5>
                    </li>                        <div class="cl"></div>
                    </ul>
                    <div class="cl"></div>
                    <dl class="floor_two_dl">
                        <a href="/hire/308938.html" target="_blank">
                            <dt></dt>
                            <dd>包河区<span>三室一厅</span></dd>
                            <dd class="bor_non">103m<sup>2</sup><span class="money_tips">1600元/月</span></dd>
                        </a>
                    </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/306153.html" target="_blank">
                        <dt>地矿家园</dt>
                        <dd>包河区<span>三室二厅</span></dd>
                        <dd class="bor_non">131m<sup>2</sup><span class="money_tips">2000元/月</span></dd>
                    </a>
                </dl><dl class="floor_two_dl">
                    <a href="/hire/305495.html" target="_blank">
                        <dt></dt>
                        <dd>包河区<span>二室二厅</span></dd>
                        <dd class="bor_non">82m<sup>2</sup><span class="money_tips">1800元/月</span></dd>
                    </a>
                </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/305554.html" target="_blank">
                        <dt>四季花园</dt>
                        <dd>包河区<span>三室二厅</span></dd>
                        <dd class="bor_non">105m<sup>2</sup><span class="money_tips">1900元/月</span></dd>
                    </a>
                </dl><dl class="floor_two_dl">
                    <a href="/hire/305834.html" target="_blank">
                        <dt>东航银燕小区</dt>
                        <dd>包河区<span>三室一厅</span></dd>
                        <dd class="bor_non">110m<sup>2</sup><span class="money_tips">1500元/月</span></dd>
                    </a>
                </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/305592.html" target="_blank">
                        <dt></dt>
                        <dd>包河区<span>三室二厅</span></dd>
                        <dd class="bor_non">93m<sup>2</sup><span class="money_tips">1800元/月</span></dd>
                    </a>
                </dl>                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!--3楼-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">3F</div>
        <h2 class="dgray28px"><a href="" target="_blank">学区房</a></h2>
        <div style="clear: both"></div>
    </div>
    <div class="floor_3fl">
        <div class="floor_3f_tit">
            <ul>
                <li id="xccs" class="on"><a href="">出售</a></li>
                <li id="xccz" class=""><a href="">出租</a></li>
            </ul>
        </div>
        <div id="xccsIma" class="floor_3f_con hide">
            <div class="floor_3f_inner">
                <ul>
                    <?php if(is_array($dataSch)): $i = 0; $__LIST__ = $dataSch;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/sale/5563330.html" target="_blank"><img class="lazy" alt="保利海上五月花" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <a href="/sale/5563330.html" target="_blank" title="核心区第一中学"></a>
                            </h5>
                            <p class="dgray12px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>㎡ | <?php echo ($row["sale_house_decorate"]); ?><span class="red14px fr"><?php echo ($row["sale_house_price"]); ?>万</span></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
            </div>
        </div>
        <div id="xcczIma" class="floor_3f_con" style="display: none">
            <div class="floor_3f_inner">
                <ul>
                <li>
                    <div class="bd_pic">
                        <div class="picfont">天慧紫辰阁</div>
                        <a href="/hire/315912.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476408413905479.jpg" alt="天慧紫辰阁" src="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476408413905479.jpg" style="display: inline;"></a>
                    </div>
                    <h5 class="dgray16px3 clearfix">
                        <a href="/hire/315912.html" target="_blank" title="合肥市第四十六中学（南校区）">合肥市第四十六中学（南校区）</a>
                    </h5>
                    <p class="dgray12px9">三室 | 133㎡ | 简装<span class="red14px fr">1800元/月</span></p>
                </li><li>
                <div class="bd_pic">
                    <div class="picfont">保利海上五月花</div>
                    <a href="/hire/315856.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161011/20161011195842_71328.jpg" alt="保利海上五月花" src="http://uploadcdn.xkhouse.com/attachment/image/20161011/20161011195842_71328.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315856.html" target="_blank" title="核心区第一中学">核心区第一中学</a>
                </h5>
                <p class="dgray12px9">一室 | 135㎡ | 毛坯<span class="red14px fr">16200元/月</span></p>
            </li><li>
                <div class="bd_pic">
                    <div class="picfont">保利拉菲公馆</div>
                    <a href="/hire/315997.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020114222_73217.jpg" alt="保利拉菲公馆" src="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020114222_73217.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315997.html" target="_blank" title="合肥市第四十六中学（南校区）">合肥市第四十六中学（南校区）</a>
                </h5>
                <p class="dgray12px9">三室 | 96㎡ | 装修/毛坯<span class="red14px fr">1450元/月</span></p>
            </li><li>
                <div class="bd_pic">
                    <div class="picfont">滨湖万科城</div>
                    <a href="/hire/315996.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020113112_47479.jpg" alt="滨湖万科城" src="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020113112_47479.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315996.html" target="_blank" title="合肥市第四十六中学（南校区）">合肥市第四十六中学（南校区）</a>
                </h5>
                <p class="dgray12px9">三室 | 105㎡ | 装修/毛坯<span class="red14px fr">1500元/月</span></p>
            </li>
                    <div style="clear: both"></div>
            </ul>
            </div>
        </div>
    </div>
    <div class="floor_3fr">
        <div class="floor_3fr_tit"><a href="http://news.hfhouse.com/list182/" target="_blank">精品房源</a></div>
        <ul>
            <li><a href="http://news.hfhouse.com/html/2474121.html" target="_blank">买套精装房拎包入住 庐阳优质二手房推荐</a></li><li><a href="http://news.hfhouse.com/html/2472698.html" target="_blank">限购后楼市进入调整期 高新区优质二手房</a></li><li><a href="http://news.hfhouse.com/html/2471835.html" target="_blank">滨湖名校学区房精品好房 滨湖优质二手房</a></li><li><a href="http://news.hfhouse.com/html/2471786.html" target="_blank">合肥限购新政难降房价 滨湖优质学区房推</a></li><li><a href="http://news.hfhouse.com/html/2471407.html" target="_blank">限购不可怕还有低价房可买 庐阳区精品二</a></li>        </ul>
    </div>
    <div style="clear: both"></div>
</div>
<!--4楼-->
<a href="#4L"></a>
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">4F</div>
        <h2 class="dgray28px"><a href="javascript:void(0)" target="_blank">求购</a> · <a href="javascript:void(0)" target="_blank">求租</a></h2>
        <div class="cl"></div>
    </div>
    <div class="floor_4fl">
        <div class="floor_4f_tit">
            <ul>
                <li id="qiugou" class=""><a href="">求购</a></li>
                <li id="qiuzu" class="on"><a href="">求租</a></li>
                <div style="clear: both"></div>
            </ul>
        </div>
        <div id="qiugouF" class="floor_4f_con hide">
            <a href="/buy/3823.html" title="" target="_blank">
                <dl>
                    <dt>诚心购房，非诚勿扰 </dt>
                    <dd>三室一厅</dd>
                    <dd class="money_4f">70~90万</dd>
                </dl>
            </a><a href="/buy/3822.html" title="" target="_blank">
            <dl>
                <dt>求购学区房 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/buy/3821.html" title="" target="_blank">
            <dl>
                <dt>求购住房一套 </dt>
                <dd>二室一厅</dd>
                <dd class="money_4f">100~130万</dd>
            </dl>
        </a><a href="/buy/3820.html" title="" target="_blank">
            <dl>
                <dt>求购安医二附院附近的商品房 </dt>
                <dd>三室一厅</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/buy/3818.html" title="" target="_blank">
            <dl>
                <dt>刚需群体。适当就好证件齐全 </dt>
                <dd>二室一厅</dd>
                <dd class="money_4f">80~90万</dd>
            </dl>
        </a><a href="/buy/3817.html" title="" target="_blank">
            <dl>
                <dt>住房求购  </dt>
                <dd>二室一厅</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/buy/3815.html" title="" target="_blank">
            <dl>
                <dt>求购合肥二手学区房 </dt>
                <dd>二室一厅</dd>
                <dd class="money_4f">70~110万</dd>
            </dl>
        </a><a href="/buy/3814.html" title="" target="_blank">
            <dl>
                <dt>求购住宅用房，房龄较新！ </dt>
                <dd>四室</dd>
                <dd class="money_4f">90~110万</dd>
            </dl>
        </a>
        </div>
        <div id="qiuzuF" style="display: none" class="floor_4f_con">
            <a href="/demand/3757.html" title="" target="_blank">
                <dl>
                    <dt>祥源广场附近房源 </dt>
                    <dd>二室一厅</dd>
                    <dd class="money_4f">1300~1500元/月</dd>
                </dl>
            </a><a href="/demand/3753.html" title="" target="_blank">
            <dl>
                <dt>求租太湖西路春晖田逸苑或附近套房一套 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/demand/3723.html" title="" target="_blank">
            <dl>
                <dt>求租住宅西二环附近 </dt>
                <dd>二室一厅</dd>
                <dd class="money_4f">800~1300元/月</dd>
            </dl>
        </a><a href="/demand/3713.html" title="" target="_blank">
            <dl>
                <dt>要求双阳台，政务区和高新区 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/demand/3707.html" title="" target="_blank">
            <dl>
                <dt>胜利路与临泉路交口合租 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/demand/3706.html" title="" target="_blank">
            <dl>
                <dt>急需力高共和城周边住房 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/demand/3702.html" title="" target="_blank">
            <dl>
                <dt>在合肥金湖学校附近租一套房子 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a><a href="/demand/3701.html" title="" target="_blank">
            <dl>
                <dt>想在经典花园租一室一厅长期租房 </dt>
                <dd>不限</dd>
                <dd class="money_4f">面议</dd>
            </dl>
        </a>
        </div>
    </div>
    <div class="floor_4fr">
        <ul class="floor_4fr_tit">
            <li><a href="">律师在线</a></li>
        </ul>
        <div style="clear: both"></div>
        <div class="floor_4fr_con hide">
            <div class="floor_4fr_con_inner" style="overflow: hidden;">
                <dl>
                    <dt><i>Q</i><span><a href="/lawyer/18255.html" target="_blank">买方袁存基: 2016年3月23日，我同你方以及中介合肥军辉不动产营销策划有限公司共同签订了二手房存量买卖合同，签订合同前已告知你方房屋所有权归我老公婚前个人财产，我没有所有权。现由于我老公不同意将房屋出卖，故该合同应归于无效，合同作废。我方将返还你已经支付的定金10000元，请于5月10日前你的银行账户和开户行以短信形式告知于我。我方会及时返还定金。  逾期视为自动放弃定金。特此告知！
                        我是中介，我们签订的合同上有写代签人承担相应的法律责任，这样的话有没有作用，遇见这样的情况，我如何寻求法律帮助。</a><span></span></span></dt>
                    <div class="cl"></div>
                </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18202.html" target="_blank">您好~我有问题想要咨询一下，我在1月看中江南新里程的房子，并与房主在桐城路吉大房产签订合同，缴纳了1万的定金，因房主贷款未清，要去银行预约还款，当时说大概4月份流程会走完。现在已经4月份了，期间多次催促房主，但是没有效果，最终告知要排队到5月份，我已经不相信对方，所以要求看银行回执，拿着回执找到银行认识的人得知房主3月才去排队，5月已经很快了。感觉受骗的我查看当时签订的合同，又发现合同上只规定我要在何时缴纳首付，没有任何规定房主的条款，且定金的收条缴款方也是房主的名字，这一切在当时因为我不了解也相信中介的情况下什么也没有发现，怀揣疑问的我不好直接找房主质问，便来到中介处寻找说法，但中介互相踢皮球，只是说是房主没有按时还款，所以迟迟没有成交，与他们没有关系，但我知道房主和中介的关系极好，所以希望寻求律师的帮助，想知道我该怎么办？</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18190.html" target="_blank">你好！我合肥火车站中绿内衣批发市场一期二楼店铺可以卖多少钱！交易还会具体产生哪些费用谢谢</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18180.html" target="_blank">今年过年后由于合肥房价一直涨，担心房价涨的太高，一心急，我父亲找了一个合肥辉达房产公司新蚌埠路公司的业务员（业务员名字叫：萧芝某）3月10号左右我父亲跟随业务员萧芝森去看了位于北二环《兴海苑一期21栋104房间》，当时看完之后我父亲非常满意，然后电话让我回家再次去看房（本人在郑州）。看完后我也觉得很满意，业务员萧芝某说房产证上的面积是62平，但是房屋实际面积目测超过80平（3室），业务员萧芝某说多出来的是赠送的，由于缺乏经验，加上当时合肥房价上涨太快心里着急，然后就没有实际过问太多（当时太大意房屋主人不在），业务员萧芝某说如果确定没问题就通知房主过来付定金；就这样，我和我父亲都信以为真房子业务员萧芝某说所说，而且带我和我父亲去看的房子就是房主所说的房子；当天下午，根据房产中介要求，去位于新亚汽车站对面的辉达房产分公司去签订房屋确认合同，当场交纳押金2万元整。由于房屋实际面积比房产证面积大，我父亲一直比较怀疑，一个人去兴海苑小区去了3、4次，发现兴海苑小区有1期、2期，还有3期4期，无意中发现兴海苑3期也有一个21栋104房间（带我们看的房子是《兴海苑一期21栋104房间》），心中范嘀咕，怎么会有2个一模一样的楼栋和房牌号？因为刚好要交纳首付款，和父亲一商量，决定要先和房主、中介一起再去看看房子水电气这些具体问题然后当天下午发现不对，给我们看的房和合同上的不是同一期的房子！我们就报警，报警后把我们带到合肥七里塘派出所，民警说要调解，业务员萧芝森电话把他上司分公司经理叫到派出所！民警说只能你们自行调解，不属于刑事、治安案件，无权插手？？！！调解到最后经理说：第二天去新亚汽车站对面的公司退押金及其它，现在我们一直在等……总之一句话：买房要谨慎小心，辉达房产不可靠！！！辉达房产这么大公司，在合肥这么多分店，就是靠忽悠客户来做业绩的？我想问问就是这么玩的？？买房是一辈子大事，你们就这么玩弄客户？？？？试问你们业务员萧芝森良心何在？？试问辉达房产你们平时怎么管理？？ 请问下律师，我这个可以告他们吗？</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/17593.html" target="_blank">您好 我2011年在蚌埠万福君临天下买的房子，当时是公积金和商业贷款一起贷的房子，截止现在房产证没有拿到，开发商说贷款的房子房产证压在银行，等贷款结清了才能拿到，情况是这样的么 ？？谢谢?</a><span></span></span></dt>
                <div class="cl"></div>
            </dl>            </div>
            <!--<a href="javascript:;" class="floor_4fr_assessment" id="btnZixun">我要咨询</a>-->
            <a href="/Home/Lawyer/index" class="floor_4fr_assessment" id="btnZixun">我要咨询</a>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<div class="floatnav" id="floatnav">
    <ul>
        <li class="icon_one"><a id="k-jumpTo0" style="cursor: pointer" class="">出售房源</a></li>
        <li class="icon_two"><a id="k-jumpTo1" style="cursor: pointer" class="">出租房源</a></li>
        <li class="icon_three"><a id="k-jumpTo2" style="cursor: pointer" class="">学区房</a></li>
        <li class="icon_four"><a id="k-jumpTo3" style="cursor: pointer" class="">求租求购</a></li>
        <!--<li class="icon_five"><a id="k-jumpTo4" style="cursor: pointer" class="">楼市快报</a></li>-->
        <li class="icon_login"><a href="login" target="_blank" style="color:#fff"><!--跳转登录页--></a></li>
    </ul>
    <div class="return_top" style="cursor: pointer" id="k-jumpTo5" style="display: none;"></div>
</div>
<script type="text/javascript">
    $("#qiugou").bind('mouseover', function () {
        $("#qiugou").attr("class","on")
        $("#qiuzu").attr("class","")
        $("#qiugouF").show();
        $("#qiuzuF").hide();
    })
    $("#qiuzu").bind('mouseover', function () {
        $("#qiugou").attr("class","")
        $("#qiuzu").attr("class","on")
        $("#qiugouF").hide();
        $("#qiuzuF").show();
    })
    $("#xccs").bind('mouseover',function(){
        $("#xccs").attr("class","on");
        $("#xccz").attr("class","");
        $("#xccsIma").show();
        $("#xcczIma").hide();
    });
    $("#xccz").bind('mouseover',function(){
        $("#xccs").attr("class","");
        $("#xccz").attr("class","on");
        $("#xccsIma").hide();
        $("#xcczIma").show();
    });
    $("#chushou").bind('mouseover',function(){
        $("#chushou").attr("class","on");
        $("#chuzu").attr("class","");
        $("#chushouF").show();
        $("#chuzuF").hide();
    });
    $("#chuzu").bind('mouseover',function(){
        $("#chushou").attr("class","");
        $("#chuzu").attr("class","on");
        $("#chushouF").hide();
        $("#chuzuF").show();
    })
    $("#CSH1").bind('mouseover',function(){
        $("#CSH1").attr("class","on");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","block")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","none")
    })
    $("#CSH2").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","on");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","block")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","none")
    })
    $("#CSH3").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","on");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","block")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","none")
    })
    $("#CSH4").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","on");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","block")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","none")
    })
    $("#CSH5").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","on");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","block")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","none")
    })
    $("#CSH6").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","on");
        $("#CSH7").attr("class","");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","block")
        $("#cshF7").css("display","none")
    })
    $("#CSH7").bind('mouseover',function(){
        $("#CSH1").attr("class","");
        $("#CSH2").attr("class","");
        $("#CSH3").attr("class","");
        $("#CSH4").attr("class","");
        $("#CSH5").attr("class","");
        $("#CSH6").attr("class","");
        $("#CSH7").attr("class","on");
        $("#cshF1").css("display","none")
        $("#cshF2").css("display","none")
        $("#cshF3").css("display","none")
        $("#cshF4").css("display","none")
        $("#cshF5").css("display","none")
        $("#cshF6").css("display","none")
        $("#cshF7").css("display","block")
    })
    $("#2L1").bind('mouseover',function(){
        $("#2L1").attr("class","on");
        $("#2L2").attr("class","");
        $("#2L3").attr("class","");
        $("#2L4").attr("class","");
        $("#2L5").attr("class","");
        $("#2L1XX").css("display","block")
        $("#2L2XX").css("display","none")
        $("#2L3XX").css("display","none")
        $("#2L4XX").css("display","none")
        $("#2L5XX").css("display","none")
    })
    $("#2L2").bind('mouseover',function(){
        $("#2L1").attr("class","");
        $("#2L2").attr("class","on");
        $("#2L3").attr("class","");
        $("#2L4").attr("class","");
        $("#2L5").attr("class","");
        $("#2L1XX").css("display","none")
        $("#2L2XX").css("display","block")
        $("#2L3XX").css("display","none")
        $("#2L4XX").css("display","none")
        $("#2L5XX").css("display","none")
    })
    $("#2L3").bind('mouseover',function(){
        $("#2L1").attr("class","");
        $("#2L2").attr("class","");
        $("#2L3").attr("class","on");
        $("#2L4").attr("class","");
        $("#2L5").attr("class","");
        $("#2L1XX").css("display","none")
        $("#2L2XX").css("display","none")
        $("#2L3XX").css("display","block")
        $("#2L4XX").css("display","none")
        $("#2L5XX").css("display","none")
    })
    $("#2L4").bind('mouseover',function(){
        $("#2L1").attr("class","");
        $("#2L2").attr("class","");
        $("#2L3").attr("class","");
        $("#2L4").attr("class","on");
        $("#2L5").attr("class","");
        $("#2L1XX").css("display","none")
        $("#2L2XX").css("display","none")
        $("#2L3XX").css("display","none")
        $("#2L4XX").css("display","block")
        $("#2L5XX").css("display","none")
    })
    $("#2L5").bind('mouseover',function(){
        $("#2L1").attr("class","");
        $("#2L2").attr("class","");
        $("#2L3").attr("class","");
        $("#2L4").attr("class","");
        $("#2L5").attr("class","on");
        $("#2L1XX").css("display","none")
        $("#2L2XX").css("display","none")
        $("#2L3XX").css("display","none")
        $("#2L4XX").css("display","none")
        $("#2L5XX").css("display","block")
    })
</script>
</body>
</html>
<!--尾部主题-->
<div class="bottom">
    <div class="wrap">
        <div class="friend_link dgray14px9" id="hutia"><b>友情链接：</b>
            <a href="http://newhouse.letfind.com.cn/" title="福州楼盘 " target="_blank">福州楼盘</a><a href="http://sz.fangjia.com/" title="深圳房价 " target="_blank">深圳房价</a><a href="http://www.tengfun.com/" title="滕州房产网 " target="_blank">滕州房产网</a><a href="http://www.dezhong365.com" title="德众金融 " target="_blank">德众金融</a><a href="http://www.qiuxingwang.cn/ " title="球星网 " target="_blank">球星网</a><a href="http://www.xinwenquan.org" title="娱乐新闻 " target="_blank">娱乐新闻</a><a href="http://www.xkhouse.com/" title="星空地产  " target="_blank">星空地产 </a><a href="http://www.guangyuanol.cn" title="川北在线 " target="_blank">川北在线</a><a href="http://zz.mnw.cn/" title="漳州新闻网 " target="_blank">漳州新闻网</a><a href="http://newhouse.fy.ahhouse.com/5155/" title="阜阳祥源文旅城 " target="_blank">阜阳祥源文旅城</a>            </div>
        <div class="wx clearfix">
            <dl>
                <dt><img src="/Public/image/xfh_ewm.png"></dt>
                <dd><p class="f16"><b>星房惠移动客户端</b></p>
                    <p class="f12">让房子在手中转起来</p>
                    <p><a href="https://itunes.apple.com/cn/app/id786090055" target="_blank" rel="nofollow">
                        <img src="/Public/image/iphone.gif" width="71" height="24">
                    </a>&nbsp;&nbsp;<a href="http://app.xkhouse.com/down.php" target="_blank" rel="nofollow">
                        <img src="/Public/image/android.gif" width="74" height="24"></a></p>
                </dd>
            </dl>

            <dl>
                <dt><img src="/Public/image/zlyl1.gif"></dt>
                <dd><p class="f16"><b>左邻右里移动客户端</b></p>
                    <p class="f12">友邻就在身边</p>
                    <p><a href="http://nextdoors.com.cn/hfwzone.ipa" target="_blank" rel="nofollow">
                        <img src="/Public/image/iphone.gif" width="71" height="24">
                    </a>&nbsp;&nbsp;<a href="http://nextdoors.com.cn/XKFriend.apk" target="_blank" rel="nofollow">
                        <img src="/Public/image/android.gif" width="74" height="24"></a></p>
                </dd>
            </dl>
            <dl>
                <dt><img src="/Public/image/ewm.gif"></dt>
                <dd><p class="f16"><b>星空团官方微信</b></p>
                    <p class="f12">手指移动，轻松掌握房产最新优惠活动</p>
                </dd>
            </dl>
            <div style="clear: both"></div>
        </div>
        <div class="links-inner"><a target="_blank" href="http://www.hfhouse.com/company/about.html" rel="nofollow">公司简介</a><span>|</span><a target="_blank" href="http://www.nextdoors.com.cn/main.html" rel="nofollow">左邻右里</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/ggfw.html" rel="nofollow">广告服务</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/join.html" rel="nofollow">诚聘英才</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/contact.html" rel="nofollow">联系方法</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/licheng.html" rel="nofollow">精彩历程</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/sitemap.html" rel="nofollow">网站地图</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/privacy.html" rel="nofollow">版权声明</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/guwen.html" rel="nofollow">法律顾问</a><span>|</span><a target="_blank" href="http://aixin.xkhouse.com/" rel="nofollow">星空爱心慈善基金</a>
        </div>

        <div class="foot-copy dgray14px9">互联网经营许可证:
            <a href="http://www.miibeian.gov.cn/" target="_blank"></a>
            <a href="http://www.miibeian.gov.cn/" target="_blank">ICP证皖B2-20130008</a>
            <a href="http://news.hfhouse.com/html/225806.html" target="_blank">广播电视节目制作经营许可证：(皖)字第78号</a>
            <a href="http://hefei.cyberpolice.cn/" target="_blank">网警</a><br>2000-2016合肥星空投资管理有限公司　客服电话:400-887-1216　0551-64665370　Email:xk#xkhouse.com(#号替换成@) </div>
        </div>
    </div>
</div>
</body>
</html>