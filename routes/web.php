<?php
use App\Message;
use App\Template;
use Illuminate\Http\Request;
use App\User;
use App\Schedule;

// 連絡一覧へ表示
Route::get('/','TeamController@index');

// 新規連絡登録
Route::post('/messages','TeamController@store'); 
// ログアウト
Route::get('/logout','TeamController@getLogout');

// ユーザー一覧表示
Route::get('/ichiran','TeamController@ichiran');

// ユーザー削除
Route::delete('/user/{user}','TeamController@destroy');

// コンタクト画面表示
Route::get('/contact', function () {
return view('contact');
});

// メール送信機能
// Route::get('/mail', 'MailSendController');

// カレンダーに予定追加
Route::post('/schedule','ScheduleController@store');

// カレンダーに予定表示
Route::get('/schedule','ScheduleController@index');

// 予定削除
Route::delete('/schedules/{schedules}','ScheduleController@destroy');

// 今の所ここまで修正

Route::get('/index', function () {
    $messages = Message::orderBy('created_at', 'asc')->get();
    return view('index', [
        'messages' => $messages
    ]);
    //return view('books',compact('books')); //も同じ意味
});

Route::get('/input', function () {
    $templates = Template::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->get();
    return view('templates', [
        'templates' => $templates
    ]);
    //return view('books',compact('books')); //も同じ意味
});





Route::post('/templates', function (Request $request) {
    //
    //バリデーション
    $validator = Validator::make($request->all(), [
        'template' => 'required|max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/input')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）
// Eloquent モデル
$templates = new Template;
$templates->template = $request->template;
$templates->user_id = Auth::user()->id;
$templates->published = '2017-03-07 00:00:00';
$templates->save(); 
return redirect('/input');


});

/**
* 本を削除 
*/
Route::delete('/input/{template}', function (Template $template) {
    $template->delete();
    return redirect('/'); });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
