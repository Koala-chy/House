<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="mobile-agent" content="format=html5;url=http://m.hfhouse.com/newhouse/">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>�Ϸʶ��ַ�_�Ϸʶ��ַ���Դ_�Ϸʶ��ַ�����-�Ϸ������ַ�</title>
    <meta name="keywords" content="�Ϸʶ��ַ�,�Ϸʶ��ַ�����,�Ϸʶ��ַ�����,�Ϸʶ��ַ�����,�Ϸʶ��ַ��۸�">
    <meta name="description" content="�Ϸʱ�����ʵ�Ķ��ַ���Դ��Ϣ�����ַ�������Ϣ�����ºϷʶ��ַ��۸񣬾��ںϷ������ַ���ÿ��ʵʱ���´������ʶ��ַ���Դ��Ϊ�������Ϸʶ��ַ�ʡʱʡ����ʡǮ��">
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
<!--���� Begin-->
<div class="topNav">
    <div class="topNav-width clearfix">
        <div class="tnLeft">
            <dd><h3 style="font-size: 100%;"><a href="/Home/Index/index" style="color: white">�ҷ���</a></h3></dd>
            <dd id="anhui"><h3 style="font-size: 100%;"><a href="" style="color: white">����<i></i></a></h3><ul id="anhuisheng" class="xk_area" style="display: none;">
                <em></em>
                <a href="" title="�Ϸʷ��ز�������">�Ϸ�</a>
                <a href="" title="�ߺ����ز�������">�ߺ�</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="���Ϸ��ز�������">����</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="ͭ�귿�ز�������">ͭ��</a>
                <a href="" title="���췿�ز�������">����</a>
                <a href="" title="��ɽ���ز�������">��ɽ</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="���ݷ��ز�������">����</a>
                <a href="" title="���ݷ��ز�������">����</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="���Ƿ��ز�������">����</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="���ݷ��ز�������">����</a>
                <a href="" title="���ݷ��ز�������">����</a>
                <a href="" title="�쳤���ز�������">�쳤</a>
                <a href="" title="ͩ�Ƿ��ز�������">ͩ��</a>
                <a href="" title="�������ز�������">����</a>
                <a href="" title="��ɽ���ز�������" target="_blank">��ɽ</a>
            </ul>
            </dd>
            <dd><h3 style="font-size: 100%;"><a href="" style="color: white">�ƶ���Ʒ<i></i></a></h3></dd>
        </div>
        <div class="tnRight">
            <?php if(($_SESSION['userid']) == ""): ?><dd><h3 style="font-size: 100%;"><a href="/Home/Index/login" style="color: white">��¼</a></h3></dd>
            <?php else: ?>
                <dd><h3 style="font-size: 100%;"><a href="" style="color: white"><?php echo (session('username')); ?></a></h3></dd>
                <dd><h3 style="font-size: 100%;"><a href="/Home/Index/logout" style="color: white">ע����¼</a></h3></dd><?php endif; ?>
            <dd id="lianxi"><h3 style="font-size: 100%;"><a href=""  style="color: white">��ϵ����<i></i></a></h3>
                <ul class="add_sc" id="lianxikuang" style="display: none;">
                    <em class="top_jt"></em>
                    <div class="fl" style="float: left;padding-right: 10px"><img height="150px" src="/Public/image/2weima.jpg"></div>
                    <div class="fr" style="float: left">
                        <p class="f14">ɨ��ά��ֱ�ӽ��뼼���Ŷ�Ⱥ~</p>
                        <p class="f14">����绰 888-888-8888</p>
                        <p class="f14">�ͷ�QQȺ 584749590</p>
                        <p class="f14">�����Ŷ� �Ϸ�PHP�����з�����</p>
                        <a class="add_btn" style="cursor: pointer" onclick="alert('Ctrl+D ���ҷ��������ղؼ� ȫ���˽�ʵʱ���ַ���Ѷ�������ݣ�')">�����ղ�</a>
                    </div>
                    <div class="clear"></div>
                </ul>
            </dd>
            <dd id="daohang"><h3 style="font-size: 100%;"><a href="" style="color: white;position: relative;padding-left: 30px;"><b></b>��վ����<i></i></a></h3>
                <ul id="daohangbiao" class="web_nav" style="display: none;">
                    <li><b class="f16"><a href="/Home/Index/index" target="_blank">���ַ�</a></b>
                        <p class="f14">
                            <a href="" >����������</a>
                            <a href="/Home/Sale/addData" target="_blank">����</a>
                            <a href="/Home/Lawyer/index" target="_blank">��ʦ����</a>
                            <a href="/Home/Hire/addData" target="_blank">�ⷿ</a>		                    <a href="http://oldhouse.hfhouse.com/agent/" target="_blank">����������</a>
                        </p>
                    </li>
                </ul>
            </dd>
        </div>
    </div>
