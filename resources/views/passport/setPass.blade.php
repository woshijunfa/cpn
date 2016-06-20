
@extends('layout.onepage')
@section('title', 'shareapi-注册')
@section('content')

<div class="il_box">
    <div class="il_body" id="p-body">    
        <h4>设置密码</h4>
        <p>创建密码并确认即可完成注册</p>
        
        <div class="form-group">
            <label class="sr-only">创建新密码</label>
            <input type="password" id="pwd_1" class="form-control" placeholder="创建新密码">
        </div>
        
        <div class="form-group">
            <label class="sr-only">重新输入密码</label>
            <input type="password" id="pwd_2" class="form-control" placeholder="重新输入密码">
        </div>

        <button disabled="disabled" id="resetBtn" type="submit" class="btn btnBlack btn-block">设置密码</button>
    </div>
</div>

<script type="text/javascript">
    $("#pwd_2").keyup(function(e) {
        t = $("#pwd_1").val();
        n = $("#pwd_2").val();
        if (n.length < 6) 
        {
            $("#resetBtn").html("密码过短"), $("#resetBtn").attr("disabled", "disabled");
            return;
        }

        if (n.length > 40) 
        {
            $("#resetBtn").html("密码不超过 40 位"), $("#resetBtn").attr("disabled", "disabled");
            return;
        }

        n != t ? ($("#resetBtn").html("密码不一致"), $("#resetBtn").attr("disabled", "disabled")) : 
        ($("#resetBtn").html("完成"), $("#resetBtn").removeAttr("disabled"));
    });

    $("#resetBtn").click(function(){
        var postdata = {
            password : $("#pwd_1").val().trim(),
            _token : "{{ csrf_token() }}"
        };

        //登录操作
        $.post("/setLoginPass", postdata,
        function(data){
            if (data.code == 0) 
            {
                window.location.href = "/";
            }
            else
            {
                $("#resetBtn").html(data.message);
            }
        });

    });

</script>

@stop

