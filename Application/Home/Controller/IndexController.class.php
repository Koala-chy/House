<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
//    public function _initialize(){
////        if($_SESSION['userid']){
////            $datal=1;
////            $this->assign('datal',$datal);
//        }
//    }
    public function index(){
        $infomation=M('sale_infomation');
//        ����С��
        $dataHot=$infomation->order('Sale_id desc')->limit(4)->field('Sale_house_name')->select();
        $this->dataHot=$dataHot;
//        var_dump($dataHot);
//        �·�
        $dataNew=$infomation->order('sale_id desc')->limit(8)->select();
        foreach ($dataNew as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataNew=$dataNew;
//        ���۷�Դ
        $where['Sale_house_title']  = array('like','%����%');
        $dataWrr=$infomation->order('Sale_id desc')->where($where)->limit(8)->select();
        foreach ($dataWrr as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataWrr=$dataWrr;
//        ��˰
        $where['Sale_house_title']  = array('like','%��˰%');
        $dataNon=$infomation->order('Sale_id desc')->where($where)->limit(8)->select();
        foreach ($dataNon as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataNon=$dataNon;
//        ����
        $where['Sale_house_title']  = array('like','%����%');
        $dataMet=$infomation->order('Sale_id desc')->where($where)->limit(8)->select();
        foreach ($dataMet as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataMet=$dataMet;
//      ë��
        $whereM['Sale_house_decorate']  = array('like','%ë��%');
        $dataMao=$infomation->order('Sale_id desc')->where($whereM)->limit(8)->select();
        foreach ($dataMao as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataMao=$dataMao;
//        ��װ
        $whereJ['Sale_house_decorate']  = array('like','%��װ%');
        $dataJin=$infomation->order('Sale_id desc')->where($whereJ)->limit(8)->select();
        foreach ($dataJin as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataJin=$dataJin;

//        ѧ����
        $wherex['Sale_house_title']  = array('like','%ѧ��%');
        $dataSch=$infomation->order('Sale_id desc')->where($wherex)->limit(4)->select();
        foreach ($dataSch as &$row) {
            $tmpPhoto = $row['sale_house_photo'];
            $tmpPhoto = explode(",",$tmpPhoto);
            if (count($tmpPhoto)){
                $row['sale_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataSch=$dataSch;
//        var_dump($infomation->getLastsql());
//        $user=M('per_user');
//        $user->create();
//        var_dump($user->data());
////        $add['user_name']="���";
//        $user->add();
//        var_dump($user->getLastSql());
        $Hire=M('hire_infomation');

        $whereZen['Hire_style']='����';
        $dataZen=$Hire->where($whereZen)->limit(4)->select();
        foreach ($dataZen as &$row) {
            $tmpPhoto = $row['Hire_house_photo'];
            $tmpPhoto = explode(",", $tmpPhoto);
            if (count($tmpPhoto)) {
                $row['Hire_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataZen=$dataZen;

        $whereHen['Hire_style']='����';
        $dataHen=$Hire->where($whereHen)->limit(4)->select();
        foreach ($dataHen as &$row) {
            $tmpPhoto = $row['Hire_house_photo'];
            $tmpPhoto = explode(",", $tmpPhoto);
            if (count($tmpPhoto)) {
                $row['Hire_house_photo_1'] = $tmpPhoto[0];
            }
        }
        $this->dataHen=$dataHen;
//���˳���
        $whereGen['agent_id']=0;
        $dataGen=$Hire->where($whereGen)->limit(4)->select();

            foreach ($dataGen as &$row) {
                $tmpPhoto = $row['Hire_house_photo'];
                $tmpPhoto = explode(",", $tmpPhoto);
                if (count($tmpPhoto)) {
                    $row['Hire_house_photo_1'] = $tmpPhoto[0];
                }
            }
        $this->dataGen=$dataGen;
//        ����
        $whereJing['user_id']=0;
        $dataJing=$Hire->where($whereJing)->limit(4)->select();
            foreach ($dataJing as &$row) {
                $tmpPhoto = $row['Hire_house_photo'];
                $tmpPhoto = explode(",", $tmpPhoto);
                if (count($tmpPhoto)) {
                    $row['Hire_house_photo_1'] = $tmpPhoto[0];
                }
            }
        $this->dataJing=$dataJing;
//        var_dump($dataJing);
        $this->display();
    }

    public function registerup(){
                $captcha = new Verify();
        $code = ($_POST['verifyCode']);
        if($captcha->check($code)){
        var_dump($_POST);
        if($_POST['xuanze']==1){
            $user=M('per_user');
            $user->create();
            $user->user_name="p".uniqid();
            $user->user_city="�Ϸ�";
            $user->user_regtime=time();
            $arr=$user->add();
            if($arr){
                $this->assign("hint","��ע��ɹ���");
            }else{
                $this->assign("hint","ע��ʧ�ܣ�");
            }
        }
        if($_POST['xuanze']==2){
            $mid=M('agent_mid');
            $mid->create();
            $mid->mid_name="J".uniqid();
            $mid->mid_realname=$_POST['realName'];
            $mid->mid_phone=I('post.user_phone');
            $mid->mid_password=I('post.user_password');
            $mid->mid_idcard=I('post.card');
            $mid->mid_city="�Ϸ�";
            $mid->mid_region=$_POST['user_region'];
            $mid->mid_company=$_POST['company'];
            $mid->mid_workaddress=$_POST['address'];
            $mid->mid_regtime=time();
            $mid->add();
            var_dump($mid->getLastSql());
        }
        if($_POST['xuanze']==4){
            $lawy=M('lawy');
            $lawy->create();
            $lawy->lawy_realname=$_POST['realName'];
            $lawy->lawy_mobile=I('post.user_phone');
            $lawy->lawy_password=I('post.user_password');
            $lawy->lawy_telephone=I('post.telephone');
            $lawy->lawy_region=$_POST['user_region'];
            $lawy->lawy_company=$_POST['company'];
            $lawy->lawy_address=$_POST['address'];
            $lawy->lawy_regtime=time();
            $row=$lawy->add();
            var_dump($lawy->getLastSql());

        }
                }else{
            $this->assign("hint","���������֤�벻��ȷ");
        }
        $this->display();

    }
    public function comlogin(){
//

            if($_POST['memberType']==1){
                $user=M('per_user');
                $where['user_phone']=$_POST['userName'];
                $where['user_password']=$_POST['passWord'];
                $row=$user->where($where)->find();
                if($row){
                    $_SESSION['username'] = $row['user_name'];
                    $_SESSION['userid'] = $row['user_id'];
                    $_SESSION['rank']=1;
                    $this->assign("hint","����½�ɹ���");
                } else{
                    $this->assign("hint","��û�е�¼�ɹ��������û��������룬�û������Ƿ�������ȷ��");
                }
            }
            if($_POST['memberType']==2){

                $user=M('agent_mid');
                $where['mid_phone']=$_POST['userName'];
                $where['mid_password']=$_POST['passWord'];
                $row=$user->where($where)->find();
                if($row){
                    $_SESSION['username'] = $row['mid_realname'];
                    $_SESSION['userid'] = $row['mid_id'];
                    $_SESSION['rank']=2;
                    $this->assign("hint","����½�ɹ���");
                } else{
                    $this->assign("hint","��û�е�¼�ɹ��������û��������룬�û������Ƿ�������ȷ��");

                }
            }
            if($_POST['memberType']==4){
                $user=M('lawy');
                $where['lawy_mobile']=$_POST['userName'];
                $where['lawy_password']=$_POST['passWord'];
                $row=$user->where($where)->find();
                if($row){
                    $_SESSION['username'] = $row['lawy_realname'];
                    $_SESSION['userid'] = $row['lawy_id'];
                    $_SESSION['rank']=4;
                    $this->assign("hint","����½�ɹ���");
                } else{
                    $this->assign("hint","��û�е�¼�ɹ��������û��������룬�û������Ƿ�������ȷ��");

                }
            }

        $this->display();
    }
    public function logout(){

        unset($_SESSION['username']);
        unset($_SESSION['userid']);
        unset($_SESSION['rank']);
        $this->success('ע���ɹ�','/Home/Index/index',10);
    }
    public function yzmobile(){
        $moblile=I('post.yzmobile');
        $user_moblile=M('per_user');
        $mid_moblile=M('lawy');
        $lawy_moblile=M('agent_mid');
        if($user_moblile->where("user_phone"==$moblile)->find()){
            $data["status"]=1;
        }else if($mid_moblile->where("mid_phone"==$moblile)->find()){
            $data["status"]=1;
        }else if($lawy_moblile->where("lawy_moblile"==$moblile)->find()){
            $data["status"]=1;
        } else{
            $data["status"]=0;
        }

    }









    public function read(){
        $name="��ΰ";
        $this->assign('n',$name);
        $this->show();
    }
//    ��֤�뷽����
    public function captcha()
    {
        $captcha = new Verify();
//        $captcha->useCurve = false;
//        $captcha->useNoise = false;
        $captcha->length   = 4;
        $captcha->fontSize = 20;
        $captcha->imageW = 144;
        $captcha->imageH = 45;
        $captcha->entry();
    }

    public function aaa(){
        $data = C('CITY_DATA');
        $newArr = [];
        foreach($data as $k=>$v){
            $newArr[$k]=$v['cityname'];
        }
        var_dump($newArr);
        $this->data = $newArr;
        $this->display();
//        var_dump($newArr);
    }

    public function bbb($id){
        $data = C('CITY_DATA');
        $d = $data[$id]['areas'];
        var_dump($d);
        $this->ajaxReturn($d);
    }
    public function welcom(){
        var_dump($_POST);
    }
}