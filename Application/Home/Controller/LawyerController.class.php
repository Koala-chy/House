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
 * Time: 10:35
 */

namespace Home\Controller;


use Think\Controller;
use Think\Page;
class LawyerController extends Controller
{

//    public function index()
//    {
//
//
//        $this->display();
//    }
    public function index()
    {
        if (IS_POST) {

            $pro = D('pro');
            //var_dump($pro);
            $l = $pro->create();
           // var_dump($l);
            //exit;
            if ($l == false) {
                $arr = $pro->getError();
//            var_dump($arr);
                echo $arr;
            } else {
                //$numm=$pro->query("select pro.id,(select count(ans.id) from ans where ans.pro_id=pro.id ) as ccc from pro  ");
                $l['ptime'] = time();
                //$l['pnum']=$numm[$l['id']-1]['ccc'];
                //var_dump($l['id']);
                 //var_dump($l);
                $a = $pro->add($l);
                //var_dump($pro->getLastSql());

            }
        }
        $pro2=M('pro');
        //var_dump($pro2);
        $num=$_SESSION['num'];
//        $this->assign('n',$num);
        //$pro = M('pro');
        //var_dump($_GET);
        $count=I('get.count');
        // var_dump($count);
        $con="problem like '%$count%'";
        // $l2 = $pro->where($con)->select();
        //$id=$_SESSION['id'];
//               for($i=0;$i<count($l);$i++ ){
//        //echo $l[$i]['id'];
//                   $id=$l[$i]['id'];
//                   var_dump($id);
//
//           }

        //var_dump($pro->getLastSql());
        $numm=$pro2->query("select pro.id,(select count(ans.id) from ans where ans.pro_id=pro.id ) as ccc from pro  ");
        $this->assign('list1',$numm);
        for($i=0;$i<count($numm);$i++){
          //var_dump($numm[$i]['ccc']);
            $g=$numm[$i]['ccc'];
            //var_dump($g);
            $this->assign('w',$g);
        }

        //var_dump($numm);
        //$nummm=$numm[0]['count(*)'];
        //$this->assign('m',$nummm);
        //var_dump($numm[0]['count(*)']);
        $totle = $pro2->where($con)->count();
        $nowpage = I('get.p', 1);
        $paerpage = 5;
        $page = ($nowpage - 1) * $paerpage;
//        $l22=$pro2->select();
//        var_dump($l22);
        $l2 = $pro2->where($con)->limit($page, $paerpage)->select();
       // var_dump($l2);
        //var_dump($l2);
//       for($i=0;$i<count($l);$i++ ){
//        echo $l[$i]['id'];

//           }

//       }
        //echo $l[$i]['id'];
        $this->assign('list', $l2);
        $pager = $this->pager = new Page($totle, $paerpage);
        // var_dump($pager->show());
        $this->pager->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        //$this->pager->setConfig('header','<span class="rows">�� %TOTAL_ROW% ����¼</span>');
        $pager->setConfig('prev', '��һҳ');
        $pager->setConfig('next', '��һҳ');
        $pager->setConfig('first', '��һҳ');
        $pager->setConfig('last', '���һҳ');
//               exit;
//                if ($a) {
//                    $this->success('�����ɹ�', '/Home/Lawyer/lists.html');
//                } else {
//                    $this->error('����ʧ��');
//                }
        $this->display();

    }
    public function answer()
    {
        if (IS_POST) {

            $pro = D('pro');
            //var_dump($pro);
            $l = $pro->create();
            //var_dump($l);
//            exit;
            if ($l == false) {
                $arr = $pro->getError();
//            var_dump($arr);
                echo $arr;
            } else {
                $l['ptime'] = time();
                //var_dump($l);
                // var_dump(time());
                $a = $pro->add($l);
                //var_dump($pro->getLastSql());

            }
        }
        $pro2=M('pro');
        //var_dump($pro2);
        $num=$_SESSION['num'];
//        $this->assign('n',$num);
        //$pro = M('pro');
        //var_dump($_GET);
        $count=I('get.count');
        // var_dump($count);
        $con="problem like '%$count%'";
        // $l2 = $pro->where($con)->select();
        //$id=$_SESSION['id'];
//               for($i=0;$i<count($l);$i++ ){
//        //echo $l[$i]['id'];
//                   $id=$l[$i]['id'];
//                   var_dump($id);
//
//           }

        //var_dump($pro->getLastSql());
        $numm=$pro2->query("select pro.id,(select count(ans.id) from ans where ans.pro_id=pro.id ) as ccc from pro  ");
        $this->assign('list1',$numm);
        for($i=0;$i<count($numm);$i++){
            //var_dump($numm[$i]['ccc']);
            $g=$numm[$i]['ccc'];
            //var_dump($g);
            $this->assign('w',$g);
        }
        //var_dump($numm['id'+1]['ccc']);
        //$nummm=$numm[0]['count(*)'];
        //$this->assign('m',$nummm);
        //var_dump($numm[0]['count(*)']);
        $totle = $pro2->where($con)->count();
        $nowpage = I('get.p', 1);
        $paerpage = 5;
        $page = ($nowpage - 1) * $paerpage;
        $l2 = $pro2->where($con)->limit($page, $paerpage)->select();
        //var_dump($l2);
//       for($i=0;$i<count($l);$i++ ){
//        echo $l[$i]['id'];

//           }

//       }
        //echo $l[$i]['id'];
        $this->assign('list', $l2);
        $pager = $this->pager = new Page($totle, $paerpage);
        // var_dump($pager->show());
        $this->pager->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        //$this->pager->setConfig('header','<span class="rows">�� %TOTAL_ROW% ����¼</span>');
        $pager->setConfig('prev', '��һҳ');
        $pager->setConfig('next', '��һҳ');
        $pager->setConfig('first', '��һҳ');
        $pager->setConfig('last', '���һҳ');
//               exit;
//                if ($a) {
//                    $this->success('�����ɹ�', '/Home/Lawyer/lists.html');
//                } else {
//                    $this->error('����ʧ��');
//                }
        $this->display();

    }
    public function question()
    {
        if (IS_POST) {

            $pro = D('pro');
            //var_dump($pro);
            $l = $pro->create();
            //var_dump($l);
//            exit;
            if ($l == false) {
                $arr = $pro->getError();
//            var_dump($arr);
                echo $arr;
            } else {
                $l['ptime'] = time();
                //var_dump($l);
               // var_dump(time());
                $a = $pro->add($l);
                //var_dump($pro->getLastSql());

            }
        }
        $pro2=M('pro');
        //var_dump($pro2);
        $num=$_SESSION['num'];
//        $this->assign('n',$num);
        //$pro = M('pro');
        //var_dump($_GET);
        $count=I('get.count');
        // var_dump($count);
        $con="problem like '%$count%'" ;
        // $l2 = $pro->where($con)->select();
        //$id=$_SESSION['id'];
//               for($i=0;$i<count($l);$i++ ){
//        //echo $l[$i][' id'];
//                   $id=$l[$i]['id'];
//                   var_dump($id);
//
//           }

        //var_dump($pro->getLastSql());
        $numm=$pro2->query("select pro.id,(select count(ans.id) from ans where ans.pro_id=pro.id ) as ccc from pro  ");
        $this->assign('list1',$numm);
        //var_dump($numm['id'+1]['ccc']);
        //$nummm=$numm[0]['count(*)'];
        //$this->assign('m',$nummm);
//        var_dump($numm);
        $totle = $pro2->where($con)->count();
        $nowpage = I('get.p', 1);
        $paerpage = 5;
        $page = ($nowpage - 1) * $paerpage;
        $l2 = $pro2->where($con)->limit($page, $paerpage)->select();
        //var_dump($l2);
//       for($i=0;$i<count($l);$i++ ){
//        echo $l[$i]['id'];

//           }

//       }
        //echo $l[$i]['id'];
        $this->assign('list', $l2);
        $pager = $this->pager = new Page($totle, $paerpage);
        // var_dump($pager->show());
        $this->pager->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        //$this->pager->setConfig('header','<span class="rows">�� %TOTAL_ROW% ����¼</span>');
        $pager->setConfig('prev', '��һҳ');
        $pager->setConfig('next', '��һҳ');
        $pager->setConfig('first', '��һҳ');
        $pager->setConfig('last', '���һҳ');
//               exit;
//                if ($a) {
//                    $this->success('�����ɹ�', '/Home/Lawyer/lists.html');
//                } else {
//                    $this->error('����ʧ��');
//                }
        $this->display();

    }

