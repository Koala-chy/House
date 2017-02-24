<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20 0020
 * Time: 14:11
 */

namespace Home\Controller;

use Think\Controller;
use Think\Page;
use Think\Upload;

class SaleController extends Controller
{
    public function _before_addData(){
        layout(false);
        if(IS_POST){
            $sale=M('sale_infomation');
            $data=$sale->create();
            //���ʱ��
            var_dump($data);
            if($_SESSION['rank']==1){
                $data['user_id']=session('userid');
            }elseif($_SESSION['rank']==2){
                $data['agent_id']=session('userid');
            }
            $data['Sale_preprice']=number_format($data['Sale_house_price'] /$data['Sale_house_acreage'],2);

            $data['Sale_date']=time();
            //�����checkbox�������������������飬������Ҫƴ�ӳ��ַ�������Ȼ�治�����ݿ�
//            var_dump($data['Sale_more_facility']);
            $Sale_more_facility=implode(',',$data['Sale_more_facility']);
            $data['Sale_more_facility']=$Sale_more_facility;

            //�ϴ�ͼƬ��ʼ
            $upload= new Upload();
            $info=$upload->upload($_FILES);

            //����ͼƬ��ʼ
            //�ж��ϴ��ļ�,ʧ��ʱ��ӡ������
//            if(!$info){
////                var_dump($upload->getError());
//            }
//            var_dump($info);
            //����������ݿ��еĵ�ַ
//            $newPath=[];
//            $newPath[]=$info['Sale_house_photo1']['savepath'].$info['Sale_house_photo1']['savename'];
//            $newPath[]=$info['Sale_house_photo2']['savepath'].$info['Sale_house_photo2']['savename'];
//            $newPath[]=$info['Sale_house_photo3']['savepath'].$info['Sale_house_photo3']['savename'];
//            $newPath[]=$info['Sale_house_photo4']['savepath'].$info['Sale_house_photo4']['savename'];
//            var_dump($newPath);
//            $newP=implode(',',$newPath);
//            var_dump($newP);
//            $data['Sale_house_photo']=$newP;
//            ����ͼƬ����

            if(!$info){
                var_dump($upload->getError());
            } else{
                foreach($info as $item){
                    $newPath[]=$item['savepath'].$item['savename'];
                }
            }
//            var_dump($newPath);
//            //����洢·��
            $newP=implode(',',$newPath);
//            var_dump($newP);
            //������Ƭ��ʽ
            $data['Sale_house_photo']=$newP;
//            ����ͼƬ�ϴ�����

            //�������ݵ�ַ���ظ�data����,������Ƭ�ķ�ʽ
            //$data['Sale_house_photo']=$newPath;

            //��Դ��ɫ
            $data['Sale_more_character']=implode(',',$data['Sale_more_character']);
            var_dump($data);
            $sid=I('post.sale_id');
            if(!$sid){
                $rel=$sale->add($data);
                if($rel){
                    echo "<script>alert('�����ɹ���');history.go(-2)</script>";
                } else{
                    $this->error('���ʧ��');
                }
            } else{
                $rel=$sale->save($data);
                if($rel){
                    $this->success('�޸ĳɹ�');
                } else{
                    $this->error('�޸�ʧ��');
                }
            }

        }
    }
    public function addData(){
        layout(false);
        $this->display();
    }
    public function index(){
        layout(false);
        $addD=M('sale_infomation');
        if($_SESSION['rank']==1){
            $data['user_id']=session('userid');
        }elseif($_SESSION['rank']==2){
            $data['agent_id']=session('userid');
        }
        $arr['agent_id']=$data['agent_id'];
        $arr['user_id']=$data['user_id'];
        $arr['_logic']='or';
        $dataI=$addD->where($arr)->select();
//        var_dump($dataI);
        $this->assign('dataI',$dataI);
        $this->display();
    }

