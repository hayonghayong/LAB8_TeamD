<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use Auth;
use Carbon\Carbon; 
use App\Template;

class TemplateController extends Controller
{

    // 定型文一覧
    public function index() {
      $templates = Template::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->get();
      return view('templates', [
          'templates' => $templates
      ]);
    }
    public function store(Request $request) {
        //
        //バリデーション
        $validator = Validator::make($request->all(), [
            'template' => 'required|max:255',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('input')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        // Eloquent モデル
        $templates = new Template;
        $templates->template = $request->template;
        $templates->user_id = Auth::user()->id;
        $dt = new Carbon();
        $dt = Carbon::now();
        $templates->published = $dt;
        $templates->save(); 
        return redirect('input');
    }
    public function destroy(Template $template) {
        $template->delete();
        return redirect('input');
    }
}
