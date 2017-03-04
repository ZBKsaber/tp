/**
 * 表单提交通用js
 */
$('#tijiao').on('click', function(){
    // 获取表单的数据
     var data = $('#cms_form').serializeArray();
     postData = {};
     $(data).each(function(i){
        postData[this.name] = this.value;
     });
     var url = $('#cms_form').attr('url');
     $.post(url,postData,function(result){
        if(result.status == 1){
            //成功
            $('#verifyImg').click();
            return dialog.success(result.message, result.data.jumpUrl);
        }else if(result.status == 0){
            $('#verifyImg').click();
            return dialog.error(result.message);
        }
    },'JSON');
});