    //ɾ��
    public function del(){
        layout(false);
        $id=I('get.id');
        $addD=M('sale_infomation');
        $rel=$addD->where("sale_id=$id")->delete();
        if($rel){
            echo 'ok';
        } else{
            echo 'bad';
        }
    }

    public function Sale_Shouye(){
        $cv=M('Sale_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//������
        $fn=I('get.fn');
//    var_dump($fn);

        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='®��';
                $this->fn='®��';
            }
        }

//�����ۼ�
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40������';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70��';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80��';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90��';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100��';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100������';
            }
        }

//��ѯ����

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Sale_house_bedroom']='һ��';
                $this->house='һ��';
            }

            if($house==2){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }
            if($house==3){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }

            if($house==4){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }
            if($house==5){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }

            if($house==6){
                $arr['Sale_house_bedroom']='��������';
                $this->house='��������';
            }
        }

//��ѯ���
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Sale_house_acreage']=array('lt','50');
                $this->area='50�O����';
            }else if($area==2){
                $arr['Sale_house_acreage']=array('between','50,70');
                $this->area='50-70�O';
            }else if($area==3){
                $arr['Sale_house_acreage']=array('between','70,90');
                $this->area='70-90�O';
            }else if($area==4){
                $arr['Sale_house_acreage']=array('between','90,110');
                $this->area='90-110�O';
            }else if($area==5){
                $arr['Sale_house_acreage']=array('between','110,150');
                $this->area='110-150�O';
            }else if($area==6){
                $arr['Sale_house_acreage']=array('egt','150');
                $this->area='150�O����';
            }
        }

        $arr['_logic']='and';

        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Sale_date desc';
        } else if (I('get.s/d')==2) {
            $orderStr = 'Sale_house_price desc';
        }elseif(I('get.s/d')==3){
            $orderStr = 'Sale_preprice desc';
        }elseif(I('get.s/d')==4){
            $orderStr = 'sale_house_acreage desc';
        }


        if(!$_GET['p']){
            $_GET['p']=1;
        }
        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//        var_dump($data);
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
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
        $this->display();

    }

//С���ҷ�

    public function  Sale_LookHou(){
        $cv=M('Sale_infomation');
        $qArr = $_GET;
        $this->qArr = $qArr;
        //��������
        $search=I('get.search');
//       var_dump($search);

        $arr['Sale_house_name|Sale_house_title']=array('like',"%$search%");
        //������
        $fn=I('get.fn');
//    var_dump($fn);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='®��';
                $this->fn='®��';
            }
        }

//��ѯ����

        $type=I('get.type/d');
//    var_dump($house);

        if($type!=''){
            if($type==1){
                $arr['Sale_type']='סլ';
                $this->type='סլ';
            }

            if($type==2){
                $arr['Sale_type']='����';
                $this->type='����';
            }
            if($type==3){
                $arr['Sale_type']='д��¥';
                $this->type='д��¥';
            }

            if($type==4){
                $arr['Sale_type']='����';
                $this->type='����';
            }
            if($type==5){
                $arr['Sale_type']='����';
                $this->type='����';
            }

        }


//�����ۼ�

        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40������';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70��';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80��';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90��';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100��';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100������';
            }
        }

//����
        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Sale_house_price desc';
        }

        if(!$_GET['p']){
            $_GET['p']=1;
        }

        //�ܹ�С����
        $allcount=$cv->count();

        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
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

    public function  Sale_PerHou(){

        $cv=M('Sale_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//������
        $fn=I('get.fn');
//    var_dump($fn);
        $arr['user_id']=array('gt',0);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='®����';
                $this->fn='®����';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='��ɽ��';
                $this->fn='��ɽ��';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='������';
                $this->fn='������';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='��վ��';
                $this->fn='��վ��';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='��������';
                $this->fn='��������';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='�ʶ�';
                $this->fn='�ʶ�';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='����';
                $this->fn='����';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='®��';
                $this->fn='®��';
            }
        }

