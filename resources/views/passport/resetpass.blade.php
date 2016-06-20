
@extends('layout.onepage')
@section('title', 'shareapi-重置密码')
@section('content')

<div class="il_box">
    <div class="il_body" id="p-body">
        <h4>重置密码</h4>
        <p id="default_tip">ShareApi将发送一封密码重置邮件到你的邮箱<br>点击按钮即可重置密码</p>

        <p id="success_tip" style="display:none;">密码重置邮件已发送到 
            <a href="javascript:void 0;" id="email_0"></a>，请尽快登录你的邮箱重置密码。<br>
            如果没有收到，请检查垃圾邮件<br>如果还是没有收到，请重新填写邮箱
        </p>

        <div class="form-group">
            <label class="sr-only">输入你的邮箱</label>
            <input data-toggle="tooltip" data-placement="top" data-html="true" id="email" value="" class="form-control" placeholder="输入你的邮箱">
        </div>

        <button disabled="disabled" id="sendEmailBtn" type="submit" class="btn btnBlack btn-block">
            发送验证邮件
        </button>
    </div>
</div>

<script type="text/javascript">

    $('#email').off('keyup').on('keyup change', function(e){
        if($('#email').val().trim().isEmail())
        {
            $('#sendEmailBtn').removeAttr('disabled');
        }
        else
        {
            $('#sendEmailBtn').attr('disabled','disabled');
            $('#sendEmailBtn').text("发送验证邮件");
        }
    });

    $("#sendEmailBtn").click(function(){
        var email = $('#email').val().trim();
        if (!email.isEmail()) {
            $('#sendEmailBtn').text("请填写正确邮箱");
            return;
        }

        var postdata={
            email:email,
            _token : "{{ csrf_token() }}"
        };

        //登录操作
        $.post("/resetPassEmail", postdata,
        function(data){
            if (data.code == 0) 
            {
                $("#default_tip").hide();
                $("#success_tip").show();
            }
            else
            {
                $("#sendEmailBtn").html(data.message);
            }
        });

    });

</script>


@stop



