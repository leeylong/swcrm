/**
 * 公司重名检测
 */
$(function(){
    //给username派发一个失去焦点事件 发送ajax请求
            $("input[name='companyname']").blur(function(){
                postData = {};
    
                postData["companyname"] = this.value;
                 console.log(postData);
                //传递数据
                var url = SCOPE.check_url;
                var jump_url = SCOPE.jump_url;
                $.post(url,postData,function (result) {
                    if(result.status == 1){
                        //如监测没有重复
                        document.getElementById("companyname").style.backgroundColor="#CCFFFF";
    //                    return dialog.success(result.message,jump_url);
                    }else{
                        //如监测有重复
                        document.getElementById("companyname").style.backgroundColor="#ffc1c1";
                        return dialog.error(result.message);
                    }
                },"JSON");
                });
});    