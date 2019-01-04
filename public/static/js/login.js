//前端登陆业务类
var login = {
    check:function () {
        var username = $('input[name="username"]').val();
        // alert(username);
        var password = $('input[name="password"]').val();

        if(!username){
            dialog.error('用户名不能为空');
        }
        if(!password){
            dialog.error('密码不能为空');
        }

        var url="/admin/login/check";
        var data = {'username':username,'password':password};
        $.post(url,data,function (result) {
            if(result.status == 0){
                dialog.error(result.message);
            }
            if(result.status == 1){
                dialog.success(result.message,'/admin/index');
            }
        },'JSON');
    }
}