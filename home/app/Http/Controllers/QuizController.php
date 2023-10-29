<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        return view('quizs.quiz');
    }

    public function bca()
    {
        return view('quizs.bca_quiz');
    }

    public function bim()
    {
        return view('quizs.bim_quiz');
    }
    public function bsc()
    {
        return view('quizs.bsc_quiz');
    }
    // public function bsc2()
    // {
        // return view('quizs.bsc2_quiz');
    // }

}