    public function lists()
    {
        $num=$_SESSION['num'];
//        $this->assign('n',$num);
        $pro = M('pro');
        //var_dump($_GET);
        $count=I('get.count');
        var_dump($count);
        $con="problem like '%$count%'";
        $l = $pro->where($con)->select();
        //$id=$_SESSION['id'];
//               for($i=0;$i<count($l);$i++ ){
//        //echo $l[$i]['id'];
//                   $id=$l[$i]['id'];
//                   var_dump($id);
//
//           }

        //var_dump($pro->getLastSql());
        $numm=$pro->query("select pro.id,(select count(ans.id) from ans where ans.pro_id=pro.id ) as ccc from pro  ");
        $this->assign('list1',$numm);
        //var_dump($numm['id'+1]['ccc']);
        //$nummm=$numm[0]['count(*)'];
        //$this->assign('m',$nummm);
        //var_dump($numm[0]['count(*)']);
        $totle = $pro->where($con)->count();
        $nowpage = I('get.p', 1);
        $paerpage = 5;
        $page = ($nowpage - 1) * $paerpage;
        $l2 = $pro->where($con)->limit($page, $paerpage)->select();
//       for($i=0;$i<count($l);$i++ ){
//        echo $l[$i]['id'];

//           }

//       }
       //echo $l[$i]['id'];
        $this->assign('list', $l2);
        $pager = $this->pager = new Page($totle, $paerpage);
        // var_dump($pager->show());
        $this->pager->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        //$this->pager->setConfig('header','<span class="rows">�� %TOTAL_ROW% ����¼</span>');
        $pager->setConfig('prev', '��һҳ');
        $pager->setConfig('next', '��һҳ');
        $pager->setConfig('first', '��һҳ');
        $pager->setConfig('last', '���һҳ');
        $this->display();
    }

