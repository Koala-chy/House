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
 * Time: 10:29
 */

namespace Home\Controller;


use Think\Controller;
use Think\Upload;
use Think\Page;

class HireController extends Controller
{
    public function _before_addData()
    {
        layout(false);
        if (IS_POST) {
            $hire = M('hire_infomation');
            $data = $hire->create();
            $data['Hire_date']=time();
            //这个是checkbox，穿过来的数据是数组，所以需要拼接成字符串，不然存不进数据库
//            var_dump($data['Hire_more_facility']);
            $Hire_more_facility=implode(',',$_POST['Hire_more_facility']);
            $data['Hire_more_facility']=$Hire_more_facility;

            //房源特色

            $data['Hire_more_character']=implode(',',$data['Hire_more_character']);
            if($_SESSION['rank']==1){
                $data['agent_id']=session('userid');
            }elseif($_SESSION['rank']==2){
                $data['user_id']=session('userid');
            }

            $data['Hire_preprice']=number_format($data['Hire_house_price'] /$data['Hire_house_acreage'],2);
            $upload = new Upload();
            $info = $upload->upload($_FILES);
            //判断上传文件,失败时打印出错误
//            if (!$info) {
//                var_dump($upload->getError());
//            }
//            $newPath=[];
//            $newPath[]=$info['Hire_house_photo1']['savepath'].$info['Hire_house_photo1']['savename'];
//            $newPath[]=$info['Hire_house_photo2']['savepath'].$info['Hire_house_photo2']['savename'];
//            $newPath[]=$info['Hire_house_photo3']['savepath'].$info['Hire_house_photo3']['savename'];
//            $newPath[]=$info['Hire_house_photo4']['savepath'].$info['Hire_house_photo4']['savename'];
////            var_dump($newPath);
//            //构造存储路径
//            $newP=implode(',',$newPath);
//            var_dump($newP);
            //将新数据地址返回给data数组,单张照片的方式
//            $data['Hire_house_photo']=$newPath;

            //多张照片方式
//            $data['Hire_house_photo']=$newP;
            if(!$info){
                var_dump($upload->getError());
            } else{
                foreach($info as $item){
                    $newPath[]=$item['savepath'].$item['savename'];
                }
            }
            //将图片进行合并成字符串
            $newP=implode(',',$newPath);
            $data['Hire_house_photo']=$newP;
            var_dump($data);
            $rel = $hire->add($data);
            if ($rel) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        }
    }
    public function addData(){
        layout(false);
        $this->display();
    }
    public function index(){
        layout(false);
        $hire=M('Hire_infomation');
        if($_SESSION['rank']==1){
            $data['agent_id']=session('userid');
        }elseif($_SESSION['rank']==2){
            $data['user_id']=session('userid');
        }
        $arr['agent_id']=$data['agent_id'];
        $arr['user_id']=$data['user_id'];
        $arr['_logic']='or';
        $data=$hire->where($arr)->select();
        $this->assign('dataI',$data);
        $this->display();
    }
    //删除
    public function del(){
        layout(false);
        $id=I('get.id');
        $addD=M('Hire_infomation');
        $rel=$addD->where("Hire_id=$id")->delete();
        if($rel){
            echo 'ok';
        } else{
            echo 'bad';
        }
    }


    //出租房源管理


    public function gettj(){
//        var_dump($_POST);
    }
    public function Hire_Shouye(){
        $cv=M('Hire_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//查找区
        $fn=I('get.fn');
//    var_dump($fn);

        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查找租金
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500元以下';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000元';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500元';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000元';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500元';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500元以上';
            }
        }

//查询户型

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){

            if($house==1){
                $arr['Hire_house_bedroom']='一室';
                $this->house='一室';
            }

            if($house==2){
                $arr['Hire_house_bedroom']='二室';
                $this->house='二室';
            }
            if($house==3){
                $arr['Hire_house_bedroom']='三室';
                $this->house='三室';
            }

            if($house==4){
                $arr['Hire_house_bedroom']='四室';
                $this->house='四室';
            }
            if($house==5){
                $arr['Hire_house_bedroom']='五室';
                $this->house='五室';
            }

            if($house==6){
                $arr['Hire_house_bedroom']='五室以上';
                $this->house='五室以上';
            }
        }

//查询面积
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Hire_style']=array('like','整租');
                $this->area='整租';
            }else if($area==2){
                $arr['Hire_style']=array('like','合租');
                $this->area='合租';
            }
        }

        $arr['_logic']='and';

        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Hire_date desc';
        } else if (I('get.s/d')==2) {
            $orderStr = 'Hire_house_price desc';
        }elseif(I('get.s/d')==3){
            $orderStr = 'Hire_preprice desc';
        }elseif(I('get.s/d')==4){
            $orderStr = 'Hire_house_acreage desc';
        }


        if(!$_GET['p']){
            $_GET['p']=1;
        }
        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['hire_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['hire_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->data=$data;
//        var_dump($data);
        $count=$cv->order($orderStr)->where($arr)->count();
        $this->pager = new Page($count,8);
        $this->pager -> setConfig('header','共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>5</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $this->pager -> setConfig('first','首页');
        $this->pager -> setConfig('last','尾页');
        $this->pager -> setConfig('prev','上一页');
        $this->pager -> setConfig('next','下一页');
        $this->pager->rollPage=5;
        $this->pager->lastSuffix=false;
        $this->pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page=$this->pager->show();
//        var_dump($cv->getLastSql());
        $this->display();


    }



//小区找房

    public function  Hire_LookHou(){
        $cv=M('Hire_infomation');
        $qArr = $_GET;
        $this->qArr = $qArr;
        //搜索条件
        $search=I('get.search');
//       var_dump($search);
        $arr['agent_id']=array('gt',0);
        $arr['Hire_house_name|Hire_house_title']=array('like',"%$search%");
        //查找区
        $fn=I('get.fn');
//    var_dump($fn);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查询类型

        $type=I('get.type/d');
//    var_dump($house);

        if($type!=''){
            if($type==1){
                $arr['Hire_type']='住宅';
                $this->type='住宅';
            }

            if($type==2){
                $arr['Hire_type']='商铺';
                $this->type='商铺';
            }
            if($type==3){
                $arr['Hire_type']='写字楼';
                $this->type='写字楼';
            }

            if($type==4){
                $arr['Hire_type']='别墅';
                $this->type='别墅';
            }
            if($type==5){
                $arr['Hire_type']='厂房';
                $this->type='厂房';
            }

        }


//查找租金
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500元以下';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000元';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500元';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000元';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500元';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500元以上';
            }
        }


