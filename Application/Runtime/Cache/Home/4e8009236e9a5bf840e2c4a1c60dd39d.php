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
<!--����������-->
<link rel="stylesheet" type="text/css" href="/Public/css/agent.css">
<div class="agent_list_all">

    <div>
      <a href="#">����ǰ��λ�ã�</a>
      <a href="/Home/Index/index">�Ϸʶ��ַ�&nbsp;&nbsp;>&nbsp;</a>
      <a href="/Home/Agent/agent">����������</a>
    </div>


    <script type="text/javascript">
        $(function(){
            var a='<?php echo ($area); ?>';
            console.log(a);

            $(".js_area a:contains('"+a+"')").addClass("active");

        })

    </script>

    <div class="agent_region_search">
        <dl class="sear_area" style="border:none;">
            <dt>����</dt>
            <dd class="area_list js_area" style="">
                <a href="/Home/Agent/agent/area/">����</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('��ɽ��');?>">��ɽ��</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('®����');?>">®����</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('��վ��');?>">��վ��</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('��������');?>">��������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('�ʶ���');?>">�ʶ���</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('������');?>">������</a>
                <a href="/Home/Agent/agent/area/<?php echo urlencode('����');?>">����</a>
            </dd>
            <div style="clear: both"></div>
        </dl>
    </div>

     <div class="com_rank">�ۺ�����</div>

      <!-- �������б�-->
    <div class="agent_list">

     <div class="agent_list_right">


        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="list">

              <div class="list_photo">
                  <img src="http://uploadcdn.xkhouse.com/attachment/image/20160913/20160913162049_30715.jpg" height="125" width="94">

              </div>

              <div class="list_info">
                <div class="list_info_left">
                  <div style="font-size: 16px"><?php echo ($row["mid_realname"]); ?></div>
                  <p>�绰��<?php echo ($row["mid_phone"]); ?></p>
                  <p>������˾��<?php echo ($row["mid_company"]); ?></p>
                  <p>��������<?php echo ($row["mid_region"]); ?></p>
                </div>

                  <div class="list_info_right">
                      <span class="check_shop"><a href="/Home/Agent/agent_shop/id/<?php echo ($row["mid_id"]); ?>" target="_blank">�鿴����</a></span>
                      <br>
                      <h5>��Ч��Դ����<span style="color: red"><?php echo (agent_count($row["mid_id"])); ?></span>��������<span style="color: red">0</span>��</h5>
                  </div>

                  <div style="clear: both"></div>
              </div>

              <div style="clear: both"></div>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
         <br>
         <div class="pages"><?php echo ($pager); ?></div>
      </div>



     <div class="agent_list_left">
         <div class="list_left_pic">
             <a href=""><img src="/Public/image/agent_jiaru.jpg" height="66" width="250" alt=""></a>
         </div>

         <div class="room_list">
              <div class="room_type">
                  <span>�������ƽ�</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a id="chushou">����</a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a id="chuzu">����</a>
              </div>


             <!-- ����-->
              <ul class="room_list_info" id="chushou_list">
                  <li>
                      <a href="/sale/5541604.html">
                          <img src="http://uploadcdn.xkhouse.com/attachment/image/20160829/20160829142921_40441.jpg" height="78" width="100" alt="">
                          <p>������-���ٱ���ʱ���㳡</p>
                          <p>2��2��  89.00m?</p>
                          <p>175.00��</p>
                      </a>
                  </li>
              </ul>


             <!-- ����-->

             <ul id="chuzu_list" class="room_list_info" style="display: none">
                 <li>
                     <a href="/sale/5541604.html">
                         <img src="http://uploadcdn.xkhouse.com/attachment/image/20160829/20160829142921_40441.jpg" height="78" width="100" alt="">
                         <p>������-����</p>
                         <p>2��2��  89.00m?</p>
                         <p>175.00��</p>
                     </a>
                 </li>
             </ul>
         </div>


          <script type="text/javascript" src="/Public/js/jquery.js"></script>
           <script type="text/javascript">
                 $(function(){

                     $('#chushou').mousemove(function(){
                           $('#chushou').css('color','#6ab4ff');
                           $('#chuzu_list').css('display','none');
                           $('#chushou_list').css('display','');


                     }).mouseout(function(){

                         $('#chushou').css('color','black');

                     });




                     $('#chuzu').mousemove(function(){
                         $('#chuzu').css('color','#6ab4ff');
                         $('#chuzu_list').css('display','');
                         $('#chushou_list').css('display','none');
                     }).mouseout(function(){

                         $('#chuzu').css('color','black');

                     });


                 })


           </script>

     </div>

     <div style="clear: both"></div>

  </div>

</div>

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