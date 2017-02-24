<?php
// 温馨提示：网站启动前 优先加载佛祖 法力无边！
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
         佛祖保佑       永无BUG

                  佛曰:
    写字楼里写字间，写字间里程序员；
    程序人员写程序，又拿程序换酒钱。
    酒醒只在网上撸，酒醉还来网下眠；
    酒醉酒醒日复日，网上网下年复年。
    但愿老死电脑间，不愿鞠躬老板前；
    奔驰宝马贵者趣，公交自行程序员。
    别人笑我忒疯癫，我笑自己命太贱；
    不见满街漂亮妹，哪个归得程序员？
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

//房产经纪人列表页

//店铺显示页面

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
         $pager -> setConfig('header','<span class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
         $pager -> setConfig('prev', '上一页');
         $pager -> setConfig('next','下一页');
         $pager -> setConfig('last','末页');
         $pager -> setConfig('first','首页');
         $pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
         $pager->rollPage = 5;
         $pager->lastSuffix = false;
         $show=$pager->show();

          $this->pager=$show;
          $this->area=$area;
          $this->data=$data;


          $this->display();


     }


//房产经纪人店铺页

//出售页面

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

        if($region!='区域' && $region != ''){
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
         $pager -> setConfig('header','<span class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
         $pager -> setConfig('prev', '上一页');
         $pager -> setConfig('next','下一页');
         $pager -> setConfig('last','末页');
         $pager -> setConfig('first','首页');
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


    //出租页面

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