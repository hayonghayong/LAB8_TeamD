@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="../../../css/login.css">
<div class="wrapper">
<div class="container">
    <h1 class="panel-heading">連絡アプリへようこそ</h1>
    <form id="send" class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" placeholder="パスワード"required>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary"id="login-button">
                                    ログイン
                </button>
                <p id="forget"><a class="btn btn-link" href="{{ route('password.request') }}">パスワードをお忘れの方はこちらへ
                </a></p>
                <p id="new"><a href="{{ route('register') }}"style="text-decoration:none;">
                新規会員登録はこちら
                </a></p>
            </div>
        </div>
    </form>
    <div class="snow">●</div>
</div>
</div>
<!-- JS -->
<script src="../../../js/jquery-2.1.3.min.js"></script>
<script>
$("#login-button").click(function(event){
event.preventDefault();
$('form').fadeOut(100);
$('.wrapper').addClass('form-success');
setTimeout(function(){
$("#send").submit();
// location.href = "index";
}, 2000);

});
</script>
@endsection