//排序
        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Hire_house_price desc';
        }

        if(!$_GET['p']){
            $_GET['p']=1;
        }

        //总共小区数
        $allcount=$cv->count();

        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['hire_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['hire_house_photo_1'] = $tmpPhoto[0];
            }
        }

        $this->count=$allcount;
        $this->data=$data;
        $count=$cv->order($orderStr)->where($arr)->count();
        $this->pager = new Page($count,8);
        $this->pager -> setConfig('header','共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>5</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $this->pager -> setConfig('first','首页');
        $this->pager -> setConfig('last','尾页');
        $this->pager -> setConfig('prev','上一页');
        $this->pager -> setConfig('next','下一页');
        $this->pager->rollPage=5;
        $this->pager->lastSuffix=false;
        $this->pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page=$this->pager->show();
//        var_dump($cv->getLastSql());
        $this->display();

    }


    //个人房源

    public function  Hire_PerHou(){

        $cv=M('hire_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//查找区
        $fn=I('get.fn');
//    var_dump($fn);
        $arr['user_id']=array('gt',0);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查找租金
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500元以下';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000元';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500元';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000元';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500元';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500元以上';
            }
        }

//查询户型

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Hire_house_bedroom']='一室';
                $this->house='一室';
            }

            if($house==2){
                $arr['Hire_house_bedroom']='二室';
                $this->house='二室';
            }
            if($house==3){
                $arr['Hire_house_bedroom']='三室';
                $this->house='三室';
            }

            if($house==4){
                $arr['Hire_house_bedroom']='四室';
                $this->house='四室';
            }
            if($house==5){
                $arr['Hire_house_bedroom']='五室';
                $this->house='五室';
            }

            if($house==6){
                $arr['Hire_house_bedroom']='五室以上';
                $this->house='五室以上';
            }
        }

//出租类型
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Hire_style']=array('like','整租');
                $this->area='整租';
            }else if($area==2){
                $arr['Hire_style']=array('like','合租');
                $this->area='合租';
            }
        }

        $arr['_logic']='and';

        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        }elseif (I('get.s/d')==1){
            $orderStr = 'Hire_date desc';
        } else if (I('get.s/d')==2) {
            $orderStr = 'Hire_house_price desc';
        }elseif(I('get.s/d')==3){
            $orderStr = 'Hire_preprice desc';
        }elseif(I('get.s/d')==4){
            $orderStr = 'Hire_house_acreage desc';
        }


        if(!$_GET['p']){
            $_GET['p']=1;
        }
        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//        var_dump($data);
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['hire_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['hire_house_photo_1'] = $tmpPhoto[0];
            }
        }

        $this->data=$data;
        $count=$cv->order($orderStr)->where($arr)->count();
        $this->pager = new Page($count,8);
        $this->pager -> setConfig('header','共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>5</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $this->pager -> setConfig('first','首页');
        $this->pager -> setConfig('last','尾页');
        $this->pager -> setConfig('prev','上一页');
        $this->pager -> setConfig('next','下一页');
        $this->pager->rollPage=5;
        $this->pager->lastSuffix=false;
        $this->pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page=$this->pager->show();
//        var_dump($cv->getLastSql());
//        var_dump($data);
        $this->display();
    }



    public function  Hire_Userinfo(){
        $cv=M('Hire_infomation');
        $id=I('get.id');
        $area=I('get.area');
        $data=$cv->where("hire_id=$id")->find();
        if($data['user_id']>0){
            $people=M('per_user');
            $per=$people->where('user_id'==$data['user_id'])->find();
            $this->per=$per;
        }else{
            $people=M('agent_mid');
            $per=$people->where("mid_id='$data[agent_id]'")->find();
            $this->per=$per;
//            var_dump($people->getLastSql());
        }
        $tmpChar=$data['hire_more_character'];
        $tmpChar = explode(",",$tmpChar);
        $this->tmpChar=$tmpChar;
        $tmpPhoto = $data['hire_house_photo'];
//        var_dump($tmpPhoto);
        $tmpPhoto = explode(",",$tmpPhoto);
//        var_dump($tmpPhoto);
        if (count($tmpPhoto)){
            $data['hire_house_photo_1'] = $tmpPhoto[0];
        }
        $this->tmpPhotoM=$tmpPhoto;
        $this->data=$data;
//        var_dump($data);
        $data1=$cv->where("hire_house_area='$area'")->find();
        $this->data1=$data1;
        $this->display();
    }
}