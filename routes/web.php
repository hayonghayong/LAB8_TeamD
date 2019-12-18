<?php


use App\Message;
use App\Template;
use Illuminate\Http\Request;

// 連絡一覧へ表示
Route::get('/','TeamController@index');

// 新規連絡登録
Route::post('/messages','TeamController@store'); 

// ログアウト
Route::get('/logout','TeamController@getLogout');

// スケジュールを表示
Route::get('/schedule', function () {
    return view('schedule');
});


// 今の所ここまで修正
Route::get('/index', function () {
    $messages = Message::orderBy('created_at', 'asc')->get();
    return view('index', [
        'messages' => $messages
    ]);
    //return view('books',compact('books')); //も同じ意味
});

Route::get('/input', function () {
    $templates = Template::orderBy('created_at', 'asc')->get();
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
$templates->user_id = '1';
$templates->published = '2017-03-07 00:00:00';
$templates->save(); 
return redirect('/input');


});

/**
* 本を削除 
*/
Route::delete('/message/{message}', function (Message $message) {
    //
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
