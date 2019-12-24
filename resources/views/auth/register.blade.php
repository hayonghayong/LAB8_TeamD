@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/new_user.css">
</head>
<body>
<div id="formWrapper">
    <div id="form">
        <h1>新規登録</h1>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-item">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label form-style">名前</label>
                    <input id="name" type="text" class="form-style" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-item">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label form-style">メールアドレス</label>
                    <input id="email" type="email" class="form-style" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-item">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label form-style">パスワード</label>
                    <input id="password" type="password" class="form-style" name="password" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-item">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label form-style">パスワード確認</label>
                    <input id="password-confirm" type="password" class="form-style" name="password_confirmation" required>
                </div>
            </div>
            <div class="form-item">
                <div class="form-group">
                    <label class="col-md-4 control-label form-style">権限</label>
                    <div class="radioBox form-style">
                        <div class="radio">
                            <input type="radio" id="kanri_1" name="kanri" value=1>
                            <label for="kanri_1">管理者</label>
                            <input type="radio" id="kanri_0" name="kanri" value=0 checked>
                            <label for="kanri_0">一般</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-item">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label form-style">施設名</label>
                    <input id="shisetuName" type="text" class="form-style" name="shisetuName" required>
                </div>
            </div>
            <div class="form-item">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label form-style">施設ID</label>
                    <input id="shisetuID" type="text" class="form-style" name="shisetuID" required>
                </div>
            </div>
            <div class="form-item">
                <input type="submit" class="btn btn-primary" id="login" value="会員登録">
                <a href="{{ route('login') }}" class="link-item">戻る</a>
            </div>
        </form>
    </div>
<script src="js/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function (){
    var formInputs = $('input[type="text"],input[type="email"],input[type="password"]');
    $('#kanri_0').attr('checked', true)
    formInputs.focus(function () {
        $(this).parent().children('.form-style').addClass('formTop');
        $('div#formWrapper').addClass('darken-bg');
    });
    formInputs.focusout(function (){
        if ($.trim($(this).val()).length == 0) {
        $(this).parent().children('.form-style').removeClass('formTop');
        }
    });
});
</script>
</body>

@endsection
