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
    <link rel="stylesheet"type="text/css"href="/Public/css/Sale_index.css"/>
    <script src="/Public/js/jquery.js" type="text/javascript"></script>
    <title></title>

</head>
<body>

<div class="div">
    <!-- 导航1-->
    <div class="div1">
        <span class="span1_1">您当前位置：<a href="#">合肥二手房</a> > 出租房源</span>
    </div>
    <!-- 导航2-->
    <div class="div2">
        <div class="div2_1">
            <span class="span2_1_1"><a href="#">地域地标</a></span><span class="span2_1_2">
            <a href="/Home/Hire/Hire_LookHou">小区找房</a></span>
            <span class="span2_1_3"><a href="/Home/Hire/addData">我要出租</a></span>
        </div>
        <div class="div2_2">
            <div class="div2_2_1">
            <span class="span2_2_1">区域</span>
                <span class="span2_2_2">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>">不限</a>
                </span>

             <span class="span2_2_3">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/ss">蜀山区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/ly">庐阳区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/bhe">包河区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/yh">瑶海区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/zw">政务区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/bhu">滨湖区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/jk">经开区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/xz">新站区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/bc">北城新区</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/fd">肥东</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/fx">肥西</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/cf">长丰</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/ch">巢湖</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'fn');?>fn/lj">庐江</a>
            </span>
            </div>
             <script type="text/javascript">
                 $(function(){

                     $(".span2_2_3 a:contains('<?php echo ($fn); ?>')").addClass("active");

                     $("#sell a:contains('<?php echo ($sell); ?>')").addClass("active");

                     $("#house a:contains('<?php echo ($house); ?>')").addClass("active");

                     $("#area a:contains('<?php echo ($area); ?>')").addClass("active");


                 })

             </script>

            <div class="div2_2_1">
                <span class="span2_2_1">租金</span>
                <span class="span2_2_2">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>">不限</a>
                </span>
                <span class="span2_2_3" id="sell">
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/1">500元以下</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/2">500-1000元</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/3">1000-1500元</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/4">1500-2000元</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/5">2000-2500元</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'sell');?>sell/6">2500元以上</a>
                </span>
             </div>


            <div class="div2_2_1">
                <span class="span2_2_1">户型</span>
                <span class="span2_2_2">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>">不限</a>
                </span>
                <span class="span2_2_3" id="house">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/1">一室</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/2">二室</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/3">三室</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/4">四室</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/5">五室</a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'house');?>house/6">五室以上</a>
                </span>
            </div>


            <div class="div2_2_1">
                <span class="span2_2_1">类型</span> <span class="span2_2_2">
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'area');?>">不限</a>
               </span>
                <span class="span2_2_3" id="area">
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'area');?>area/1">整租</a>
                    <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'area');?>area/2">合租</a>
                </span>
            </div>
        </div>
    </div>
    <!-- 内容1-->
    <div class="div3">
        <div>
            <div class="div3_1">
                <span class="span3_1_1"><a href="#">出租房源</a></span>
                <span class="span3_1_3"><a href="/Home/Hire/hire_PerHou">个人房源</a></span>
            </div>
            <div style="clear:both" class="div3_2">
                <div class="div3_2_2"><span class="span3_2_2"><b>综合排序</b></span>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'s');?>s/0"><span class="span3_2_1">默认排序</span></a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'s');?>s/1"><span class="span3_2_1">时间↑ </span></a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'s');?>s/2"><span class="span3_2_1">总价↓</span></a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'s');?>s/3"><span class="span3_2_1">单价↓</span></a>
                <a href="/Home/Hire/hire_Shouye/<?php echo arr2link($qArr,'s');?>s/4"><span class="span3_2_1">面积↓</span></a>
            </div>

            </div>
        </div>
    </div>
    <!-- 内容2-->
    <div class="div4">
        <div class="div4_1">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="div4_1_1">
                    <img src="/Uploads/<?php echo ($row["hire_house_photo_1"]); ?>"/>
                    <div class="div4_1_1_3">
                        <h3><a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>"><?php echo (msubstr($row['hire_house_title'],0,23,'gbk',false)); ?></a></h3>
                        <div class="div4_1_1_2"><span><a href="#"><?php echo ($row["hire_type"]); ?></a></span>
                            <span><a href="#"><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></a></span>
                            <span><a href="#"><?php echo ($row["hire_house_floor"]); ?>/<?php echo ($row["hire_house_total"]); ?>层</a></span>
                            <span><a href="#"><?php echo ($row["hire_house_acreage"]); ?>㎡</a></span>
                            <span><a href="#"><?php echo ($row["hire_house_orirnt"]); ?></a></span>
                            <span><a href="#">建筑年代：<?php echo ($row["hire_more_year"]); ?>年</a></span></div>
                        <div  class="div4_1_1_2">
                            <span><a href="#"><?php echo ($row["hire_house_area"]); ?> </a></span>
                            <span><a href="#"><?php echo ($row["hire_house_name"]); ?></a></span>
                        </div>

                    </div>
                    <div style="float:right;width:190px;height:100px;margin-right:50px;">
                        <h4 style="font-size:24px;color:#f55353;font-family: Microsoft Yahei;"><?php echo ($row["hire_house_price"]); ?>元/月</h4>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>


            <div class="pages" style="margin-top: 20px">
                <?php echo ($page); ?>
            </div>
        </div>
        <div class="div5">
            <div class="div5_1">
                <div class="div5_1_1">
                    <span class="span5_1" style="border-bottom: 2px solid #00ae66">不动产评估</span>
                    <span class="span5_2">精品房源</span>
                </div>
                <script type="text/javascript">
                    $(function(){

                        $('.span5_2').mousemove(function(){
                            $('.span5_2').css({
                                'border-bottom': '2px solid  #00ae66'
                            });
                            $('.span5_1').css({
                                'border':'none'
                            });
                            $('#div5_1_5').css({
                                'display':'block'
                            });
                            $('#div5_1_4').css({
                                'display':'none'
                            })
                        });

                        $('.span5_1').mousemove(function(){
                            $('.span5_1').css({
                                'border-bottom': '2px solid  #00ae66'
                            });
                            $('.span5_2').css({
                                'border':'none'
                            });
                            $('#div5_1_5').css({
                                'display':'none'
                            });

                            $('#div5_1_4').css({
                                'display':'block'
                            })
                        })
                    })

                </script>
                <div class="div5_1_4" id="div5_1_4" style="display:block">
                    <div class="div5_1_2"> <span><font color="red">Q:</font>我买的二手房房产证已...</span><br><span><font color="red">A:</font>这个你需到房屋所在地的派出所详细的问...</span></div>
                    <div class="div5_1_2"> <span><font color="red">Q:</font>我买的二手房房产证已...</span><br><span><font color="red">A:</font>这个你需到房屋所在地的派出所详细的问...</span></div>
                    <div class="div5_1_2"> <span><font color="red">Q:</font>我买的二手房房产证已...</span><br><span><font color="red">A:</font>这个你需到房屋所在地的派出所详细的问...</span></div>
                    <div class="div5_1_2"> <span><font color="red">Q:</font>我买的二手房房产证已...</span><br><span><font color="red">A:</font>这个你需到房屋所在地的派出所详细的问...</span></div>
                    <div class="div5_1_2"> <span><font color="red">Q:</font>我买的二手房房产证已...</span><br><span><font color="red">A:</font>这个你需到房屋所在地的派出所详细的问...</span></div>
                    <div class="div5_1_3"> <span class="span5_1_3">我要评估</span></div>
                </div>
                <div class="div5_1_5" id="div5_1_5" style="display:none">
                    <div class="div5_1_2"> <span>买套精装房拎包入住 庐阳优质二</span></div>
                    <div class="div5_1_2"> <span>买套精装房拎包入住 庐阳优质二</span></div>
                    <div class="div5_1_2"> <span>买套精装房拎包入住 庐阳优质二</span></div>
                    <div class="div5_1_2"> <span>买套精装房拎包入住 庐阳优质二</span></div>
                    <div class="div5_1_2"> <span>买套精装房拎包入住 庐阳优质二</span></div>
                </div>
            </div>

            <div class="div5_2">
                <div class="div5_2_1"> <span>本月热门小区</span></div>
                <div class="div5_2_2"> <span>文华阁</span></div>
                <div class="div5_2_2"> <span>文华阁</span></div>
                <div class="div5_2_2"> <span>文华阁</span></div>
                <div class="div5_2_2"> <span>文华阁</span></div>
                <div class="div5_2_2"> <span>文华阁</span></div>
            </div>
        </div>
        <div style="clear: both"></div>

    </div>


    <!-- 尾部-->
    <div class="div6">
        <h1 >猜你喜欢</h1>
        <div class="div6_1">
            <div class="div6_1_1"><img src="/public/image/2.jpeg"/><div><span class="span6_1"><a href="#">宝业城市绿苑</a></span><span style="color:#ea2929;font-size:18px;float:right; font-family:Microsoft Yahei;">2200元</span></div><p style="font-size:14px;color:#999;text-align:center">二室二厅 | 105.00㎡ | 装修/毛坯</p></div>
        </div>
        <div class="div6_1">
            <div class="div6_1_1"><img src="/public/image/3.jpg"/><div><span class="span6_1"><a href="#">安纺二村</a></span><span style="color:#ea2929;font-size:18px;float:right; font-family:Microsoft Yahei;">2200元</span></div><p style="font-size:14px;color:#999;text-align:center">二室二厅 | 105.00㎡ | 装修/毛坯</p></div>
        </div>
        <div class="div6_1">
            <div class="div6_1_1"><img src="/public/image/4.jpg"/><div><span class="span6_1"><a href="#">安纺二村</a></span><span style="color:#ea2929;font-size:18px;float:right; font-family:Microsoft Yahei;">2200元</span></div><p style="font-size:14px;color:#999;text-align:center">二室二厅 | 105.00㎡ | 装修/毛坯</p></div>
        </div>
        <div class="div6_1">
            <div class="div6_1_1"><img src="/public/image/5.jpg"/><div><span class="span6_1"><a href="#">安纺二村</a></span><span style="color:#ea2929;font-size:18px;float:right; font-family:Microsoft Yahei;">2200元</span></div><p style="font-size:14px;color:#999;text-align:center">二室二厅 | 105.00㎡ | 装修/毛坯</p></div>
        </div>
        <div class="div6_1">
            <div class="div6_1_1"><img src="/public/image/6.jpg"/><div><span class="span6_1"><a href="#">安纺二村</a></span><span style="color:#ea2929;font-size:18px;float:right; font-family:Microsoft Yahei;">2200元</span></div><p style="font-size:14px;color:#999;text-align:center">二室二厅 | 105.00㎡ | 装修/毛坯</p></div>
        </div>
    </div>
    <div style="clear: both"></div>
</div>

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