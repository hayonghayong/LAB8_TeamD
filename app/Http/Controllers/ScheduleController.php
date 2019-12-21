<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator; 
use Auth;
use App\Schedule;

class ScheduleController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  
  // 予定追加
  public function store(Request $request) {
    $schedules = new Schedule;
    $schedules->date = $request->date; 
    $schedules->schedules = $request->content; 
    $schedules->name =Auth::user()->name; 
    $schedules->save(); 
    //return view('schedule');
    return $this->index();
  }

  //  予定表示
  public function index(){
    $schedules = Schedule::orderBy('created_at', 'asc')->get(); 
    return view('schedule', ['schedules' => $schedules]);
  }

  // 予定削除
  public function destroy(Schedule $schedules) {
    $schedules->delete();
    return redirect('schedule');
  }
}
