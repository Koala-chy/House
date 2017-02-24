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
    <meta charset="gbk">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/Public/css/lawyer.css"/>
    <style>
        .pc .num {
            display: inline-block;
            padding: 5px;
            margin: 5px;

        }
        .pc .current {
            display: inline-block;
            padding: 5px;
            margin: 5px;
            background-color: #458FCE;

        }
        li {
            display: list-item;
            text-align: -webkit-match-parent;
        }
    </style>
</head>
<body>

<div class="lawyer_all">
    <!--我是可爱的分割线----------------------------------------------->
    <div>
        <a href="#">您当前的位置：</a>
        <a href="#">合肥二手房&nbsp;&nbsp;>&nbsp;</a>
        <a href="#">律师在线</a>
    </div>
    <!--我是可爱的分割线----------------------------------------------->
    <!--导航切换-->
    <div class="hd">
        <ul>
            <li id="h1" class="active" >
                <a href="/Home/Lawyer/index" style="color: white;" >最新问题</a>
            </li>
            <li id="h2" class="">
                <a href="/Home/Lawyer/answer">已回答</a>
            </li>
            <li id="h3" class="" >
                <a href="/Home/Lawyer/question">未回答</a>
            </li>
        </ul>
    </div>
    <!--我是可爱的分割线----------------------------------------------->
    <!--在线咨询-->

    <div class="g-sort" style="margin-top:20px;">
        <div class="d1 clearfix"style="clear: both;display: table;">

            <form action="" method="get" class="u-pinggu" id="formpinggu">
                <input type="text" placeholder="请输入问题" value="" name="count" style="outline: none">
                <a href="javascript:;" class="u-btn-1" onclick="formpinggu.submit()">
                    <img src="/Public/image/sousuo.jpg">

                </a>
                <a href="javascript:" class="u-btn-2" id="btnZixun" onClick="bgDiv.style.display='';loginBox.style.display='';">在线咨询</a>
            </form>

        </div>
    </div>
</div>
<!--我是可爱的分割线----------------------------------------------->
<div class="lawyer_all clearfix" >
    <!--左边列表-->

    <div class="wrap910" id="bd1">
        <div class="interlocution">
            <table border="0">

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr >
                        <td><span class="c1">
                    Q
                </span></td>
                        <td width="700px"><a href="/Home/Lawyer/read/id/<?php echo ($row["id"]); ?>"><?php echo ($row["problem"]); ?></a></td>
                        <td><?php echo (date('Y-m-d H:i:s',$row["ptime"])); ?></td>

                    </tr>
                    <!--<tr style=""><td align="right"COLSPAN="2"><?php echo ($w); ?>条回答</td></tr>-->
                    <tr><td><br></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <div class="pc"><?php echo ($pager->show()); ?></div>
        </div>
    </div>
    <!--右边列表-->
    <div class="wrap250-1">
        <div class="m-more-new">
            <h2>市场动态</h2>
            <p>

                <a href="">

                    市场动态文章标题存放位置
                </a>
            </p>

        </div>

        <div class="m-more-new">
            <h2>最新房源</h2>
            <ul style="clear:both;">
                <li>
                    <!--房源出售页面超链接位置-->
                    <a href="">
                        <!--房源图片存放位置-->
                        <img src="" height="78" width="100" alt>
                        <p class="h40hidden">
                            房源名称存放位置

                        </p>
                        <p>
                            户型存放位置

                        </p>
                        <i>
                            房源价格存放位置

                        </i>
                    </a>
                </li>
                <li>
                    <!--房源出售页面超链接位置-->
                    <a href="">
                        <!--房源图片存放位置-->
                        <img src="" height="78" width="100" alt>
                        <p class="h40hidden">
                            房源名称存放位置

                        </p>
                        <p>
                            户型存放位置

                        </p>
                        <i>
                            房源价格存放位置

                        </i>
                    </a>
                </li>

            </ul>

        </div>
    </div>


</div>


<!--我是可爱的分割线----------------------这里是咨询弹窗------------------------->

<style>
    body,#Mdown {
        margin: 0;
        padding: 0;
        font: normal 14px/180% Tahoma,sans-serif;

    }
    #loginBox {
        margin: 0 auto;
        padding: 0px;
        text-align: left;
        width: 700px;
        height: 300px;
        background: #EAEEFF;
        font-size: 9pt;
        border: 1px solid #829AFF;
        overflow: hidden;
        filter: alpha(opacity=90);
        opacity: 1;
    }
    #loginBox .title {
        text-align: left;
        padding-left: 10px;
        font-size: 11pt;
        border-bottom: 1px solid #829AFF;
        height: 25px;
        line-height: 25px;
        cursor: move;
    }
    #loginBox .t1 {
        float: left;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }
    #loginBox .t2 {
        float: right;
        text-align: center;
        line-height: 18px;
        height: 18px;
        width: 18px;
        margin-top: 3px;
        margin-right: 2px;
        overflow: hidden;
        border: 1px solid #FF5889;
        background: #FFE0E9;
        cursor: pointer;
    }
    #loginBox .login {
        text-align: center;
        width: 100%;
        height: 100%;
    }
    input.submit {
        float: right;
        border: 1px solid #829AFF;
        FONT-SIZE: 9px;
        background: #EAEEFF;
        HEIGHT: 20px;
        margin-top: 5px;
        margin-right: 70px;
    }
    #bgDiv {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        /*background-color: #777;*/
        opacity: 0.7;
    }
</style>

<div id="bgDiv" style="display:none;">

</div>

<div id="loginBox" style="position:absolute; left:367px; top:150px; z-index:1;display: none;" >
    <div class="title" id="Mdown" style="background-color: #6ab4ff;height: 50px;font-size: 16px;line-height: 50px">
        <span class="t1">我要咨询</span>
        <span class="t2" title="关闭" onClick="login.style.display='none';bgDiv.style.display='none'">X</span>
    </div>
    <div class="login">


        <form method="post" action="/Home/Lawyer/index">
            <div>
                <textarea name="problem" style="width: 566px;height:120px;margin: 25px;resize: none"required="required">内容不能为空</textarea>
            </div>
            <div>
                <input type="submit"style="background-color:#6ab4ff;font-size: 20px">

            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    var IsMousedown, LEFT, TOP, login;

    document.getElementById("Mdown").onmousedown=function(e) {
        login = document.getElementById("loginBox");
        IsMousedown = true;
        e = e||event;
        LEFT = e.clientX - parseInt(login.style.left);
        TOP = e.clientY - parseInt(login.style.top);

        document.onmousemove = function(e) {
            e = e||event;
            if (IsMousedown) {
                login.style.left = e.clientX - LEFT + "px";
                login.style.top = e.clientY - TOP + "px";
            }
        }

        document.onmouseup=function(){
            IsMousedown=false;
        }
    }
</script>
<!--我是可爱的分割线----------------------------------------------->




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