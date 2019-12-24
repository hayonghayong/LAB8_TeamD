<?php
use Illuminate\Http\Request;
use App\Kidoku;

// 連絡一覧へ表示
Route::get('/','TeamController@home');

// 新規連絡登録
Route::post('/messages','TeamController@store');

// ログアウト
Route::get('/logout','TeamController@getLogout');

// ユーザー一覧表示
Route::get('/ichiran','UserTableController@ichiran');

// ユーザー削除
Route::delete('/user/{users}','UserTableController@destroy');

// コンタクト画面表示
Route::get('/contact','MailSendController@contact');

// メール送信機能
// Route::get('/mail', 'MailSendController@send');

// スケジュール画面表示
Route::get('/schedule','ScheduleController@index');

// カレンダーに予定追加
Route::post('/schedule','ScheduleController@store');

// 予定削除
Route::delete('/schedules/{schedules}','ScheduleController@destroy');

// 連絡一覧画面表示
Route::get('/index', 'TeamController@index');

// 新規登録画面表示
Route::get('/input','TemplateController@index');

// 定型文登録
Route::post('/templates', 'TemplateController@store');

// 定型文削除
Route::delete('/input/{template}','TemplateController@destroy');


// 未読を既読に変える
Route::get('/kidoku/{message}',function(Request $request,$message) {
    //バリデーション
    $validator = Validator::make($request->all(), [
    //   'user_id' => 'required|max:255',
    //   'message_id' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
      return redirect('index')
        ->withInput()
        ->withErrors($validator);
    }
    // Eloquent モデル
    $kidokus = new Kidoku;
    $kidokus->user_id = Auth::user()->id;
    $kidokus->message_id = $message;
    $kidokus->save(); 
    return redirect('index');
  });


Auth::routes();

Route::get('/home', 'TeamController@index')->name('home');
