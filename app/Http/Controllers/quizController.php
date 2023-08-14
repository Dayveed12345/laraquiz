<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class quizController extends Controller
{
    public function index() {
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'Kf5IrWW9ERIcCiXhacbLUiAYHuk07K5wB6TFwYqh',
            'limit' => '2000'
        ]);

        $quizes=json_decode($response);
        foreach($quizes as $quiz){
            $field=
            $quizdb= new Quiz;
            $quizdb->question=$quiz->question;
            $quizdb->optionA=$quiz->answers->answer_a;
            $quizdb->optionB=$quiz->answers->answer_b;
            $quizdb->optionC=$quiz->answers->answer_c;
            $quizdb->optionD=$quiz->answers->answer_d;
            $quizdb->category=$quiz->category;
            $quizdb->difficulty=$quiz->difficulty;
            $quizdb->save();

        }
      // return view('index', ['question' => $quiz]);
        // dd($quiz);
    }
    public function display($category,$difficulty){
        $quiz=Quiz::where('category',$category) ->where('difficulty', $difficulty)->paginate(5);
         return view('index', ['question' => $quiz]);
        // dd($quiz);
    }

}
