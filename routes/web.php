<?php


use App\Message;
use App\Template;
use Illuminate\Http\Request;

/**
* 本のダッシュボード表示(books.blade.php)
*/
Route::get('/', function () {
    $messages = Message::orderBy('created_at', 'asc')->get();
    return view('index', [
        'messages' => $messages
    ]);
    //return view('books',compact('books')); //も同じ意味
});

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


/**
* 新「本」を追加 
*/
Route::post('/messages', function (Request $request) {
    //
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
    //以下に登録処理を記述（Eloquentモデル）
// Eloquent モデル
$messages = new Message;
$messages->content = $request->content;
$messages->user_id = '1';
$messages->published = '2017-03-07 00:00:00';
$messages->save(); 
return redirect('/');


});



Route::post('/input', function (Request $request) {
    //
    //バリデーション
    $validator = Validator::make($request->all(), [
        'template' => 'required|max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
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
return redirect('/');


});

/**
* 本を削除 
*/
Route::delete('/message/{message}', function (Message $message) {
    //
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
