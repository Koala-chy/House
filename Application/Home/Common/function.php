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
function arr2link($arr,$except){
    unset($arr[$except]);
    $baseLink = '';
    foreach($arr as $k=>$v){
        $baseLink .= $k."/".$v."/";
    }
    return $baseLink;
}
//ͳ����Ч��Դ��
function agent_count($mid_id){

    $obj=M('Sale_infomation');

    $arr['agent_id']=$mid_id;

    $data=$obj->join('LEFT JOIN agent_mid ON Sale_infomation.agent_id =agent_mid.mid_id')->where($arr)->count();

    return $data;

}

//��ȡ�ַ���
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)

{
    if(function_exists("mb_substr")){

        if($suffix)

            return mb_substr($str, $start, $length, $charset)."...";

        else

            return mb_substr($str, $start, $length, $charset);

    }

    elseif(function_exists('iconv_substr')) {

        if($suffix)

            return iconv_substr($str,$start,$length,$charset)."...";

        else

            return iconv_substr($str,$start,$length,$charset);

    }

    $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";

    $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";

    $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";

    $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";

    preg_match_all($re[$charset], $str, $match);

    $slice = join("",array_slice($match[0], $start, $length));

    if($suffix) return $slice."��";

    return $slice;

}
//���㵥�ۺ���
function price($total,$area){
    $pri=($total*10000)/$area;
    return round($pri);
}
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/19
 * Time: 10:30
 */