    public function read($id)
    {
        //var_dump($id);
        $pro = M('pro');

        $l = $pro->find($id);
        $this->id = $id;

       // var_dump($l['id']);
//        var_dump($pro->getLastSql());
        //exit;
        if ($l) {
            $this->ppp = $l;


            $this->assign('a', $id);
           // var_dump($id);
            //var_dump($_SESSION['id']);
        } else {
            $this->error;
        }

        $ans=D('ans');
        $con="pro_id=$id";
        $o=$ans->where($con)->select();
        //var_dump($ans->getLastSql());
        //var_dump($o);
        $num=$ans->where($con)->count();
        $this->assign('n',$num);
//        $_SESSION['num']=$num;
//        var_dump($_SESSION['num']);

        $this->assign('list', $o);
        $lawy=D('lawy');
        //var_dump($_SESSION);
        $l3=$lawy->find();


        $this->assign('x',$l3['lawy_realname']);
        $this->assign('y',$l3['lawy_mobile']);
        //var_dump($l3);

            if (IS_POST) {

                $ans = D('ans');
                //var_dump($ans);
                $l2 = $ans->create();
//            var_dump($ans->getLastSql());
                //var_dump($l2);
//            exit;

                if ($l2 == false) {
                    $arr = $ans->getError();
//            var_dump($arr);
                    echo $arr;
                } else {
                    $l2['atime'] = time();
                    $l2['pro_id'] = $id;
//                var_dump($l['ptime']);
//                var_dump($l);
                    $id = $_SESSION['id'];
                    if($_SESSION['username']==""){
                        echo"���¼��";
                        exit;
                    }else {
                    $a = $ans->add($l2);
                    //var_dump($ans->getLastSql());
                    // exit;
                    if ($a) {
                        $this->success('�����ɹ�',100);
                    } else {
                        $this->error('����ʧ��');
                    }
                    exit;
                }
            }
        }
        $this->display();

    }
    public function answers(){
        if (IS_POST) {

            $ans = D('ans');
            //var_dump($ans);
            $l = $ans->create();
//            var_dump($ans->getLastSql());
//            var_dump($l);
//            exit;
            if ($l == false) {
                $arr = $ans->getError();
//            var_dump($arr);
                echo $arr;
            } else {
                $l['atime'] = time();
                $l['pro_id']=$_SESSION['id'];
//                var_dump($l['ptime']);
//                var_dump($l);
                $id=$_SESSION['id'];
                $a = $ans->add($l);
                //var_dump($ans->getLastSql());
                //exit;
                if ($a) {
                    $this->success('�����ɹ�','/Home/Lawyer/lists');
                } else {
                    $this->error('����ʧ��');
                }
            }
        }

        $this->display();
    }
    public function alist(){
        $ans=D('ans');
        $l=$ans->select();
        //var_dump($l);
        $this->assign('list', $l);
        $this->display();
    }


}





