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
            //添加时间
            var_dump($data);
            if($_SESSION['rank']==1){
                $data['user_id']=session('userid');
            }elseif($_SESSION['rank']==2){
                $data['agent_id']=session('userid');
            }
            $data['Sale_preprice']=number_format($data['Sale_house_price'] /$data['Sale_house_acreage'],2);

            $data['Sale_date']=time();
            //这个是checkbox，穿过来的数据是数组，所以需要拼接成字符串，不然存不进数据库
//            var_dump($data['Sale_more_facility']);
            $Sale_more_facility=implode(',',$data['Sale_more_facility']);
            $data['Sale_more_facility']=$Sale_more_facility;

            //上传图片开始
            $upload= new Upload();
            $info=$upload->upload($_FILES);

            //四张图片开始
            //判断上传文件,失败时打印出错误
//            if(!$info){
////                var_dump($upload->getError());
//            }
//            var_dump($info);
            //构造存入数据库中的地址
//            $newPath=[];
//            $newPath[]=$info['Sale_house_photo1']['savepath'].$info['Sale_house_photo1']['savename'];
//            $newPath[]=$info['Sale_house_photo2']['savepath'].$info['Sale_house_photo2']['savename'];
//            $newPath[]=$info['Sale_house_photo3']['savepath'].$info['Sale_house_photo3']['savename'];
//            $newPath[]=$info['Sale_house_photo4']['savepath'].$info['Sale_house_photo4']['savename'];
//            var_dump($newPath);
//            $newP=implode(',',$newPath);
//            var_dump($newP);
//            $data['Sale_house_photo']=$newP;
//            四张图片结束

            if(!$info){
                var_dump($upload->getError());
            } else{
                foreach($info as $item){
                    $newPath[]=$item['savepath'].$item['savename'];
                }
            }
//            var_dump($newPath);
//            //构造存储路径
            $newP=implode(',',$newPath);
//            var_dump($newP);
            //多张照片方式
            $data['Sale_house_photo']=$newP;
//            多张图片上传结束

            //将新数据地址返回给data数组,单张照片的方式
            //$data['Sale_house_photo']=$newPath;

            //房源特色
            $data['Sale_more_character']=implode(',',$data['Sale_more_character']);
            var_dump($data);
            $sid=I('post.sale_id');
            if(!$sid){
                $rel=$sale->add($data);
                if($rel){
                    echo "<script>alert('发布成功！');history.go(-2)</script>";
                } else{
                    $this->error('添加失败');
                }
            } else{
                $rel=$sale->save($data);
                if($rel){
                    $this->success('修改成功');
                } else{
                    $this->error('修改失败');
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

    //删除
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
//查找区
        $fn=I('get.fn');
//    var_dump($fn);

        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查找售价
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40万以下';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70万';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80万';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90万';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100万';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100万以上';
            }
        }

//查询户型

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Sale_house_bedroom']='一室';
                $this->house='一室';
            }

            if($house==2){
                $arr['Sale_house_bedroom']='二室';
                $this->house='二室';
            }
            if($house==3){
                $arr['Sale_house_bedroom']='三室';
                $this->house='三室';
            }

            if($house==4){
                $arr['Sale_house_bedroom']='四室';
                $this->house='四室';
            }
            if($house==5){
                $arr['Sale_house_bedroom']='五室';
                $this->house='五室';
            }

            if($house==6){
                $arr['Sale_house_bedroom']='五室以上';
                $this->house='五室以上';
            }
        }

//查询面积
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Sale_house_acreage']=array('lt','50');
                $this->area='50㎡以下';
            }else if($area==2){
                $arr['Sale_house_acreage']=array('between','50,70');
                $this->area='50-70㎡';
            }else if($area==3){
                $arr['Sale_house_acreage']=array('between','70,90');
                $this->area='70-90㎡';
            }else if($area==4){
                $arr['Sale_house_acreage']=array('between','90,110');
                $this->area='90-110㎡';
            }else if($area==5){
                $arr['Sale_house_acreage']=array('between','110,150');
                $this->area='110-150㎡';
            }else if($area==6){
                $arr['Sale_house_acreage']=array('egt','150');
                $this->area='150㎡以上';
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

    public function  Sale_LookHou(){
        $cv=M('Sale_infomation');
        $qArr = $_GET;
        $this->qArr = $qArr;
        //搜索条件
        $search=I('get.search');
//       var_dump($search);

        $arr['Sale_house_name|Sale_house_title']=array('like',"%$search%");
        //查找区
        $fn=I('get.fn');
//    var_dump($fn);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查询类型

        $type=I('get.type/d');
//    var_dump($house);

        if($type!=''){
            if($type==1){
                $arr['Sale_type']='住宅';
                $this->type='住宅';
            }

            if($type==2){
                $arr['Sale_type']='商铺';
                $this->type='商铺';
            }
            if($type==3){
                $arr['Sale_type']='写字楼';
                $this->type='写字楼';
            }

            if($type==4){
                $arr['Sale_type']='别墅';
                $this->type='别墅';
            }
            if($type==5){
                $arr['Sale_type']='厂房';
                $this->type='厂房';
            }

        }


//查找售价

        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40万以下';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70万';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80万';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90万';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100万';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100万以上';
            }
        }

