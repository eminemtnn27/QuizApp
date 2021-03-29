<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
class MainController extends Controller
{
    public function dashboard(){
      $quizzes=Quiz::where('status','publish')->withCount('questions')->paginate(5);
        return view('dashboard',compact('quizzes'));
    } 
    public function quiz_detail(){
        $quiz=Quiz::whereSlug($slug)->withCount('questions')->first() ?? abort(404,'Quiz bulunamadı');
        return view('quiz_detail',compact($quiz));
    } 
}
