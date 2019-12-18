<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Template;
use App\User;
use Validator; 
use Auth; 


class TeamController extends Controller
{
// ログインした人しか見れない！
public function __construct()
{
$this->middleware('auth'); }

// 連絡一覧へ表示
public function index() {
$messages = Message::orderBy('created_at', 'asc')->get();
    return view('index', [
        'messages' => $messages
    ]);
}

//新規連絡登録
public function store(Request $request) {
  //バリデーション
    $validator = Validator::make($request->all(), [
        'content' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
// Eloquent モデル
$messages = new Message;
$messages->content = $request->content;
$messages->user_id = '1';
$messages->published = '2017-03-07 00:00:00';
$messages->save(); 
return redirect('/');
}

 public function getLogout(){
  Auth::logout();
  return redirect('/');
  }

}


