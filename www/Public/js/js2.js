/**
 * Created by think on 2016/10/23.
 */
$(function(){
    $.('#a').click(function(){
        var input1=$('#input1').val();
        var input2=$('#input2').val();
        $.ajax({
            type:'post',
            url:'__URL__/saleprice',
            data:{af:input1,bf:input2}
        })
    })
})
