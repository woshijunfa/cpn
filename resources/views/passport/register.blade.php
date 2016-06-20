
@extends('layout.onepage')
@section('title', 'shareapi-注册')
@section('content')
<div class="il_box">
<div class="il_body" id="p-body">
<h4>注 册</h4>
<p id="default_tip">Ping++ 将发送一封验证邮件到你的邮箱，此邮箱将作为登录用户名</p>
<p id="success_tip" style="display:none;">注册验证邮件已发送到 
    <a href="javascript:void 0;" id="email_0"></a><br>
如果没有收到，请检查垃圾邮件<br>如果还是没有收到，请重新填写邮箱</p>
<div class="form-group">
<label class="sr-only">输入你的邮箱</label>
<input data-toggle="tooltip" data-placement="top" data-html="true" id="email" value="" class="form-control" placeholder="输入你的邮箱">
</div>
<div class="checkboxFormGroup" style="">
<label class="virtualCheckbox" for="isAgree" id="forAgree">
<input type="checkbox" name="isCheck" id="isAgree" value="0">
</label>
<span class="text-gray" style="font-size: 14px;">
我已阅读并同意
    <a href="https://pingxx.com/terms#terms" target="_blank" class="text-blue">《服务协议》</a>
    和
    <a href="https://pingxx.com/terms#privacy" target="_blank" class="text-blue">《隐私权协议》</a>
</span>
</div>
<button disabled="disabled" id="registerBtn" type="submit" class="btn btnBlack btn-block">发送验证邮件</button>
<div class="tologin text-center">已有账号？
    <a href="/login" target="_self" class="text-blue">点此登录</a>
</div>
</div>
</div>

<script type="text/javascript">
    
    $("#isAgree").click(function(){
        $("#forAgree").toggleClass("checked");
        testEnable();
    });
    $("#email").keyup(testEnable);

    function testEnable()
    {
        ($("#forAgree").hasClass("checked") && $("#email").val().trim().isEmail()) ? 
        $("#registerBtn").removeAttr("disabled") 
        : $("#registerBtn").attr("disabled", "disabled");
    }
    $("#registerBtn").click(function(){
        
        var postdata = {
            email : $("#email").val().trim(),
            _token : "{{ csrf_token() }}"
        };

        //登录操作
        $.post("/register", postdata,
        function(data){
            if (data.code == 0) {
                $("#default_tip").hide();
                $("#success_tip").show();
                $('#registerBtn').text("发送成功");
            }
            else
            {
                $('#registerBtn').addClass('error');
                $('#registerBtn').text(data.message);
            }
        });
    });

</script>
@stop

