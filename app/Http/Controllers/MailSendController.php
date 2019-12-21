<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailSendController extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function send(){
        $data = [];
        Mail::send('contact', $data, function($message){
    $message->to('55mfmfmf55@gmail.com', 'Test')
    	    ->from('55mfmfmf55@gmail.com','Reffect')
    	    ->subject('アプリからのお問い合わせ');
    });
}
}
