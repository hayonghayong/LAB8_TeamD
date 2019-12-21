<?php
use Illuminate\Http\Request;

// 連絡一覧へ表示
Route::get('/','TeamController@home');

// 新規連絡登録
Route::post('/messages','TeamController@store');

// ログアウト
Route::get('/logout','TeamController@getLogout');

// ユーザー一覧表示
Route::get('/ichiran','UserTableController@ichiran');

// ユーザー削除
Route::delete('/user/{user}','UserTableController@destroy');

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

Auth::routes();

Route::get('/home', 'TeamController@index')->name('home');