</div>
<!--ͷ�����-->
<div class="wrop_top">
    <div class="newhouse_logo">
        <div class="newhouse_logo_L logo_340100">
            <a href="#" style="float: left;"><img style="height: 65px" src="/Public/image/logo.png">
                <img src="/Public/image/xf_logo.gif">
            </a>
            <dl>
                <dd id="lr_systembtn" style="margin-left: 0px;">
                    <h3><a href="#">�Ϸ�</a></h3>
                    <div id="lr_menu" style="display: none">
                        <!--<div style="border-bottom:dashed 1px #ccc;">-->
                            <!--<h4>��������</h4>-->
                            <!--<div class="lr_list">-->
                                <!--<a target="_blank" href="http://wh.ahhouse.com/">�ߺ�</a>-->
                                <!--<a target="_blank" href="http://ch.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://hn.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://aq.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://cz.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://hs.ahhouse.com/">��ɽ</a>-->
                                <!--<a target="_blank" href="http://la.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://bb.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://tl.ahhouse.com/">ͭ��</a>-->
                                <!--<a target="_blank" href="http://fy.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://hb.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://xc.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://chz.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://bz.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://sz.ahhouse.com/">����</a>-->
                                <!--<a target="_blank" href="http://mas.ahhouse.com/">��ɽ</a>-->
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
                    <input id="zushouxuanze" type="text" value="����" style="border:0;width: 53px;background: #fff;cursor: pointer;padding-left: 15px; height: 36px;line-height: 36px;" disabled>
                    <i></i>
                </dt>
                <dd id="xuanchushou">����</dd>
                <dd id="xuanchuzu" style="border-bottom-width: 2px;border-bottom-style: solid;border-bottom-color: rgb(0, 174, 102);">����</dd>
            </dl>
            <input type="submit" class="sbutton" value="">
            <input name="search" type="text" class="sinput" id="sinput" style="color: #333;outline: none" autocomplete="off" placeholder="������Ҫ������¥�̹ؼ���" value="">
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
                $("#zushouxuanze").attr("value","����")
                $("#myFormId").attr("action","/Home/Sale/Sale_LookHou")
            })
            $("#xuanchuzu").click(function(){
                $("#zushouxuanze").attr("value","����")
                $("#myFormId").attr("action","Hire")
            })
        </script>
    </form>
    <div class="telephone">
        <img src="/Public/image/kf_top.gif">
    </div>
    <div class="cl" style="clear: both"></div>
</div>
<!--������-->
<div class="wrap_nav">
    <div class="wrap">
        <div class="mainnav">
            <a href="/Home/Index/index" id="Index" target="_blank">��ҳ</a>
            <a href="/Home/Sale/Sale_Shouye" id="Sale" target="_blank">����</a>
            <a href="/Home/Hire/Hire_Shouye" id="Hire" target="_blank">����</a>
            <a href="" >��Ѷ</a>
            <a href="/Home/Agent/agent" id="Agent" target="_blank">����������</a>
            <a href="/Home/Lawyer/index" id="Lawyer" target="_blank">��ʦ����</a>
            <a href="" >����������</a>
        </div>
    </div>
</div>
<!--���忪ʼ-->
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
    <title>�Ϸʶ��ַ�_�Ϸʶ��ַ���Դ_�Ϸʶ��ַ�����-�Ϸ������ַ�</title>
    <meta name="keywords" content="�Ϸʶ��ַ�,�Ϸʶ��ַ�����,�Ϸʶ��ַ�����,�Ϸʶ��ַ�����,�Ϸʶ��ַ��۸�">
    <meta name="description" content="�Ϸʱ�����ʵ�Ķ��ַ���Դ��Ϣ�����ַ�������Ϣ�����ºϷʶ��ַ��۸񣬾��ںϷ������ַ���ÿ��ʵʱ���´������ʶ��ַ���Դ��Ϊ�������Ϸʶ��ַ�ʡʱʡ����ʡǮ��">
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
<!--���忪ʼ-->
<div class="warp" id="fadebd">
    <div style="margin: auto">
        <img src="/Public/image/II6LA1476856170.png">
    </div>
    <dl class="propaganda" style="background-color: rgba(30, 19, 19, 0.33);">
        <dt>�ҷ������ַ�<br>���ҡ���ѡ��</dt>
        <dd>
            <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('���ȵ�¼�󷢱�')" class="propaganda_btn">��Ҫ����</a>
                <?php else: ?>
                <a target="_blank" href="/Home/Sale/addData" class="propaganda_btn">��Ҫ����</a><?php endif; ?>
        </dd>
        <dd>
            <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('���ȵ�¼�󷢱�')" class="propaganda_btn">��Ҫ����</a>
                <?php else: ?>
                <a target="_blank" href="/Home/Hire/addData" class="propaganda_btn">��Ҫ����</a><?php endif; ?>
        </dd>
    </dl>
</div>

<!--�������-->

