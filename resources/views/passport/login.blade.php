
@extends('layout.onepage')
@section('title', 'shareapi-登录')
@section('content')

<div class="il_box login_box">
    <form id="login_form">
    <div class="il_body">
        <h4>登 录</h4>
        <div class="form-group">
            <label class="sr-only" for="username">登录</label>
            <input class="form-control" id="username" autofocus="autofocus" type="email" placeholder="请输入邮箱" />
        </div>
        <div class="form-group">
            <label class="sr-only" for="password">Email address</label>
            <input class="form-control" id="password" type="password" placeholder="密码" />
        </div>
    </div>
    <div class="il_btn clearfix">
        <button type="submit" id="loginBtn" class="btn btnBlack btn-block" disabled="disabled">登录</button>
        <a href="/resetpass" class="retrieve">忘记密码</a>
        <a href="/register" class="reg">注册账户</a>
    </div>
    </form>
</div>
<script type="text/javascript">
    (function(){
        var mod={};

        var cookie={
            get:function(name){
                var ret=document.cookie.match(new RegExp('(?:^|;\\s)'+name+'=(.*?)(?:;\\s|$)'));
                return ret?ret[1]:"";
            },
            set:function(name,value){
                var path='/';
                document.cookie=encodeURIComponent(name)+'='+encodeURIComponent(value)+'; path='+path;
            },
            del:function(name){
                document.cookie = name + '=; expires=Mon, 26 Jul 1997 05:00:00 GMT; path=/';
            },
            setWithExpire:function(name,value,days){
                var exp=new Date();
                exp.setTime(exp.getTime()+days*24*60*60*1000);
                document.cookie=encodeURIComponent(name)+'='+encodeURIComponent(value)+'; expires='+exp.toGMTString();
            }
        };

        mod.emailReg=/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;

        mod.init=function(){
            var _this=this;

            var lastLoginName=cookie.get('lastLoginName');
            if(lastLoginName!=''){
                $('#username').val(decodeURIComponent(lastLoginName));
            }

            _this.bind();
        };
        mod.bind=function(){
            var _this=this;

            $('#username').off('keyup').on('keyup change', function(e){
                var username=$('#username').val().trim();
                var password=$('#password').val();
                $('#loginBtn').removeClass('error');
                $('#loginBtn').text('登录');
                if(_this.emailReg.test(username)&&password.length>=6){
                    $('#loginBtn').removeAttr('disabled');
                }else{
                    if(username.match(/[\uff00-\uffff]/g)){
                        $('#loginBtn').addClass('error').attr('disabled','disabled').html('邮箱地址包含全角字符');
                    }
                    $('#loginBtn').attr('disabled','disabled');
                }
            });

            $('#password').off('keyup').on('keyup change', function(e){
                var username=$('#username').val().trim();
                var password=$('#password').val();
                $('#loginBtn').removeClass('error');
                $('#loginBtn').text('登录');
                if(_this.emailReg.test(username)&&password.length>=6){
                    $('#loginBtn').removeAttr('disabled');
                }else{
                    $('#loginBtn').attr('disabled','disabled');
                }
            });

            $('#login_form').on('submit',function(e){
                e.preventDefault();
                var username=$('#username').val().trim(),
                    password=$('#password').val();

                if (username == '') {
                    $('#loginBtn').addClass('error').text('用户名必填');
                    return;
                } else if (!_this.emailReg.test(username)) {
                    $('#loginBtn').addClass('error').text('用户名格式不正确');
                    return;
                }

                if (password == '') {
                    $('#loginBtn').addClass('error').text('密码必填');
                    return;
                } else if (password.length < 6) {
                    $('#loginBtn').addClass('error').text('密码至少 6 位');
                    return;
                }

                $('#loginBtn').removeClass('error');

                var opt={
                    email:username,
                    password:password,
                    _token : "{{ csrf_token() }}"
                };

                $('#loginBtn').text('登录中...');

                _this.login(opt).done(function(data){

                    if (data.code == 0) {
                        window.location.href = '/';
                    }
                    else
                    {
                        $('#loginBtn').addClass('error');
                        $('#loginBtn').text(data.message);
                    }

                    // if(data.status){
                    //     cookie.setWithExpire('lastLoginName',username,100);
                    //     if(location.search.length>0){
                    //         var url = location.search.split('?refer_url=')[1];
                    //         window.location.href = decodeURIComponent(url);
                    //     }else{
                    //         window.location.href = 'https://dashboard.pingxx.com/list';
                    //     }
                    // }
                }).fail(function(err){
                    $('#loginBtn').addClass('error');
                    $('#loginBtn').text(err.data.message);
                });
            });
            /*$(document).on('keyup',function(e){
                if(e.keyCode==13){
                    $('#loginBtn').trigger('click');
                }
            });*/

            setTimeout(function () {
                if (_this.emailReg.test($('#username').val().trim())) {
                    $('#loginBtn').removeAttr('disabled');
                }
            }, 50);
        };

        mod.login=function(opt){
            var defer= $.Deferred();
            $.ajax({
                type:'post',
                url:'/login',
                data:opt,
                dataType:'json',
                success:function(data){
                    defer.resolve(data);
                },
                error:function(err){
                    defer.reject(JSON.parse(err.responseText));
                }
            });
            return defer;
        };

        mod.init();
    })();
</script>
@stop



