<?php
// ��ܰ��ʾ����վ����ǰ ���ȼ��ط��� �����ޱߣ�
/*
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`---'\____
             .'  \\|     |//  `.
            /  \\|||  :  |||//  \
           /  _||||| -:- |||||-  \
           |   | \\\  -  /// |   |
           | \_|  ''\---/''  |   |
           \  .-\__  `-`  ___/-. /
         ___`. .'  /--.--\  `. . __
      ."" '<  `.___\_<|>_/___.'  >'"".
     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
     \  \ `-.   \_ __\ /__ _/   .-` /  /
======`-.____`-.___\_____/___.-`____.-'======
                   `=---='
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
         ���汣��       ����BUG

                  ��Ի:
    д��¥��д�ּ䣬д�ּ������Ա��
    ������Աд�������ó��򻻾�Ǯ��
    ����ֻ������ߣ�������������ߣ�
    ��������ո��գ����������긴�ꡣ
    ��Ը�������Լ䣬��Ը�Ϲ��ϰ�ǰ��
    ���۱������Ȥ���������г���Ա��
    ����Ц��߯��񲣬��Ц�Լ���̫����
    ��������Ư���ã��ĸ���ó���Ա��
*/
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/19
 * Time: 10:33
 */

namespace Home\Controller;


use Think\Controller;
use Think\Page;

class AgentController extends Controller{

//�����������б�ҳ

//������ʾҳ��

     public function agent(){
         $area=I('get.area');

//         var_dump($area);

         if($area!=''){

             $arr['mid_region']=$area;
         }


          $obj=M('Agent_mid');

         $count=$obj->where($arr)->count();

         $now_page=I('get.p',1);
         $page_num=5;
         $star_page=($now_page-1)*$page_num;


          $data=$obj->where($arr)->limit($star_page,$page_num)->select();

//              var_dump($data);

         $pager =new Page($count,$page_num);
         $pager -> setConfig('header','<span class="rows">��<b>%TOTAL_ROW%</b>����¼ ��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ</span>');
         $pager -> setConfig('prev', '��һҳ');
         $pager -> setConfig('next','��һҳ');
         $pager -> setConfig('last','ĩҳ');
         $pager -> setConfig('first','��ҳ');
         $pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
         $pager->rollPage = 5;
         $pager->lastSuffix = false;
         $show=$pager->show();

          $this->pager=$show;
          $this->area=$area;
          $this->data=$data;


          $this->display();


     }


//���������˵���ҳ

//����ҳ��

     public function agent_shop($id){

        layout(false);

        $obj=M('Sale_infomation');

        $region=I('get.region');

        $room=I('get.room');

        $minArea=I('get.minArea/d');
//         var_dump($minArea);

        $maxArea=I('get.maxArea/d');
//        var_dump($maxArea);

        $minRent=I('get.minRent/d');


        $maxRent=I('get.maxRent/d');

        if($region!='����' && $region != ''){
            $search['Sale_house_area']=$region;
        }
        if ($room != ''){
            $search['Sale_house_bedroom']=$room;
        }

        if ($minArea!=0 && $maxArea!=0){
            if ($minArea>$maxArea){
                $tmp = $minArea;
                $minArea = $maxArea;
                $maxArea = $tmp;
            }
            $search['Sale_house_acreage']=array('between',"$minArea,$maxArea");
        }

        if ($minRent!=0 && $maxRent!=0){
            if ($minRent>$maxRent){
                $tmp = $minRent;
                $minRent = $maxRent;
                $maxRent = $tmp;
            }
            $search['Sale_house_price']=array('between',"$minRent,$maxRent");
        }


         $search['agent_id']=$id;

         $count=$obj->where($search)->count();
         $now_page=I('get.p',1);
         $page_num=5;
         $star_page=($now_page-1)*$page_num;

        $data=$obj->where($search)->limit($star_page,$page_num)->join('LEFT JOIN agent_mid ON sale_infomation.agent_id = agent_mid.mid_id ')->select();
         $pager =new Page($count,$page_num);
         $pager -> setConfig('header','<span class="rows">��<b>%TOTAL_ROW%</b>����¼ ��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ</span>');
         $pager -> setConfig('prev', '��һҳ');
         $pager -> setConfig('next','��һҳ');
         $pager -> setConfig('last','ĩҳ');
         $pager -> setConfig('first','��ҳ');
         $pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
         $pager->rollPage = 5;
         $pager->lastSuffix = false;
         $show=$pager->show();

         foreach ($data as &$row) {
             $tmpPhoto = $row['sale_house_photo'];
             $tmpPhoto = explode(",",$tmpPhoto);
             if (count($tmpPhoto)){
                 $row['sale_house_photo_1'] = $tmpPhoto[0];
             }
         }


//        var_dump($obj->getLastSql());

//        var_dump($data);
       $agent=M('Agent_mid');
       $res=$agent->where("mid_id = $id")->find();
        $this->res=$res;
        $this->pager=$show;
        $this->region=$region;
        $this->room=$room;
        $this->minArea=$minArea;
        $this->maxArea=$maxArea;
        $this->minRent=$minRent;
        $this->maxRent=$maxRent;
        $this->data=$data;
        $this->id=$id;

        $this->display();


     }


    //����ҳ��

     public function agent_rent($id){
          layout(false);


         $region=I('get.region');
//         var_dump($region);
         $room=I('get.room');
//         var_dump($room);

         $minArea=I('get.minArea');
//         var_dump($minArea);

         $maxArea=I('get.maxArea');
//         var_dump($maxArea);

         $minRent=I('get.minRent');
//         var_dump($minRent);

         $maxRent=I('get.maxRent');
//         var_dump($maxRent);


         $obj=M('Sale_infomation');

         $arr['agent_id']=$id;

         $data=$obj->where($arr)->join('LEFT JOIN agent_mid ON sale_infomation.agent_id = agent_mid.mid_id ')->select();

//        var_dump($obj->getLastSql());

//        var_dump($data);
         $agent=M('Agent_mid');
         $res=$agent->where("mid_id = $id")->find();
         $this->res=$res;
         $this->mid_realname=$data[0]['mid_realname'];
         $this->mid_phone=$data[0]['mid_phone'];
         $this->mid_region=$data[0]['mid_region'];
         $this->mid_company=$data[0]['mid_company'];
         $this->mid_regtime=$data[0]['mid_regtime'];
         $this->region=$region;
         $this->room=$room;
         $this->minArea=$minArea;
         $this->maxArea=$maxArea;
         $this->minRent=$minRent;
         $this->maxRent=$maxRent;
         $this->data=$data;
         $this->id=$id;
         $this->display();

     }




}