<div class="warp">
    <div class="sale_warp">
        <ul class="salehouse_tit">
            <li class="on" id="chushou">����</li>
            <li class="" id="chuzu">����</li>
        </ul>

        <div class="sale_con hide" id="chushouF">
            <dl>
                <dt class="hot_quarters">����С��</dt>
                <!--<?php if(is_array($dataHot)): $i = 0; $__LIST__ = $dataHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>-->
                    <!--<dd><a href="/xqzf?xqname=������Է" target="_blank"><?php echo ($row["sale_house_name"]); ?></a></dd>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <dd><a href="/Home/Sale/Sale_Userinfo/id/21" target="_blank">������Է</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/20" target="_blank">�󰲴���</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/19" target="_blank">�ۺ�Է</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/18" target="_blank">�����������»�</a></dd>
            </dl>
            <dl>
                <dt class="hot_area">��������</dt>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/ly" target="_blank">®����</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/bhe" target="_blank">������</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/ss" target="_blank">��ɽ��</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/bhu" target="_blank">������</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/fn/zw" target="_blank">������</a></dd>
            </dl>
            <dl>
                <dt class="hot_type">�����ҷ�</dt>
                <dd><a href="/Home/Sale/Sale_LookHou/type/1" target="_blank">סլ</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/2" target="_blank">����</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/3" target="_blank">д��¥</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/4" target="_blank">����</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/5" target="_blank">����</a></dd>
            </dl>
            <dl class="bor_non">
                <dt class="pay_money">����Ԥ��</dt>
                <dd><a href="/Home/Sale/Sale_Shouye/js/1" target="_blank">40������</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/2" target="_blank">40-70��</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/3" target="_blank">70-100��</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/4" target="_blank">100-120��</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/5" target="_blank">120-150��</a></dd>
                <dd><a href="/Home/Sale/Sale_Shouye/js/6" target="_blank">150������</a></dd>
            </dl>
        </div>
        <div class="sale_con" id="chuzuF" style="display: none">
            <dl>
                <dt class="hot_quarters">����С��</dt>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/21" target="_blank">������Է</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/20" target="_blank">�󰲴���</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/19" target="_blank">�ۺ�Է</a></dd>
                <dd><a href="/Home/Sale/Sale_Userinfo/id/18" target="_blank">�����������»�</a></dd>
                </dd>
            </dl>
            <dl>
                <dt class="hot_area">��������</dt>
                <dd><a href="/Home/Hire/hire_Shouye/fn/ss" target="_blank">��ɽ��</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/bhe" target="_blank">������</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/ly" target="_blank">®����</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/zw" target="_blank">������</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/fn/bhu" target="_blank">������</a></dd>
            </dl>
            <dl>
                <dt class="hot_type">�����ҷ�</dt>
                <dd><a href="/Home/Sale/Sale_LookHou/type/1" target="_blank">סլ</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/2" target="_blank">����</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/3" target="_blank">д��¥</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/4" target="_blank">����</a></dd>
                <dd><a href="/Home/Sale/Sale_LookHou/type/5" target="_blank">����</a></dd>
            </dl>
            <dl class="bor_non">
                <dt class="pay_money">�ⷿԤ��</dt>
                <dd><a href="/Home/Hire/hire_Shouye/sell/1" target="_blank">500Ԫ����</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/2" target="_blank">500-1000Ԫ</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/3" target="_blank">1000-1500Ԫ</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/4" target="_blank">1500-2000Ԫ</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/5" target="_blank">2000-2500Ԫ</a></dd>
                <dd><a href="/Home/Hire/hire_Shouye/sell/6" target="_blank">2500Ԫ����</a></dd>
            </dl>
        </div>
    </div>