//排序
        $orderStr = "";
        if(I('get.s/d')==0){
            $orderStr = "";
        } elseif (I('get.s/d')==1){
            $orderStr = 'Sale_house_price desc';
        }

        if(!$_GET['p']){
            $_GET['p']=1;
        }

        //总共小区数
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

    public function  Sale_PerHou(){

        $cv=M('Sale_infomation');

        $qArr=$_GET;
//    var_dump($qArr);
        $this->qArr=$qArr;
//查找区
        $fn=I('get.fn');
//    var_dump($fn);
        $arr['user_id']=array('gt',0);
        if($fn!=''){

            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='ly'){
                $arr['Sale_house_area']='庐阳区';
                $this->fn='庐阳区';
            }
            if($fn=='bhe'){
                $arr['Sale_house_area']='包河区';
                $this->fn='包河区';
            }
            if($fn=='yh'){
                $arr['Sale_house_area']='瑶海区';
                $this->fn='瑶海区';
            }
            if($fn=='zw'){
                $arr['Sale_house_area']='政务区';
                $this->fn='政务区';
            }
            if($fn=='ss'){
                $arr['Sale_house_area']='蜀山区';
                $this->fn='蜀山区';
            }
            if($fn=='bhu'){
                $arr['Sale_house_area']='滨湖区';
                $this->fn='滨湖区';
            }
            if($fn=='jk'){
                $arr['Sale_house_area']='经开区';
                $this->fn='经开区';
            }
            if($fn=='xz'){
                $arr['Sale_house_area']='新站区';
                $this->fn='新站区';
            }

            if($fn=='bc'){
                $arr['Sale_house_area']='北城新区';
                $this->fn='北城新区';
            }

            if($fn=='fd'){
                $arr['Sale_house_area']='肥东';
                $this->fn='肥东';
            }
            if($fn=='fx'){
                $arr['Sale_house_area']='肥西';
                $this->fn='肥西';
            }

            if($fn=='cf'){
                $arr['Sale_house_area']='长丰';
                $this->fn='长丰';
            }

            if($fn=='ch'){
                $arr['Sale_house_area']='巢湖';
                $this->fn='巢湖';
            }

            if($fn=='lj'){
                $arr['Sale_house_area']='庐江';
                $this->fn='庐江';
            }
        }

//查找售价
        $sell=I('get.sell/d');
//    var_dump($sell);
        if($sell!=''){

            if($sell==1){
                $arr['Sale_house_price']=array('lt','40');
                $this->sell='40万以下';
            }else if($sell==2){
                $arr['Sale_house_price']=array('between','40,70');
                $this->sell='40-70万';
            }else if($sell==3){
                $arr['Sale_house_price']=array('between','70,80');
                $this->sell='70-80万';
            }else if($sell==4){
                $arr['Sale_house_price']=array('between','80,90');
                $this->sell='80-90万';
            }else if($sell==5){
                $arr['Sale_house_price']=array('between','90,100');
                $this->sell='90-100万';
            }else if($sell==6){
                $arr['Sale_house_price']=array('egt','100');
                $this->sell='100万以上';
            }
        }

//查询户型

        $house=I('get.house/d');
//    var_dump($house);

        if($house!=''){


            if($house==1){
                $arr['Sale_house_bedroom']='一室';
                $this->house='一室';
            }

            if($house==2){
                $arr['Sale_house_bedroom']='二室';
                $this->house='二室';
            }
            if($house==3){
                $arr['Sale_house_bedroom']='三室';
                $this->house='三室';
            }

            if($house==4){
                $arr['Sale_house_bedroom']='四室';
                $this->house='四室';
            }
            if($house==5){
                $arr['Sale_house_bedroom']='五室';
                $this->house='五室';
            }

            if($house==6){
                $arr['Sale_house_bedroom']='五室以上';
                $this->house='五室以上';
            }
        }

//查询面积
        $area=I('get.area/d');
//    var_dump($area);
        if($area!=''){

            if($area==1){
                $arr['Sale_house_acreage']=array('lt','50');
                $this->area='50㎡以下';
            }else if($area==2){
                $arr['Sale_house_acreage']=array('between','50,70');
                $this->area='50-70㎡';
            }else if($area==3){
                $arr['Sale_house_acreage']=array('between','70,90');
                $this->area='70-90㎡';
            }else if($area==4){
                $arr['Sale_house_acreage']=array('between','90,110');
                $this->area='90-110㎡';
            }else if($area==5){
                $arr['Sale_house_acreage']=array('between','110,150');
                $this->area='110-150㎡';
            }else if($area==6){
                $arr['Sale_house_acreage']=array('egt','150');
                $this->area='150㎡以上';
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