@extends('layout.main')
@section('title', '天梯 VPN - 忘记密码？')
@section('content')
  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <h1>忘记密码？</h1>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



        

<div class="form-container-md">
  <!-- <form accept-charset="UTF-8" action="/users/password" class="simple_form form-horizontal" id="new_user" method="post" novalidate="novalidate"> -->
<div class="simple_form form-horizontal" >

  <div style="margin:0;padding:0;display:inline">


  <input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ZXluZyTKK4SZJV3TyJabpdG9DQg0YfxKisjB+QYs4Rs=" /></div>
    

    <div class="form-group email required user_email"><label class="email required col-sm-2 control-label" for="user_email"><abbr title="必填">*</abbr> 邮箱</label><div class="col-sm-10">

    <input autocapitalize="none" autocomplete="off" autocorrect="off" autofocus="autofocus" class="string email required form-control form-control" id="email" name="email" size="50" type="email" value="" />
    <p class="help-block"></p></div></div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn btn-primary" id="submit" type="submit" value="重置密码" />
        <div class="pull-right">
          <div class="links text-right">
    <a href="/users/sign_in" class="btn btn-link">已经有账号了？</a>

    <a href="/users/sign_up" class="btn btn-link">我还没注册？</a>




</div>

        </div>
      </div>
    </div>
</div>
</div>

      </div>
    </div>

  </div>

<script type="text/javascript">

    function testEnable()
    {
        var email = $("#email").val();
        email = email.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        emailReg = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
        var isemail = emailReg.test(email);

      if(!isemail)
      {
          $("#submit").val("请填写正确的邮箱，然后重置密码");
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
            _token : "{{ csrf_token() }}"
        };


                $("#submit").val("邮件正在发送中...");

        //登录操作
        $.post("/resetPassEmail", postdata,
        function(data){
            if (data.code == 0) {
                $("#submit").removeClass("btn-warning");
                $("#submit").addClass("btn-primary");
                $("#submit").val("邮件发送成功，请查收邮件完成后续流程");
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
@stop