</div>
<!--1¥-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">1F</div>
        <h2 class="dgray28px">
            <a href="/sale/" target="_blank">���۷�Դ</a>
            <span class="tips">
                <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('���ȵ�¼�󷢱�')" class="propaganda_btn">��Ҫ����</a>
                    <?php else: ?>
                    <a target="_blank" href="/Home/Sale/addData" class="propaganda_btn">��Ҫ����</a><?php endif; ?>
                <a href="" target="_blank">��Ҫ��</a>
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
                    <li id="CSH1" class="on">���˷�Դ</li>
                    <li id="CSH2" class="">���Ʒ�Դ</li>
                    <li id="CSH3" class="">���۷�Դ</li>
                    <li id="CSH4" class="">��˰��</li>
                    <li id="CSH5" class="">������</li>
                    <li id="CSH6" class="">ë����</li>
                    <li id="CSH7" class="">��װ��</li>
                </ul>
            </div>
            <div class="bd" data-val="0">
                <ul id="cshF1" style="display: block;">
                    <?php if(is_array($dataNew)): $i = 0; $__LIST__ = $dataNew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank">
                                    <img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476431441769795.jpg!320x320" alt="������װ���Ѻ÷��������ס���������" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;width: 200px"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="������װ���Ѻ÷��������ס���������"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                             <div class="cl"></div>
                </ul>
                <ul id="cshF2" style="display: none;">
                    <?php if(is_array($dataNew)): $i = 0; $__LIST__ = $dataNew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy"  alt="[��ɸ���]��̬��԰�� ���������߿� ��ͨ���� ����� �ɹ��" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[��ɸ���]��̬��԰�� ���������߿� ��ͨ���� ����� �ɹ��"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="cl"></div>
                </ul>
                <ul id="cshF3" style="display: none;">
                    <?php if(is_array($dataWrr)): $i = 0; $__LIST__ = $dataWrr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy"  alt="���ӻ�԰���ƺã�����ã�С�������ã�ʵ������� ʵ�鱾��" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="���ӻ�԰���ƺã�����ã�С�������ã�ʵ������� ʵ�鱾��"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF4" style="display: none;">
                    <?php if(is_array($dataNon)): $i = 0; $__LIST__ = $dataNon;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[ѧ����Է]������ ѧ����Է �ϱ�ͨ͸ ��װ��˰ 68��ѧ���� ������" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[ѧ����Է]������ ѧ����Է �ϱ�ͨ͸ ��װ��˰ 68��ѧ���� ������"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF5" style="display: none;">
                    <?php if(is_array($dataMet)): $i = 0; $__LIST__ = $dataMet;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[����ʱ��]����������㳡���� �������� ������ ͨ͸���� ��ʱ����" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[����ʱ��]����������㳡���� �������� ������ ͨ͸���� ��ʱ����"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <div class="cl"></div>
            </ul>
                <ul id="cshF6" style="display: none;">
                    <?php if(is_array($dataMao)): $i = 0; $__LIST__ = $dataMao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[�Ͳ����㻪��]�ɳǱ�· ����ë�� �鷿��ѡ �ͼ۳���" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[�Ͳ����㻪��]�ɳǱ�· ����ë�� �鷿��ѡ �ͼ۳���"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
                <ul id="cshF7" style="display: none;">
                    <?php if(is_array($dataJin)): $i = 0; $__LIST__ = $dataJin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank"><img class="lazy" alt="[��������]���ϵز� ������ ��װ ��԰��ѧѧ�� �ϱ�ͨ͸ ���͹���" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px"><?php echo ($row["sale_house_price"]); ?>��</span>
                                <a href="/Home/Sale/Sale_Userinfo/id/<?php echo ($row["sale_id"]); ?>" target="_blank" title="[��������]���ϵز� ������ ��װ ��԰��ѧѧ�� �ϱ�ͨ͸ ���͹���"><?php echo ($row["sale_house_area"]); ?></a>
                            </h5>
                            <p class="dgray14px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="cl"></div>
            </ul>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!--2¥-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">2F</div>
        <h2 class="dgray28px">
            <a href="/hire/" target="_blank">���ⷿԴ</a>
            <span class="tips">
                <?php if(($_SESSION['userid']) == ""): ?><a target="_blank" href="/Home/Index/login" onclick="alert('���ȵ�¼�󷢱�')" class="propaganda_btn">��Ҫ����</a>
                    <?php else: ?>
                    <a target="_blank" href="/Home/Hire/addData" class="propaganda_btn">��Ҫ����</a><?php endif; ?>
                <a href="" target="_blank">��Ҫ����</a>
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
                    <li id="2L1" class="on">����</li>
                    <li id="2L2" class="">
                        ����
                    </li>
                    <li id="2L3" class="">
                        ����
                    </li>
                    <li id="2L4" class="">
                        ������
                    </li>
                    <li id="2L5" class="">
                        �н�
                    </li>
                </ul>
            </div>
            <div class="bd" data-val="1">
                <div id="2L1XX" class="bd_inner" style="display: block;">
                    <ul>
                        <?php if(is_array($dataZen)): $i = 0; $__LIST__ = $dataZen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank"><img class="lazy" alt="�ϳ��������  ��������" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span>
                                    <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank" title="�ϳ��������  ��������"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div style="clear: both"></div>
                    </ul>
                    <?php if(is_array($dataZen)): $i = 0; $__LIST__ = $dataZen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/Home/Hire/hire_Userinfo/id/<?php echo ($row["hire_id"]); ?>" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <div id="2L2XX" class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataHen)): $i = 0; $__LIST__ = $dataHen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span>
                                    <a href="/hire/314296.html" target="_blank" title="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataHen)): $i = 0; $__LIST__ = $dataHen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div id="2L3XX" class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataGen)): $i = 0; $__LIST__ = $dataGen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span>
                                    <a href="/hire/314296.html" target="_blank" title="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataGen)): $i = 0; $__LIST__ = $dataGen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div  id="2L4XX"class="bd_inner hide" style="display: none;">
                    <ul>
                        <?php if(is_array($dataJing)): $i = 0; $__LIST__ = $dataJing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="bd_pic">
                                    <div class="picfont"><?php echo ($row["hire_house_name"]); ?></div>
                                    <a href="/hire/314296.html" target="_blank">
                                        <img class="lazy"  alt="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                                </div>
                                <h5 class="dgray16px3 clearfix">
                                    <span class="red14px"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span>
                                    <a href="/hire/314296.html" target="_blank" title="�Ϸ�ȫ�ϴ�ѧ����ְ���⹫Ԣ(���н�)"><?php echo ($row["hire_house_area"]); ?></a>
                                </h5>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="cl"></div>
                    </ul>
                    <?php if(is_array($dataJing)): $i = 0; $__LIST__ = $dataJing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl class="floor_two_dl">
                            <a href="/hire/315187.html" target="_blank">
                                <dt><?php echo ($row["hire_house_name"]); ?></dt>
                                <dd><?php echo ($row["hire_house_area"]); ?><span><?php echo ($row["hire_house_bedroom"]); echo ($row["hire_house_parlor"]); ?></span></dd>
                                <dd class="bor_non"><?php echo ($row["hire_house_acreage"]); ?>m<sup>2</sup><span class="money_tips"><?php echo ($row["hire_house_price"]); ?>Ԫ/��</span></dd>
                            </a>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div  id="2L5XX"class="bd_inner hide" style="display: none;">
                    <ul>
                        <li>
                            <div class="bd_pic">
                                <div class="picfont">��԰С��</div>
                                <a href="/hire/308896.html" target="_blank"><img class="lazy" data-original="http://img3.hfhouse.com/oldhouse/cache_b/11/0410/2011041079715689.JPG" alt="�ϳ�·����һ��" src="http://img3.hfhouse.com/oldhouse/cache_b/11/0410/2011041079715689.JPG" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <span class="red14px">1000Ԫ/��</span>
                                <a href="/hire/308896.html" target="_blank" title="�ϳ�·����һ��">������</a>
                            </h5>
                        </li><li>
                        <div class="bd_pic">
                            <div class="picfont">������й㳡</div>
                            <a href="/hire/308882.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/05/1441420863_457500.jpg" alt="��ɽ·������й㳡1��1��1��" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/05/1441420863_457500.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">1500Ԫ/��</span>
                            <a href="/hire/308882.html" target="_blank" title="��ɽ·������й㳡1��1��1��">������</a>
                        </h5>
                    </li><li>
                        <div class="bd_pic">
                            <div class="picfont">���ǹ㳡</div>
                            <a href="/hire/308942.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441623895_839286.jpg" alt="С���ʹ�羰ϡȱ���;Ӽ���ѡ" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441623895_839286.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">2000Ԫ/��</span>
                            <a href="/hire/308942.html" target="_blank" title="С���ʹ�羰ϡȱ���;Ӽ���ѡ">������</a>
                        </h5>
                    </li><li>
                        <div class="bd_pic">
                            <div class="picfont">�㵤���л�԰</div>
                            <a href="/hire/308939.html" target="_blank"><img class="lazy" data-original="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441622436_414731.jpg" alt="С���ʹ�羰ϡȱ���;Ӽ���ѡ" src="http://img2.xkhouse.com/hfhouse/oldhouse/bimg/2015/09/08/1441622436_414731.jpg" style="display: inline;"></a>
                        </div>
                        <h5 class="dgray16px3 clearfix">
                            <span class="red14px">1800Ԫ/��</span>
                            <a href="/hire/308939.html" target="_blank" title="С���ʹ�羰ϡȱ���;Ӽ���ѡ">������</a>
                        </h5>
                    </li>                        <div class="cl"></div>
                    </ul>
                    <div class="cl"></div>
                    <dl class="floor_two_dl">
                        <a href="/hire/308938.html" target="_blank">
                            <dt></dt>
                            <dd>������<span>����һ��</span></dd>
                            <dd class="bor_non">103m<sup>2</sup><span class="money_tips">1600Ԫ/��</span></dd>
                        </a>
                    </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/306153.html" target="_blank">
                        <dt>�ؿ��԰</dt>
                        <dd>������<span>���Ҷ���</span></dd>
                        <dd class="bor_non">131m<sup>2</sup><span class="money_tips">2000Ԫ/��</span></dd>
                    </a>
                </dl><dl class="floor_two_dl">
                    <a href="/hire/305495.html" target="_blank">
                        <dt></dt>
                        <dd>������<span>���Ҷ���</span></dd>
                        <dd class="bor_non">82m<sup>2</sup><span class="money_tips">1800Ԫ/��</span></dd>
                    </a>
                </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/305554.html" target="_blank">
                        <dt>�ļ���԰</dt>
                        <dd>������<span>���Ҷ���</span></dd>
                        <dd class="bor_non">105m<sup>2</sup><span class="money_tips">1900Ԫ/��</span></dd>
                    </a>
                </dl><dl class="floor_two_dl">
                    <a href="/hire/305834.html" target="_blank">
                        <dt>��������С��</dt>
                        <dd>������<span>����һ��</span></dd>
                        <dd class="bor_non">110m<sup>2</sup><span class="money_tips">1500Ԫ/��</span></dd>
                    </a>
                </dl><dl class="floor_two_dl" style="border: none; margin-left: 20px;">
                    <a href="/hire/305592.html" target="_blank">
                        <dt></dt>
                        <dd>������<span>���Ҷ���</span></dd>
                        <dd class="bor_non">93m<sup>2</sup><span class="money_tips">1800Ԫ/��</span></dd>
                    </a>
                </dl>                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!--3¥-->
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">3F</div>
        <h2 class="dgray28px"><a href="" target="_blank">ѧ����</a></h2>
        <div style="clear: both"></div>
    </div>
    <div class="floor_3fl">
        <div class="floor_3f_tit">
            <ul>
                <li id="xccs" class="on"><a href="">����</a></li>
                <li id="xccz" class=""><a href="">����</a></li>
            </ul>
        </div>
        <div id="xccsIma" class="floor_3f_con hide">
            <div class="floor_3f_inner">
                <ul>
                    <?php if(is_array($dataSch)): $i = 0; $__LIST__ = $dataSch;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                            <div class="bd_pic">
                                <div class="picfont"><?php echo ($row["sale_house_title"]); ?></div>
                                <a href="/sale/5563330.html" target="_blank"><img class="lazy" alt="�����������»�" src="/Uploads/<?php echo ($row["sale_house_photo_1"]); ?>" style="display: inline;"></a>
                            </div>
                            <h5 class="dgray16px3 clearfix">
                                <a href="/sale/5563330.html" target="_blank" title="��������һ��ѧ"></a>
                            </h5>
                            <p class="dgray12px9"><?php echo ($row["sale_house_bedroom"]); echo ($row["sale_house_parlor"]); ?> | <?php echo ($row["sale_house_acreage"]); ?>�O | <?php echo ($row["sale_house_decorate"]); ?><span class="red14px fr"><?php echo ($row["sale_house_price"]); ?>��</span></p>
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
                        <div class="picfont">����ϳ���</div>
                        <a href="/hire/315912.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476408413905479.jpg" alt="����ϳ���" src="http://uploadcdn.xkhouse.com/attachment/image/2016/1014/1476408413905479.jpg" style="display: inline;"></a>
                    </div>
                    <h5 class="dgray16px3 clearfix">
                        <a href="/hire/315912.html" target="_blank" title="�Ϸ��е���ʮ����ѧ����У����">�Ϸ��е���ʮ����ѧ����У����</a>
                    </h5>
                    <p class="dgray12px9">���� | 133�O | ��װ<span class="red14px fr">1800Ԫ/��</span></p>
                </li><li>
                <div class="bd_pic">
                    <div class="picfont">�����������»�</div>
                    <a href="/hire/315856.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161011/20161011195842_71328.jpg" alt="�����������»�" src="http://uploadcdn.xkhouse.com/attachment/image/20161011/20161011195842_71328.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315856.html" target="_blank" title="��������һ��ѧ">��������һ��ѧ</a>
                </h5>
                <p class="dgray12px9">һ�� | 135�O | ë��<span class="red14px fr">16200Ԫ/��</span></p>
            </li><li>
                <div class="bd_pic">
                    <div class="picfont">�������ƹ���</div>
                    <a href="/hire/315997.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020114222_73217.jpg" alt="�������ƹ���" src="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020114222_73217.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315997.html" target="_blank" title="�Ϸ��е���ʮ����ѧ����У����">�Ϸ��е���ʮ����ѧ����У����</a>
                </h5>
                <p class="dgray12px9">���� | 96�O | װ��/ë��<span class="red14px fr">1450Ԫ/��</span></p>
            </li><li>
                <div class="bd_pic">
                    <div class="picfont">������Ƴ�</div>
                    <a href="/hire/315996.html" target="_blank"><img class="lazy" data-original="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020113112_47479.jpg" alt="������Ƴ�" src="http://uploadcdn.xkhouse.com/attachment/image/20161020/20161020113112_47479.jpg" style="display: inline;"></a>
                </div>
                <h5 class="dgray16px3 clearfix">
                    <a href="/hire/315996.html" target="_blank" title="�Ϸ��е���ʮ����ѧ����У����">�Ϸ��е���ʮ����ѧ����У����</a>
                </h5>
                <p class="dgray12px9">���� | 105�O | װ��/ë��<span class="red14px fr">1500Ԫ/��</span></p>
            </li>
                    <div style="clear: both"></div>
            </ul>
            </div>
        </div>
    </div>
    <div class="floor_3fr">
        <div class="floor_3fr_tit"><a href="http://news.hfhouse.com/list182/" target="_blank">��Ʒ��Դ</a></div>
        <ul>
            <li><a href="http://news.hfhouse.com/html/2474121.html" target="_blank">���׾�װ�������ס ®�����ʶ��ַ��Ƽ�</a></li><li><a href="http://news.hfhouse.com/html/2472698.html" target="_blank">�޹���¥�н�������� ���������ʶ��ַ�</a></li><li><a href="http://news.hfhouse.com/html/2471835.html" target="_blank">������Уѧ������Ʒ�÷� �������ʶ��ַ�</a></li><li><a href="http://news.hfhouse.com/html/2471786.html" target="_blank">�Ϸ��޹������ѽ����� ��������ѧ������</a></li><li><a href="http://news.hfhouse.com/html/2471407.html" target="_blank">�޹������»��еͼ۷����� ®������Ʒ��</a></li>        </ul>
    </div>
    <div style="clear: both"></div>
