<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="gbk">
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="/Public/css/agent.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/hfhouse.css"/>
<script type="text/javascript" src="/Public/js/jquery.js"></script>
<body>
<script type="text/javascript">
    $(function(){
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


<!--���� Begin-->
<div class="topNav">
    <div class="topNav-width clearfix">
        <div class="tnLeft">
            <dd><h3 style="font-size: 100%;"><a href="/Home/Index/index" style="color: white">�ҷ���</a></h3></dd>
            <dd id="anhui"><h3 style="font-size: 100%;"><a href="http://www.xkhouse.com/" style="color: white">����<i></i></a></h3><ul id="anhuisheng" class="xk_area" style="display: none;">
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
                <a href="" title="����ɽ���ز�������" target="_blank">����ɽ</a>
            </ul>
            </dd>
            <dd><h3 style="font-size: 100%;"><a href="http://www.xkhouse.com/" style="color: white">�ƶ���Ʒ<i></i></a></h3></dd>
        </div>
        <div class="tnRight">
            <?php if(($_SESSION['userid']) == ""): ?><dd><h3 style="font-size: 100%;"><a href="/Home/Index/login" style="color: white">��¼</a></h3></dd>
                <?php else: ?>
                <dd><h3 style="font-size: 100%;"><a href="login" style="color: white"><?php echo (session('username')); ?></a></h3></dd>
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
                    <li style="list-style-type: none"><b class="f16"><a href="/Home/Index/index" target="_blank">���ַ�</a></b>
                        <p class="f14">
                            <a href="/Home/Index/index" target="_blank">����������</a>
                            <a href="/Home/Index/index" target="_blank">����</a>
                            <a href="/Home/Index/index" target="_blank">��ʦ����</a>
                            <a href="/Home/Index/index" target="_blank">�ⷿ</a>
                            <a href="/Home/Agent/agent" target="_blank">����������</a>
                        </p>
                    </li>
                </ul>
            </dd>
        </div>
    </div>
</div>
<!--�����˵���ҳ�� Begin-->
<div class="agent_all">

    <!-- ���̽���ҳ����ͼ-->
    <div class="agent_banner">
        <div class="agent_title">
            <?php echo ($res["mid_realname"]); ?>�ķ�Դ����

        </div>
        <div class="agent_info">
            ��Ч��Դ���ۣ�<span style="color: #6ab4ff"><?php echo (agent_count($id)); ?></span>
            ���⣺<span style="color: #6ab4ff">0</span>
        </div>

    </div>

    <!-- ���̹���-->
    <div class="agent_notice">
        <span style="font-weight: bold;font-size: 18px">���棺</span>

    </div>


    <!-- ��������-->
    <div class="agent_content">
        <!-- ��������Ϣ-->
        <div class="agent_information">

            <div class="agent_personal">   <!-- ͷ��-->
                <div class="agent_photo">
                    <?php if(($res["mid_photo"]) == ""): ?><img height="112" width="80" src="/Public/image/u-pic.png">
                        <?php else: ?>
                        <img height="112" width="80" src='/../Uploads/<?php echo ($res["mid_photo"]); ?>'><?php endif; ?>
                    <div><?php echo ($res["mid_realname"]); ?></div>
                </div>

                <!-- �ֻ���-->
                <div class="agent_mobile">
                    <a href=""><?php echo ($res["mid_phone"]); ?></a>
                </div>

                <!-- ������Ϣ-->
                <div class="agent_work_information">
                    <div class="agent_work">
                        <p>
                            <a><img src="/Public/image/agent_qq.jpg"></a>&nbsp;&nbsp;
                            <a><img src="/Public/image/agent_email.jpg"></a>
                        </p>
                        <p>��������<?php echo ($res["mid_region"]); ?></p>
                        <p>������˾��<?php echo ($res["mid_company"]); ?></p>
                        <p>ע��ʱ�䣺<?php echo (date('Y-m-d',$res["mid_regtime"])); ?></p>
                    </div>
                </div>

            </div>
            <!--���ҽ���-->

            <div class="agent_myself">

                <div style="font-size: 18px;font-weight: bold">���ҽ���:</div>

                <div>��Ƶĳ���Գ</div>
            </div>

        </div>

        <!-- ���̷�Դ��Ϣ-->

        <div class="agent_house">

            <div class="agent_type">
                <a  id="agent_sell" class="agent_sell" style="color: grey;background-color: white">����</a>
                <a  id="agent_rent" class="agent_rent" style="color:whitesmoke ;background-color: #00ae66">����</a>
            </div>
            <script type="text/javascript">
                $(function(){
//
                    $('#agent_rent').click(function(){

                           window.location.href='/Home/Agent/agent_rent/id/<?php echo ($id); ?>'
                    });

                    $('#agent_sell').click(function(){

                           window.location.href='/Home/Agent/agent_shop/id/<?php echo ($id); ?>'

                    })

                })

            </script>


                    <script type="text/javascript">

                        $(function(){

                            $('#region_down').click(function(e) {

                                $('.search_region_list').css('display','');
                                $('.search_room_list').css('display','none');
                                e.stopPropagation();

                            });

                            $('#room_down').click(function(e) {

                                $('.search_room_list').css('display','');
                                $('.search_region_list').css('display','none');
                                e.stopPropagation();

                            });

                            $('body').click(function(){

                                $('.search_region_list').hide();
                                $('.search_room_list').hide();

                            });



                            $('#ss').click(function(){

                                var data = $('#ss').text();
                                $('#region').val(data)

                            });

                            $('#bhu').click(function(){

                                var data = $('#bhu').text();
                                $('#region').val(data)

                            });

                            $('#gx').click(function(){

                                var data = $('#gx').text();
                                $('#region').val(data)

                            });

                            $('#ly').click(function(){

                                var data = $('#ly').text();
                                $('#region').val(data)

                            });


                            $('#jk').click(function(){

                                var data = $('#jk').text();
                                $('#region').val(data)

                            });


                            $('#xz').click(function(){

                                var data = $('#xz').text();
                                $('#region').val(data)

                            });


                            $('#bhe').click(function(){

                                var data = $('#bhe').text();
                                $('#region').val(data)

                            });


                            $('#zw').click(function(){

                                var data = $('#zw').text();
                                $('#region').val(data)

                            });


                            $('#yh').click(function(){

                                var data = $('#yh').text();
                                $('#region').val(data)

                            });


                            $('#bc').click(function(){

                                var data = $('#bc').text();
                                $('#region').val(data)

                            });


                            $('#fx').click(function(){

                                var data = $('#fx').text();
                                $('#region').val(data)

                            });

                            $('#qt').click(function(){

                                var data = $('#qt').text();
                                $('#region').val(data)

                            });

                            $('#fd').click(function(){

                                var data = $('#fd').text();
                                $('#region').val(data)

                            });


                            $('#cf').click(function(){

                                var data = $('#cf').text();
                                $('#region').val(data)

                            });

                            $('#1').click(function(){

                                var data = $('#1').text();
                                $('#room').val(data)

                            });

                            $('#2').click(function(){

                                var data = $('#2').text();
                                $('#room').val(data)

                            });

                            $('#3').click(function(){

                                var data = $('#3').text();
                                $('#room').val(data)

                            });


                            $('#4').click(function(){

                                var data = $('#4').text();
                                $('#room').val(data)

                            });


                            $('#5').click(function(){

                                var data = $('#5').text();
                                $('#room').val(data)

                            });


                            $('#6').click(function(){

                                var data = $('#6').text();
                                $('#room').val(data)

                            })


                        })



                    </script>


            <!-- ����ķ�Դ-->
            <div id="rent_search" class="agent_shop_search">
                <form action="/Home/Agent/agent_rent/id/<?php echo ($id); ?>" method="get">
                    <div class="search_region">
                        <input id="region" readonly type="text" name="region" value="<?php echo $region==''?'����':$region;?>" >
                        <!--<input  readonly type="hidden" name="id" value="">-->
                        <span id="region_down" style="font-size: 1px">��</span>
                    </div>
                    <div class="search_region_list" style="display: none">
                        <ul>
                            <li id="ss">��ɽ��</li>
                            <li id="bhu">������</li>
                            <li id="gx">������</li>
                            <li id="ly">®����</li>
                            <li id="jk">������</li>
                            <li id="xz">��վ��</li>
                            <li id="bhe">������</li>
                            <li id="zw">������</li>
                            <li id="yh">������</li>
                            <li id="bc">��������</li>
                            <li id="fx">������</li>
                            <li id="fd">�ʶ���</li>
                            <li id="cf">������</li>
                            <li id="qt">����</li>
                        </ul>
                    </div>


                    <div class="search_room">
                        <input id="room" readonly type="text" name="room" value="<?php echo $room ==''?'һ��':$room;?>">
                        <span id="room_down" style="font-size: 1px">��</span>

                    </div>
                    <div class="search_room_list" style="display: none">
                        <ul>
                            <li id="1">һ��</li>
                            <li id="2">����</li>
                            <li id="3">����</li>
                            <li id="4">����</li>
                            <li id="5">����</li>
                            <li id="6">��������</li>
                        </ul>
                    </div>

                    <div class="agent_area">
                        <label>���:</label>
                        <input type="text" name="minArea" placeholder="����">
                        <i>--</i>
                        <input type="text" name="maxArea" placeholder="����">
                        <b>�O</b>
                    </div>

                    <div class="agent_rent_money">
                        <label>���:</label>
                        <input type="text" name="minArea" placeholder="����">
                        <i>--</i>
                        <input type="text" name="maxArea" placeholder="����">
                        <b>Ԫ/��</b>
                    </div>

                    <div class="agent_btn">
                        <input type="submit" value="ɸѡ">
                    </div>

                    <div style="clear: both"></div>
                </form>

            </div>

            <!--��Դ��Ϣ-->
            <div id="rent_info" class="agent_house_rent"  style="display: none">
                <!-- ��Դ��Ƭ-->
                <div class="agent_loupan_picture">
                    <a href="" target="_blank">
                        <img src="/Public/image/agent_room_pic.jpg" height="140" width="180">
                    </a>
                </div>

                <!-- ��Դ��Ϣ-->

                <div class="agent_room_info">
                    <div style="font-size: 18px">[�����������»�]�����������»����� &nbsp;&nbsp;&nbsp;<span class="agent_label">��ͼ</span></div>
                    <div class="agent_room_detail">
                        <p>
                            <span>סլ</span>&nbsp;&nbsp;&nbsp;<span>3��2��</span>&nbsp;&nbsp;&nbsp;<span>2/33��</span>&nbsp;&nbsp;&nbsp;<span>�ϱ�</span>&nbsp;&nbsp;&nbsp;<span>���������2015</span><br>
                            <span>�����������»�</span>&nbsp;&nbsp;&nbsp;<span>[������-������-�Ϸ��б���������·������·���ڴ�]</span><br>
                            <span>�����ˣ��޷�</span>&nbsp;&nbsp;&nbsp;<span>���ӵز��ۺ�Է�ֹ�˾ </span>&nbsp;&nbsp;&nbsp;<span>10-20 15:09:34</span>
                            <br><br>
                            <span class="agent_label1">�ɹ��</span>&nbsp;&nbsp;
                            <span class="agent_label2">��ͨ����</span>&nbsp;&nbsp;
                            <span class="agent_label3">������</span>
                        </p>

                        <div class="agent_room_detail_right">
                            <h2 style="color: red">180.00��Ԫ</h2>
                            <h4>���������93.84�O&nbsp;&nbsp;19181.59Ԫ/�O</h4>

                        </div>

                    </div>
                </div>

            </div>


        </div>

        <div style="clear: both"></div>


    </div>

    <script type="text/javascript">
        $('.agent_label1').hover(function(){

            $('.agent_label1').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            })

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });



        $('.agent_label2').hover(function(){

            $('.agent_label2').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });



        $('.agent_label3').hover(function(){

            $('.agent_label3').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });

    </script>

</div>

</body>

</html>