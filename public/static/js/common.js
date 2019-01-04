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