</div>
<!--4¥-->
<a href="#4L"></a>
<div class="warp">
    <div class="floor_menu">
        <div class="floor_menu_a">4F</div>
        <h2 class="dgray28px"><a href="javascript:void(0)" target="_blank">��</a> �� <a href="javascript:void(0)" target="_blank">����</a></h2>
        <div class="cl"></div>
    </div>
    <div class="floor_4fl">
        <div class="floor_4f_tit">
            <ul>
                <li id="qiugou" class=""><a href="">��</a></li>
                <li id="qiuzu" class="on"><a href="">����</a></li>
                <div style="clear: both"></div>
            </ul>
        </div>
        <div id="qiugouF" class="floor_4f_con hide">
            <a href="/buy/3823.html" title="" target="_blank">
                <dl>
                    <dt>���Ĺ������ǳ����� </dt>
                    <dd>����һ��</dd>
                    <dd class="money_4f">70~90��</dd>
                </dl>
            </a><a href="/buy/3822.html" title="" target="_blank">
            <dl>
                <dt>��ѧ���� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/buy/3821.html" title="" target="_blank">
            <dl>
                <dt>��ס��һ�� </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">100~130��</dd>
            </dl>
        </a><a href="/buy/3820.html" title="" target="_blank">
            <dl>
                <dt>�󹺰�ҽ����Ժ��������Ʒ�� </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/buy/3818.html" title="" target="_blank">
            <dl>
                <dt>����Ⱥ�塣�ʵ��ͺ�֤����ȫ </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">80~90��</dd>
            </dl>
        </a><a href="/buy/3817.html" title="" target="_blank">
            <dl>
                <dt>ס����  </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/buy/3815.html" title="" target="_blank">
            <dl>
                <dt>�󹺺Ϸʶ���ѧ���� </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">70~110��</dd>
            </dl>
        </a><a href="/buy/3814.html" title="" target="_blank">
            <dl>
                <dt>��סլ�÷���������£� </dt>
                <dd>����</dd>
                <dd class="money_4f">90~110��</dd>
            </dl>
        </a>
        </div>
        <div id="qiuzuF" style="display: none" class="floor_4f_con">
            <a href="/demand/3757.html" title="" target="_blank">
                <dl>
                    <dt>��Դ�㳡������Դ </dt>
                    <dd>����һ��</dd>
                    <dd class="money_4f">1300~1500Ԫ/��</dd>
                </dl>
            </a><a href="/demand/3753.html" title="" target="_blank">
            <dl>
                <dt>����̫����·��������Է�򸽽��׷�һ�� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/demand/3723.html" title="" target="_blank">
            <dl>
                <dt>����סլ���������� </dt>
                <dd>����һ��</dd>
                <dd class="money_4f">800~1300Ԫ/��</dd>
            </dl>
        </a><a href="/demand/3713.html" title="" target="_blank">
            <dl>
                <dt>Ҫ��˫��̨���������͸����� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/demand/3707.html" title="" target="_blank">
            <dl>
                <dt>ʤ��·����Ȫ·���ں��� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/demand/3706.html" title="" target="_blank">
            <dl>
                <dt>�������߹��ͳ��ܱ�ס�� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/demand/3702.html" title="" target="_blank">
            <dl>
                <dt>�ںϷʽ��ѧУ������һ�׷��� </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a><a href="/demand/3701.html" title="" target="_blank">
            <dl>
                <dt>���ھ��仨԰��һ��һ�������ⷿ </dt>
                <dd>����</dd>
                <dd class="money_4f">����</dd>
            </dl>
        </a>
        </div>
    </div>
    <div class="floor_4fr">
        <ul class="floor_4fr_tit">
            <li><a href="">��ʦ����</a></li>
        </ul>
        <div style="clear: both"></div>
        <div class="floor_4fr_con hide">
            <div class="floor_4fr_con_inner" style="overflow: hidden;">
                <dl>
                    <dt><i>Q</i><span><a href="/lawyer/18255.html" target="_blank">��Ԭ���: 2016��3��23�գ���ͬ�㷽�Լ��н�Ϸʾ��Բ�����Ӫ���߻����޹�˾��ͬǩ���˶��ַ�����������ͬ��ǩ����ͬǰ�Ѹ�֪�㷽��������Ȩ�����Ϲ���ǰ���˲Ʋ�����û������Ȩ�����������Ϲ���ͬ�⽫���ݳ������ʸú�ͬӦ������Ч����ͬ���ϡ��ҷ����������Ѿ�֧���Ķ���10000Ԫ������5��10��ǰ��������˻��Ϳ������Զ�����ʽ��֪���ҡ��ҷ��ἰʱ��������  ������Ϊ�Զ����������ش˸�֪��
                        �����н飬����ǩ���ĺ�ͬ����д��ǩ�˳е���Ӧ�ķ������Σ������Ļ���û�����ã���������������������Ѱ���ɰ�����</a><span></span></span></dt>
                    <div class="cl"></div>
                </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18202.html" target="_blank">����~����������Ҫ��ѯһ�£�����1�¿��н�������̵ķ��ӣ����뷿����ͩ��·���󷿲�ǩ����ͬ��������1��Ķ�����������δ�壬Ҫȥ����ԤԼ�����ʱ˵���4�·����̻����ꡣ�����Ѿ�4�·��ˣ��ڼ��δߴٷ���������û��Ч�������ո�֪Ҫ�Ŷӵ�5�·ݣ����Ѿ������ŶԷ�������Ҫ�����л�ִ�����Ż�ִ�ҵ�������ʶ���˵�֪����3�²�ȥ�Ŷӣ�5���Ѿ��ܿ��ˡ��о���ƭ���Ҳ鿴��ʱǩ���ĺ�ͬ���ַ��ֺ�ͬ��ֻ�涨��Ҫ�ں�ʱ�����׸���û���κι涨����������Ҷ���������ɿҲ�Ƿ��������֣���һ���ڵ�ʱ��Ϊ�Ҳ��˽�Ҳ�����н�������ʲôҲû�з��֣��������ʵ��Ҳ���ֱ���ҷ������ʣ��������н鴦Ѱ��˵�������н黥����Ƥ��ֻ��˵�Ƿ���û�а�ʱ������Գٳ�û�гɽ���������û�й�ϵ������֪���������н�Ĺ�ϵ���ã�����ϣ��Ѱ����ʦ�İ�������֪���Ҹ���ô�죿</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18190.html" target="_blank">��ã��ҺϷʻ�վ�������������г�һ�ڶ�¥���̿���������Ǯ�����׻�����������Щ����лл</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/18180.html" target="_blank">�����������ںϷʷ���һֱ�ǣ����ķ����ǵ�̫�ߣ�һ�ļ����Ҹ�������һ���ϷʻԴ﷿����˾�°���·��˾��ҵ��Ա��ҵ��Ա���ֽУ���֥ĳ��3��10�������Ҹ��׸���ҵ��Ա��֥ɭȥ����λ�ڱ��������˺�Էһ��21��104���䡷����ʱ����֮���Ҹ��׷ǳ����⣬Ȼ��绰���һؼ��ٴ�ȥ������������֣�ݣ����������Ҳ���ú����⣬ҵ��Ա��֥ĳ˵����֤�ϵ������62ƽ�����Ƿ���ʵ�����Ŀ�ⳬ��80ƽ��3�ң���ҵ��Ա��֥ĳ˵������������͵ģ�����ȱ�����飬���ϵ�ʱ�Ϸʷ�������̫�������ż���Ȼ���û��ʵ�ʹ���̫�ࣨ��ʱ̫���ⷿ�����˲��ڣ���ҵ��Ա��֥ĳ˵���ȷ��û�����֪ͨ�������������𣻾��������Һ��Ҹ��׶�����Ϊ�淿��ҵ��Ա��֥ĳ˵��˵�����Ҵ��Һ��Ҹ���ȥ���ķ��Ӿ��Ƿ�����˵�ķ��ӣ��������磬���ݷ����н�Ҫ��ȥλ����������վ����ĻԴ﷿���ֹ�˾ȥǩ������ȷ�Ϻ�ͬ����������Ѻ��2��Ԫ�������ڷ���ʵ������ȷ���֤������Ҹ���һֱ�Ƚϻ��ɣ�һ����ȥ�˺�ԷС��ȥ��3��4�Σ������˺�ԷС����1�ڡ�2�ڣ�����3��4�ڣ������з����˺�Է3��Ҳ��һ��21��104���䣨�����ǿ��ķ����ǡ��˺�Էһ��21��104���䡷�������з��ֹ�����ô����2��һģһ����¥���ͷ��ƺţ���Ϊ�պ�Ҫ�����׸���͸���һ����������Ҫ�Ⱥͷ������н�һ����ȥ��������ˮ������Щ��������Ȼ�������緢�ֲ��ԣ������ǿ��ķ��ͺ�ͬ�ϵĲ���ͬһ�ڵķ��ӣ����Ǿͱ���������������Ǵ����Ϸ��������ɳ�������˵Ҫ���⣬ҵ��Ա��֥ɭ�绰������˾�ֹ�˾����е��ɳ�������˵ֻ���������е��⣬���������¡��ΰ���������Ȩ���֣����������⵽�����˵���ڶ���ȥ��������վ����Ĺ�˾��Ѻ����������������һֱ�ڵȡ�����֮һ�仰����Ҫ����С�ģ��Դ﷿�����ɿ��������Դ﷿����ô��˾���ںϷ���ô��ֵ꣬���ǿ����ƿͻ�����ҵ���ģ��������ʾ�����ô��ģ�������һ���Ӵ��£����Ǿ���ô��Ū�ͻ�����������������ҵ��Ա��֥ɭ���ĺ��ڣ������ʻԴ﷿������ƽʱ��ô������ ��������ʦ����������Ը�������</a><span></span></span></dt>
                <div class="cl"></div>
            </dl><dl>
                <dt><i>Q</i><span><a href="/lawyer/17593.html" target="_blank">���� ��2011���ڰ����򸣾���������ķ��ӣ���ʱ�ǹ��������ҵ����һ����ķ��ӣ���ֹ���ڷ���֤û���õ���������˵����ķ��ӷ���֤ѹ�����У��ȴ�������˲����õ��������������ô ����лл?</a><span></span></span></dt>
                <div class="cl"></div>
            </dl>            </div>
            <!--<a href="javascript:;" class="floor_4fr_assessment" id="btnZixun">��Ҫ��ѯ</a>-->
            <a href="/Home/Lawyer/index" class="floor_4fr_assessment" id="btnZixun">��Ҫ��ѯ</a>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<div class="floatnav" id="floatnav">
    <ul>
        <li class="icon_one"><a id="k-jumpTo0" style="cursor: pointer" class="">���۷�Դ</a></li>
        <li class="icon_two"><a id="k-jumpTo1" style="cursor: pointer" class="">���ⷿԴ</a></li>
        <li class="icon_three"><a id="k-jumpTo2" style="cursor: pointer" class="">ѧ����</a></li>
        <li class="icon_four"><a id="k-jumpTo3" style="cursor: pointer" class="">������</a></li>
        <!--<li class="icon_five"><a id="k-jumpTo4" style="cursor: pointer" class="">¥�п챨</a></li>-->
        <li class="icon_login"><a href="login" target="_blank" style="color:#fff"><!--��ת��¼ҳ--></a></li>
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
<!--β������-->
<div class="bottom">
    <div class="wrap">
        <div class="friend_link dgray14px9" id="hutia"><b>�������ӣ�</b>
            <a href="http://newhouse.letfind.com.cn/" title="����¥�� " target="_blank">����¥��</a><a href="http://sz.fangjia.com/" title="���ڷ��� " target="_blank">���ڷ���</a><a href="http://www.tengfun.com/" title="���ݷ����� " target="_blank">���ݷ�����</a><a href="http://www.dezhong365.com" title="���ڽ��� " target="_blank">���ڽ���</a><a href="http://www.qiuxingwang.cn/ " title="������ " target="_blank">������</a><a href="http://www.xinwenquan.org" title="�������� " target="_blank">��������</a><a href="http://www.xkhouse.com/" title="�ǿյز�  " target="_blank">�ǿյز� </a><a href="http://www.guangyuanol.cn" title="�������� " target="_blank">��������</a><a href="http://zz.mnw.cn/" title="���������� " target="_blank">����������</a><a href="http://newhouse.fy.ahhouse.com/5155/" title="������Դ���ó� " target="_blank">������Դ���ó�</a>            </div>
        <div class="wx clearfix">
            <dl>
                <dt><img src="/Public/image/xfh_ewm.png"></dt>
                <dd><p class="f16"><b>�Ƿ����ƶ��ͻ���</b></p>
                    <p class="f12">�÷���������ת����</p>
                    <p><a href="https://itunes.apple.com/cn/app/id786090055" target="_blank" rel="nofollow">
                        <img src="/Public/image/iphone.gif" width="71" height="24">
                    </a>&nbsp;&nbsp;<a href="http://app.xkhouse.com/down.php" target="_blank" rel="nofollow">
                        <img src="/Public/image/android.gif" width="74" height="24"></a></p>
                </dd>
            </dl>

            <dl>
                <dt><img src="/Public/image/zlyl1.gif"></dt>
                <dd><p class="f16"><b>���������ƶ��ͻ���</b></p>
                    <p class="f12">���ھ������</p>
                    <p><a href="http://nextdoors.com.cn/hfwzone.ipa" target="_blank" rel="nofollow">
                        <img src="/Public/image/iphone.gif" width="71" height="24">
                    </a>&nbsp;&nbsp;<a href="http://nextdoors.com.cn/XKFriend.apk" target="_blank" rel="nofollow">
                        <img src="/Public/image/android.gif" width="74" height="24"></a></p>
                </dd>
            </dl>
            <dl>
                <dt><img src="/Public/image/ewm.gif"></dt>
                <dd><p class="f16"><b>�ǿ��Źٷ�΢��</b></p>
                    <p class="f12">��ָ�ƶ����������շ��������Żݻ</p>
                </dd>
            </dl>
            <div style="clear: both"></div>
        </div>
        <div class="links-inner"><a target="_blank" href="http://www.hfhouse.com/company/about.html" rel="nofollow">��˾���</a><span>|</span><a target="_blank" href="http://www.nextdoors.com.cn/main.html" rel="nofollow">��������</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/ggfw.html" rel="nofollow">������</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/join.html" rel="nofollow">��ƸӢ��</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/contact.html" rel="nofollow">��ϵ����</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/licheng.html" rel="nofollow">��������</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/sitemap.html" rel="nofollow">��վ��ͼ</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/privacy.html" rel="nofollow">��Ȩ����</a><span>|</span><a target="_blank" href="http://www.hfhouse.com/company/guwen.html" rel="nofollow">���ɹ���</a><span>|</span><a target="_blank" href="http://aixin.xkhouse.com/" rel="nofollow">�ǿհ��Ĵ��ƻ���</a>
        </div>

        <div class="foot-copy dgray14px9">��������Ӫ���֤:
            <a href="http://www.miibeian.gov.cn/" target="_blank"></a>
            <a href="http://www.miibeian.gov.cn/" target="_blank">ICP֤��B2-20130008</a>
            <a href="http://news.hfhouse.com/html/225806.html" target="_blank">�㲥���ӽ�Ŀ������Ӫ���֤��(��)�ֵ�78��</a>
            <a href="http://hefei.cyberpolice.cn/" target="_blank">����</a><br>2000-2016�Ϸ��ǿ�Ͷ�ʹ������޹�˾���ͷ��绰:400-887-1216��0551-64665370��Email:xk#xkhouse.com(#���滻��@) </div>
        </div>
    </div>
</div>
</body>
</html>