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
    <!--���ǿɰ��ķָ���----------------------------------------------->
    <div>
        <a href="#">����ǰ��λ�ã�</a>
        <a href="#">�Ϸʶ��ַ�&nbsp;&nbsp;>&nbsp;</a>
        <a href="#">��ʦ����</a>
    </div>
    <!--���ǿɰ��ķָ���----------------------------------------------->
    <!--�����л�-->
    <div class="hd">
        <ul>
            <li id="h1" class="active" >
                <a href="/Home/Lawyer/index" style="color: white;" >��������</a>
            </li>
            <li id="h2" class="">
                <a href="/Home/Lawyer/answer">�ѻش�</a>
            </li>
            <li id="h3" class="" >
                <a href="/Home/Lawyer/question">δ�ش�</a>
            </li>
        </ul>
    </div>
    <!--���ǿɰ��ķָ���----------------------------------------------->
    <!--������ѯ-->

    <div class="g-sort" style="margin-top:20px;">
        <div class="d1 clearfix"style="clear: both;display: table;">

            <form action="" method="get" class="u-pinggu" id="formpinggu">
                <input type="text" placeholder="����������" value="" name="count" style="outline: none">
                <a href="javascript:;" class="u-btn-1" onclick="formpinggu.submit()">
                    <img src="/Public/image/sousuo.jpg">

                </a>
                <a href="javascript:" class="u-btn-2" id="btnZixun" onClick="bgDiv.style.display='';loginBox.style.display='';">������ѯ</a>
            </form>

        </div>
    </div>
</div>
<!--���ǿɰ��ķָ���----------------------------------------------->
<div class="lawyer_all clearfix" >
    <!--����б�-->

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
                    <!--<tr style=""><td align="right"COLSPAN="2"><?php echo ($w); ?>���ش�</td></tr>-->
                    <tr><td><br></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <div class="pc"><?php echo ($pager->show()); ?></div>
        </div>
    </div>
    <!--�ұ��б�-->
    <div class="wrap250-1">
        <div class="m-more-new">
            <h2>�г���̬</h2>
            <p>

                <a href="">

                    �г���̬���±�����λ��
                </a>
            </p>

        </div>

        <div class="m-more-new">
            <h2>���·�Դ</h2>
            <ul style="clear:both;">
                <li>
                    <!--��Դ����ҳ�泬����λ��-->
                    <a href="">
                        <!--��ԴͼƬ���λ��-->
                        <img src="" height="78" width="100" alt>
                        <p class="h40hidden">
                            ��Դ���ƴ��λ��

                        </p>
                        <p>
                            ���ʹ��λ��

                        </p>
                        <i>
                            ��Դ�۸���λ��

                        </i>
                    </a>
                </li>
                <li>
                    <!--��Դ����ҳ�泬����λ��-->
                    <a href="">
                        <!--��ԴͼƬ���λ��-->
                        <img src="" height="78" width="100" alt>
                        <p class="h40hidden">
                            ��Դ���ƴ��λ��

                        </p>
                        <p>
                            ���ʹ��λ��

                        </p>
                        <i>
                            ��Դ�۸���λ��

                        </i>
                    </a>
                </li>

            </ul>

        </div>
    </div>


</div>


<!--���ǿɰ��ķָ���----------------------��������ѯ����------------------------->

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
        <span class="t1">��Ҫ��ѯ</span>
        <span class="t2" title="�ر�" onClick="login.style.display='none';bgDiv.style.display='none'">X</span>
    </div>
    <div class="login">


        <form method="post" action="/Home/Lawyer/index">
            <div>
                <textarea name="problem" style="width: 566px;height:120px;margin: 25px;resize: none"required="required">���ݲ���Ϊ��</textarea>
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
<!--���ǿɰ��ķָ���----------------------------------------------->




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