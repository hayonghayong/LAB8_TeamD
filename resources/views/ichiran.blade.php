@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>連絡帳アプリ</title>
  <!--Main CSS-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> 
  <!--Menu CSS-->
  <link rel="stylesheet" href="/css/menu.css">
  <!--Main CSS END-->
</head>
<body>
<!-- メニュー表示 -->
@include('menu')

<!-- 表示 -->
@if (count($users) > 0)
<div class="card-body">
<table class="table table-striped task-table">
<!-- テーブルヘッダ -->
<thead> <th>会員一覧</th>
<th>&nbsp;</th> </thead>
<!-- テーブル本体 -->
<tbody>
@foreach ($users as $users)
<tr>
<td class="table-text">
<div> {{$users->name }} </div> 
</td>
<!-- 本: 削除ボタン -->
 <td>
  <form action="{{ url('users/'.$users->id) }}" method="POST"> {{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="btn btn-danger"> 削除
</button>
</form>
</td> 
</tr>
@endforeach
</tbody> 
</table>
@endif
</body>