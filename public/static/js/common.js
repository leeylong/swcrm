/**
*新客户提交
*/
$("#dayu-button-submit").click(function () {
   var data = $("#dayu-form").serializeArray();
    postData = {};

    $(data).each(function (i) {
        postData[this.name] = this.value;
    })
    // console.log(postData);
    var url = SCOPE.save_url;
    var jump_url = window.location;
    $.post(url,postData,function (result) {
        if(result.status == 1){
            return dialog.success(result.message,jump_url);
        }else{
            return dialog.error(result.message);
        }
    },"JSON");

});


//公海私海切换
$(".handlePosi").click(function () {
        postData = {};
    
        //1、获取标签中的数据。
        var url = SCOPE.update_url;
        var jump_url = window.location;
    
        //2、封装数据
        postData['id'] = $(this).attr('attr-id');
        postData['status'] = $(this).attr('attr-status');
    
        console.log(postData);
        //3、发送数据
        $.post(url,postData,function (result) {
            console.log(result);
        //4、返回结果处理
            if(result.status == 1){
                return dialog.success(result.message,jump_url);
            }else{
                return dialog.error(result.message);
            }
        },"JSON");
    
    });