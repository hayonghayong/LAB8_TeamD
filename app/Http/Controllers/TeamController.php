<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use Auth;
use Carbon\Carbon;
use App\Message; 

class TeamController extends Controller
{
// ログインした人しか見れない！
public function __construct(){
  $this->middleware('auth');
}

// 連絡一覧へ表示
public function home() {
  return redirect('login');
}

// 連絡一覧へ表示
public function index() {
  // INNAR JOIN
  $messages = \DB::table('messages')
  ->select(
    'messages.id as id',
    'messages.user_id as user_id',
    'users.name as user_name',
    'messages.content as content',
    'messages.published as published',
    'messages.created_at as created_at',
    'messages.updated_at as updated_at')
  ->join('users','messages.user_id','=','users.id')
  ->where('users.shisetuID', '=', Auth::user()->shisetuID)
  ->orderBy('messages.published', 'desc')
  ->get();
  return view('index', ['messages' => $messages]);
}

//新規連絡登録
public function store(Request $request) {
  //バリデーション
  $validator = Validator::make($request->all(), [
    'content' => 'required|max:255',
  ]);
  //バリデーション:エラー 
  if ($validator->fails()) {
    return redirect('index')
      ->withInput()
      ->withErrors($validator);
  }
  // Eloquent モデル
  $messages = new Message;
  $messages->content = $request->content;
  $messages->user_id = Auth::user()->id;
  $dt = new Carbon();
  $dt = Carbon::now();
  $messages->published = $dt;
  $messages->save(); 
  return redirect('index');
}

// ログアウト
 public function getLogout(){
  Auth::logout();
  return redirect('login');
}


}


