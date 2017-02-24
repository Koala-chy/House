/**
 * Created by Administrator on 2016/10/21 0021.
 */
function test(val){
var s=document.getElementById('div5_1_4');
    var d=document.getElementById('div5_1_5');
    if(val.className=='span5_1'){
        s.style.display='block';
        d.style.display='none';
    }else if(val.className=='span5_2'){
        s.style.display='none';
        d.style.display='block';
    }
}
