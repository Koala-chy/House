<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/21
 * Time: 16:24
 */

namespace Home\Controller;


use Think\Controller;
use Think\Upload;

class MemberController extends Controller
{
    public function index(){
        C('LAYOUT_NAME','layout2');
        if($_SESSION['rank']==1){
            //��ͨ�û�
            $data['user_id']=session('userid');
            $per=M('per_user');
            $data1=$per->where("user_id=".$_SESSION['userid'])->find();
            $this->assign('data',$data1);
        }elseif($_SESSION['rank']==2){
            //������
            $data['mid_id']=session('userid');
//            var_dump($data['mid_id']);
            $agent=M('agent_mid');
            $data2=$agent->where("mid_id=".$_SESSION['userid'])->find();
            $this->assign('data',$data2);
        }
        $this->display();
    }

    public function editor(){
        C('LAYOUT_NAME','layout2');
        if($_SESSION['rank']==1){
            //��ͨ�û�
            $data['user_id']=session('userid');
            $per=M('per_user');
            $data1=$per->where("user_id=".$_SESSION['userid'])->find();
            $this->assign('data',$data1);
        }elseif($_SESSION['rank']==2){
            //������
            $data['mid_id']=session('userid');
//            var_dump($data['mid_id']);
            $agent=M('agent_mid');
            $data2=$agent->where("mid_id=".$_SESSION['userid'])->find();
//            var_dump($data2);
            $this->assign('data',$data2);
        }
        $this->display();
    }

    //����ͷ��
    public function sub_file(){
        $upload=new Upload();
        $info=$upload->uploadOne($_FILES['user_photo']);
        if(!$info){
            echo $upload->getError();
        } else{
            $newPath=$info['savepath'].$info['savename'];
            $data['user_photo']=$newPath;
            if($_SESSION['rank']==1){
                //��ͨ
                $data['user_id']=session('userid');
                $per=M('per_user');
                $data=$per->create();
                $data['user_photo']=$newPath;
                $rel=$per->where("user_id=".$_SESSION['userid'])->save($data);
                if($rel){
                    echo '�ɹ�';
                } else{
                    echo 'ʧ��';
                }
            }elseif($_SESSION['rank']==2){
                //������
                $data['mid_id']=session('userid');
                $agent=M('agent_mid');
                $data=$agent->create();
                $data['mid_photo']=$newPath;
                $rel=$agent->where("mid_id=".$_SESSION['userid'])->save($data);
                if($rel){
                    echo '�ɹ�';
                } else{
                    echo 'ʧ��';
                }
            }
        }
        $img='/../Uploads/'.$newPath;
        echo "<div id='pic'>$img</div>";
    }

    //��������
    public function save(){
        if(IS_POST){
            if($_SESSION['rank']==1){
//                ��ͨ�û�
                $per=M('per_user');
                $data=$per->create();
//                var_dump($data);
                $id=$_SESSION['userid'];
                $data['user_regtime']=time();
                $data['user_work']=I('post.user_work');
//                var_dump($data);
                if($per->where("user_id=$id")->save($data)){
                    $_SESSION['username']=I('post.user_name');
                    $this->success('�޸ĳɹ�','editor',5);
                } else{
                    $this->error('�޸�ʧ��','editor',5);
                }
            } elseif($_SESSION['rank']==2){
//                �������û�
                $per=M('agent_mid');
                $data=$per->create();
                $id=$_SESSION['userid'];
                $data['mid_regtime']=time();
                $data['mid_work']=I('post.mid_work');
//                var_dump($data);
                if($per->where("mid_id=$id")->save($data)){
                    $_SESSION['username']=I('post.mid_realname');
                    $this->success('�޸ĳɹ�','editor',3);
                } else{
                    $this->error('�޸�ʧ��','editor',3);
                }
            }
        }
    }
}