//�����ۼ�
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40������';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70��';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80��';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90��';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100��';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100������';
            }
        }

//��ѯ����

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Sale_house_bedroom']='һ��';
                $this->house='һ��';
            }

            if($house==2){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }
            if($house==3){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }

            if($house==4){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }
            if($house==5){
                $arr['Sale_house_bedroom']='����';
                $this->house='����';
            }

            if($house==6){
                $arr['Sale_house_bedroom']='��������';
                $this->house='��������';
            }
        }

//��ѯ���
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Sale_house_acreage']=array('lt','50');
                $this->area='50�O����';
            }else if($area==2){
                $arr['Sale_house_acreage']=array('between','50,70');
                $this->area='50-70�O';
            }else if($area==3){
                $arr['Sale_house_acreage']=array('between','70,90');
                $this->area='70-90�O';
            }else if($area==4){
                $arr['Sale_house_acreage']=array('between','90,110');
                $this->area='90-110�O';
            }else if($area==5){
                $arr['Sale_house_acreage']=array('between','110,150');
                $this->area='110-150�O';
            }else if($area==6){
                $arr['Sale_house_acreage']=array('egt','150');
                $this->area='150�O����';
            }
        }

        $arr['_logic']='and';

        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        }elseif (I('get.s/d')==1){
            $orderStr = 'Sale_date desc';
        } else if (I('get.s/d')==2) {
            $orderStr = 'Sale_house_price desc';
        }elseif(I('get.s/d')==3){
            $orderStr = 'Sale_preprice desc';
        }elseif(I('get.s/d')==4){
            $orderStr = 'sale_house_acreage desc';
        }


        if(!$_GET['p']){
            $_GET['p']=1;
        }
        $data=$cv->order($orderStr)->where($arr)->page($_GET['p'].',8')->select();
//    var_dump($cv->getLastSql());
        foreach ($data as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
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
        $this->display();
    }



    public function  Sale_Userinfo(){
        $cv=M('Sale_infomation');
        $id=I('get.id');
        $area=I('get.area');
        $data=$cv->where("sale_id=$id")->find();
        if($data['user_id']>0){
            $people=M('per_user');
            $per=$people->where('user_id'==$data['user_id'])->find();
            $this->per=$per;
            $this->ple=1;
        }else{
            $people=M('agent_mid');
            $per=$people->where("mid_id='$data[agent_id]'")->find();
            $this->per=$per;
            $this->ple=2;
            var_dump($people->getLastSql());
        }
//        var_dump($per);
        $tmpPhoto = $data['sale_house_photo'];
//        var_dump($tmpPhoto);
        $tmpPhoto = explode(",",$tmpPhoto);
//        var_dump($tmpPhoto);
        if (count($tmpPhoto)){
            $data['sale_house_photo_1'] = $tmpPhoto[0];
        }
        $this->tmpPhotoM=$tmpPhoto;
        $this->data=$data;
//        var_dump($data);
        $data1=$cv->where("sale_house_area='$area'")->find();
        $this->data1=$data1;
        $this->display();
    }
    public function commentup(){
        $article=M('hfcomment');
        $article->create();
        var_dump($_POST['comment_content']);
//        var_dump($article);iconv("UTF-8","gbk//TRANSLIT",$_POST['comment_content']);
        $article->comment_content=iconv("UTF-8","gbk//TRANSLIT",$_POST['comment_content']);
        $article->comment_time=time();
        $arr=$article->add();
//        var_dump($article->getLastSql());
//        var_dump($member->getLastSql());
        if ($arr){
            $data["status"]=1;
        } else {
            $data["status"]=0;
        }
        $this->ajaxReturn($data);
    }
    public function clist(){
        layout(false);
        $article=M('hfcomment');
//        var_dump($_GET);
//        var_dump($_POST);
        $where['info_id']=I("post.id");
        $data=$article->where($where)->select();
        $this->assign('list',$data);
//        var_dump($article->getLastSql());
        $this->display();
    }
}