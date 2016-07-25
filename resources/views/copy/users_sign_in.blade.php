@extends('layout.main')
@section('title', '天梯 VPN - 连接世界的梯子')
@section('content')
  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <h1>登录</h1>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



        

<div class="form-container-md">
  <!-- <form accept-charset="UTF-8" action="/users/sign_in" class="simple_form form-horizontal" id="new_user" method="post" novalidate="novalidate"> -->
  <div class="simple_form form-horizontal" id="new_user">

  <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="JqVZ5sbDPuPQ4V2MGRFOrGPEStaklvgZQtc2bCsI0Bw=" /></div>
    <div class="form-group string optional user_login"><label class="string optional col-sm-2 control-label" for="user_login">帐号</label><div class="col-sm-10">

    <input autocapitalize="none" autocomplete="off" autocorrect="off" autofocus="autofocus" class="string optional form-control" id="email" name="email" placeholder="邮箱或者用户名" size="50" type="text" /></div></div>
    <div class="form-group password optional user_password"><label class="password optional col-sm-2 control-label" for="user_password">密码</label><div class="col-sm-10">

    <input autocapitalize="none" autocomplete="off" autocorrect="off" class="password optional form-control" id="password" name="password" size="50" type="password" /></div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input name="user[remember_me]" type="hidden" value="0" /><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1" /> 记住密码
            </label>
          </div>
        </div>
      </div>
      

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn-primary" id="submit" name="submit" type="submit" value="登录" />
        <div class="pull-right">
          <div class="links text-right">

    <a href="/users/sign_up" class="btn btn-link">我还没注册？</a>

    <a href="/users/password/new" class="btn btn-link">忘记密码？</a>
</div>

        </div>
      </div>
    </div>
<!-- </form> -->

<script type="text/javascript">
    function testEnable()
    {
        var email = $("#email").val();
        email = email.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        emailReg = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
        var isemail = emailReg.test(email);

        var username = $("#email").val();
        username = username.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        nameReg = /^[0-9a-zA-Z]{6,30}$/i;
        var isok = nameReg.test(username);

      if(!isemail && !isok)
      {
          $("#submit").val("请填写正确的邮箱或者用户名，然后登录");
          $("#submit").addClass("btn-warning");
          $("#submit").removeClass("btn-primary");
          return false;
      }

        var password = $("#password").val();
      if(password.length < 8)
      {
          $("#submit").val("密码错误，最少8位");
          $("#submit").addClass("btn-warning");
          $("#submit").removeClass("btn-primary");
          return false;
      }

      $("#submit").removeClass("btn-warning");
      $("#submit").addClass("btn-primary");
      return true;
    }


  $("#submit").click(function(){

        var isok = testEnable();
        if (!isok) return;

        var postdata = {
            email : $("#email").val(),
            password : $("#password").val(),
            _token : "{{ csrf_token() }}"
        };

        //登录操作
        $.post("/login", postdata,
        function(data){
            if (data.code == 0) {
                $("#submit").removeClass("btn-warning");
                $("#submit").addClass("btn-primary");
                $("#submit").val("登录成功");
                window.location.href = "{!!gGetTarUrl()!!}";
            }
            else
            {
              $("#submit").addClass("btn-warning");
              $("#submit").removeClass("btn-primary");
              $("#submit").val(data.message);
            }
        });


  });

</script>

</div>
</div>

      </div>
    </div>

  </div>
@stop
