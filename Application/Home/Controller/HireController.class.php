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
            //�����checkbox�������������������飬������Ҫƴ�ӳ��ַ�������Ȼ�治�����ݿ�
//            var_dump($data['Hire_more_facility']);
            $Hire_more_facility=implode(',',$_POST['Hire_more_facility']);
            $data['Hire_more_facility']=$Hire_more_facility;

            //��Դ��ɫ

            $data['Hire_more_character']=implode(',',$data['Hire_more_character']);
            if($_SESSION['rank']==1){
                $data['agent_id']=session('userid');
            }elseif($_SESSION['rank']==2){
                $data['user_id']=session('userid');
            }

            $data['Hire_preprice']=number_format($data['Hire_house_price'] /$data['Hire_house_acreage'],2);
            $upload = new Upload();
            $info = $upload->upload($_FILES);
            //�ж��ϴ��ļ�,ʧ��ʱ��ӡ������
//            if (!$info) {
//                var_dump($upload->getError());
//            }
//            $newPath=[];
//            $newPath[]=$info['Hire_house_photo1']['savepath'].$info['Hire_house_photo1']['savename'];
//            $newPath[]=$info['Hire_house_photo2']['savepath'].$info['Hire_house_photo2']['savename'];
//            $newPath[]=$info['Hire_house_photo3']['savepath'].$info['Hire_house_photo3']['savename'];
//            $newPath[]=$info['Hire_house_photo4']['savepath'].$info['Hire_house_photo4']['savename'];
////            var_dump($newPath);
//            //����洢·��
//            $newP=implode(',',$newPath);
//            var_dump($newP);
            //�������ݵ�ַ���ظ�data����,������Ƭ�ķ�ʽ
//            $data['Hire_house_photo']=$newPath;

            //������Ƭ��ʽ
//            $data['Hire_house_photo']=$newP;
            if(!$info){
                var_dump($upload->getError());
            } else{
                foreach($info as $item){
                    $newPath[]=$item['savepath'].$item['savename'];
                }
            }
            //��ͼƬ���кϲ����ַ���
            $newP=implode(',',$newPath);
            $data['Hire_house_photo']=$newP;
            var_dump($data);
            $rel = $hire->add($data);
            if ($rel) {
                $this->success('����ɹ�');
            } else {
                $this->error('����ʧ��');
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
    //ɾ��
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


    //���ⷿԴ����


    public function gettj(){
//        var_dump($_POST);
    }
    public function Hire_Shouye(){
        $cv=M('Hire_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//������
        $fn=I('get.fn');
//    var_dump($fn);

        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='®��';
                $this->fn='®��';
            }
        }

//�������
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500Ԫ����';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000Ԫ';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500Ԫ';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000Ԫ';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500Ԫ';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500Ԫ����';
            }
        }

//��ѯ����

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){

            if($house==1){
                $arr['Hire_house_bedroom']='һ��';
                $this->house='һ��';
            }

            if($house==2){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }
            if($house==3){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }

            if($house==4){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }
            if($house==5){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }

            if($house==6){
                $arr['Hire_house_bedroom']='��������';
                $this->house='��������';
            }
        }

//��ѯ���
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Hire_style']=array('like','����');
                $this->area='����';
            }else if($area==2){
                $arr['Hire_style']=array('like','����');
                $this->area='����';
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
        $this->pager -> setConfig('header','��<b>%TOTAL_ROW%</b>����¼&nbsp;&nbsp;ÿҳ<b>5</b>��&nbsp;&nbsp;��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ');
        $this->pager -> setConfig('first','��ҳ');
        $this->pager -> setConfig('last','βҳ');
        $this->pager -> setConfig('prev','��һҳ');
        $this->pager -> setConfig('next','��һҳ');
        $this->pager->rollPage=5;
        $this->pager->lastSuffix=false;
        $this->pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page=$this->pager->show();
//        var_dump($cv->getLastSql());
        $this->display();


    }



