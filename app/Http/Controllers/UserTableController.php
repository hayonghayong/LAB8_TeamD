<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use Auth;
use App\User;

class UserTableController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    
    // ユーザー一覧表示
    public function ichiran() {
      $users = User::orderBy('created_at', 'asc')
      ->where('shisetuID', '=', Auth::user()->shisetuID)
      ->get();
      return view('ichiran', ['users' => $users ]);
    }
    
    // ユーザー削除
    public function destroy(Usder $user) {
      $user->delete();
      return redirect('ichiran');
    }
}
