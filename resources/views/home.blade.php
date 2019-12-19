@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    登録完了しました。<br>
                    トップページに移ります。
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../js/jquery-2.1.3.min.js"></script>
<script>
$(window).on('load', function(){
    setTimeout(function(){
    location.href = "index";
    }, 2000);
});
</script>
@endsection