//С���ҷ�

    public function  Hire_LookHou(){
        $cv=M('Hire_infomation');
        $qArr = $_GET;
        $this->qArr = $qArr;
        //��������
        $search=I('get.search');
//       var_dump($search);
        $arr['agent_id']=array('gt',0);
        $arr['Hire_house_name|Hire_house_title']=array('like',"%$search%");
        //������
        $fn=I('get.fn');
//    var_dump($fn);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='®��';
                $this->fn='®��';
            }
        }

//��ѯ����

        $type=I('get.type/d');
//    var_dump($house);

        if($type!=''){
            if($type==1){
                $arr['Hire_type']='סլ';
                $this->type='סլ';
            }

            if($type==2){
                $arr['Hire_type']='����';
                $this->type='����';
            }
            if($type==3){
                $arr['Hire_type']='д��¥';
                $this->type='д��¥';
            }

            if($type==4){
                $arr['Hire_type']='����';
                $this->type='����';
            }
            if($type==5){
                $arr['Hire_type']='����';
                $this->type='����';
            }

        }


//�������
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500Ԫ����';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000Ԫ';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500Ԫ';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000Ԫ';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500Ԫ';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500Ԫ����';
            }
        }


//����
        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Hire_house_price desc';
        }

        if(!$_GET['p']){
            $_GET['p']=1;
        }

        //�ܹ�С����
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
        $this->pager -> setConfig('header','��<b>%TOTAL_ROW%</b>����¼&nbsp;&nbsp;ÿҳ<b>5</b>��&nbsp;&nbsp;��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ');
        $this->pager -> setConfig('first','��ҳ');
        $this->pager -> setConfig('last','βҳ');
        $this->pager -> setConfig('prev','��һҳ');
        $this->pager -> setConfig('next','��һҳ');
        $this->pager->rollPage=5;
        $this->pager->lastSuffix=false;
        $this->pager -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page=$this->pager->show();
//        var_dump($cv->getLastSql());
        $this->display();

    }


    //���˷�Դ

    public function  Hire_PerHou(){

        $cv=M('hire_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//������
        $fn=I('get.fn');
//    var_dump($fn);
        $arr['user_id']=array('gt',0);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Hire_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Hire_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Hire_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Hire_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Hire_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Hire_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Hire_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Hire_house_area']='®��';
                $this->fn='®��';
            }
        }

//�������
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Hire_house_price']=array('lt','500');
                $this->sell='500Ԫ����';
            }else if($sell==2){
                $arr['Hire_house_price']=array('between','500,1000');
                $this->sell='500-1000Ԫ';
            }else if($sell==3){
                $arr['Hire_house_price']=array('between','1000,1500');
                $this->sell='1000-1500Ԫ';
            }else if($sell==4){
                $arr['Hire_house_price']=array('between','1500,2000');
                $this->sell='1500-2000Ԫ';
            }else if($sell==5){
                $arr['Hire_house_price']=array('between','2000,2500');
                $this->sell='2000-2500Ԫ';
            }else if($sell==6){
                $arr['Hire_house_price']=array('egt','2500');
                $this->sell='2500Ԫ����';
            }
        }

//��ѯ����

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Hire_house_bedroom']='һ��';
                $this->house='һ��';
            }

            if($house==2){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }
            if($house==3){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }

            if($house==4){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }
            if($house==5){
                $arr['Hire_house_bedroom']='����';
                $this->house='����';
            }

            if($house==6){
                $arr['Hire_house_bedroom']='��������';
                $this->house='��������';
            }
        }

//��������
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Hire_style']=array('like','����');
                $this->area='����';
            }else if($area==2){
                $arr['Hire_style']=array('like','����');
                $this->area='����';
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
        $this->pager -> setConfig('header','��<b>%TOTAL_ROW%</b>����¼&nbsp;&nbsp;ÿҳ<b>5</b>��&nbsp;&nbsp;��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ');
        $this->pager -> setConfig('first','��ҳ');
        $this->pager -> setConfig('last','βҳ');
        $this->pager -> setConfig('prev','��һҳ');
        $this->pager -> setConfig('next','��һҳ');
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