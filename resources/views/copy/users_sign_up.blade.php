@extends('layout.main')
@section('title', '天梯 VPN - 注册')
@section('content')
  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <h1>注册</h1>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



        

<div class="form-container-md">
<!--   <form accept-charset="UTF-8" action="/users" class="simple_form form-horizontal" id="new_user" method="post" novalidate="novalidate">
 -->
  <div class="simple_form form-horizontal" id="new_user">

  <div style="margin:0;padding:0;display:inline">

    <div class="form-group email required user_email"><label class="email required col-sm-2 control-label" for="user_email"><abbr title="必填">*</abbr> 邮箱</label><div class="col-sm-10"><input autocapitalize="none" autocomplete="off" autocorrect="off" autofocus="autofocus" class="string email required form-control typeahead typeahead-email form-control" id="email" name="email" size="50" type="email" value="" /><p class="help-block">请填写常用的邮箱，便于接收服务器信息等重要通知，方便你长期使用<br>QQ 和 Foxmail 邮箱可能会收不到</p></div></div>

    <div class="form-group string required user_username"><label class="string required col-sm-2 control-label" for="user_username"><abbr title="必填">*</abbr> 用户名</label><div class="col-sm-10"><input autocapitalize="none" autocomplete="off" autocorrect="off" class="string required form-control" id="user_username" name="user[username]" size="50" type="text"><p class="help-block">仅限英文字母和数字,长度在6~30位</p></div></div>

    <div class="form-group password required user_password"><label class="password required col-sm-2 control-label" for="user_password"><abbr title="必填">*</abbr> 密码</label><div class="col-sm-10"><input autocapitalize="none" autocomplete="off" autocorrect="off" class="password required form-control" id="password" name="password" size="50" type="password" /></div></div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <p class="form-control-static" style="width:100%;display:block;">

        我已阅读并同意天梯的<a href="/terms_of_service" target="_blank" >《服务条款》</a>
        <a  style="text-align:right;" href="/users/sign_in" class="btn btn-link">已经有账号了？</a>
</p>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn btn-primary" id="submit" type="submit" value="注册" style="width:100%;display:block;"/>
        <div class="pull-right">
          <div class="links text-right">

</div>

        </div>
      </div>
    </div>
    </div>
<!-- </form> -->
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
          $("#submit").val("请填写正确的邮箱，然后注册");
          $("#submit").addClass("btn-danger");
          $("#submit").removeClass("btn-primary");
          return false;
      }

        var username = $("#user_username").val();
        username = username.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        nameReg = /^[0-9a-zA-Z]{6,30}$/i;
        var isok = nameReg.test(username);
        if(!isok)
        {
            $("#submit").val("请按照规则填写用户名，然后注册");
            $("#submit").addClass("btn-danger");
            $("#submit").removeClass("btn-primary");
            return false;
        }
       


        var password = $("#password").val();
      if(password.length < 8)
      {
          $("#submit").val("密码过短，最少8位");
          $("#submit").addClass("btn-danger");
          $("#submit").removeClass("btn-primary");
          return false;
      }

      $("#submit").removeClass("btn-danger");
      $("#submit").addClass("btn-primary");
      return true;
    }

    $("#submit").click(function(){

        var isok = testEnable();
        if (!isok) return;

        var postdata = {
            email : $("#email").val(),
            username : $("#user_username").val(),
            password : $("#password").val(),
            _token : "{{ csrf_token() }}"
        };

        //登录操作
        $.post("/register", postdata,
        function(data){
            if (data.code == 0) {
                $("#submit").removeClass("btn-warning");
                $("#submit").addClass("btn-primary");
                $("#submit").val("注册成功");
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

<script type="text/javascript">
//<![CDATA[

var emailMatcher = function() {
  return function findEmailDomainMatches(queryString, cb) {
    var emailDomains = [
      'gmail.com',
      'hotmail.com',
      'outlook.com',
      '163.com',
      '126.com',
      'qq.com',
      'me.com',
      'icloud.com',
      'sina.com',
      'msn.com',
      'live.com',
      'yahoo.com',
      'foxmail.com',
      'live.cn',
      'yeah.net',
      'vip.qq.com'
    ];
    var matches = [];
    var atPosition = queryString.indexOf('@');

    if (atPosition < 0) {
      $.each(emailDomains, function(i, domain) {
        matches.push({ value: queryString + '@' + domain });
      });
    } else if (atPosition > 0) {
      var username = queryString.substr(0, atPosition);
      var queryDomain = queryString.substr(atPosition + 1);

      var matchWholeDomain = false;
      var allRegex = new RegExp('^' + queryDomain + '$', 'i');
      $.each(emailDomains, function(i, domain) {
        if (allRegex.test(domain)) {
          matchWholeDomain = true;
          return false;
        }
      });
      if (matchWholeDomain) {
        return cb(matches);
      }

      var matchStart = [];
      var matchAny = [];
      var startRegex = new RegExp('^' + queryDomain, 'i');
      var anyRegex = new RegExp(queryDomain, 'i');
      $.each(emailDomains, function(i, domain) {
        if (startRegex.test(domain)) {
          matchStart.push({ value: username + '@' + domain });
        } else if (anyRegex.test(domain)) {
          matchAny.push({ value: username + '@' + domain });
        }
      });
      matches = matchStart.concat(matchAny);
    } else {

    }
 
    cb(matches.slice(0, 8));
  };
};

$('.typeahead-email').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
}, {
  name: 'EmailSuggestion',
  displayKey: 'value',
  source: emailMatcher()
});

$(".typeahead-email").mailgun_validator({
  api_key: "pubkey-4i9h0faj4mfjcibsjzbtaxbrsyfunzc9",
  in_progress: function(data) {
    $(".email-validate-result").remove();
    $(".email.form-group").removeClass("has-error");
  },
  success: function(data) {
    console.log(data);
    if(!data.is_valid) {
      $(".twitter-typeahead").after("<p class='help-block email-validate-result'>邮箱验证未通过，请确认拼写是否正确，或尝试更换邮箱</p>");
      $(".email.form-group").addClass("has-error");
    }
  }
})

//]]>
</script>
      </div>
    </div>

  </div>
@stop