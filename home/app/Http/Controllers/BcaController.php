<?php

namespace App\Http\Controllers;
use App\Models\bcasem;
use App\Models\guest;
use Illuminate\Http\Request;

class BcaController extends Controller
{
    public function index()
    {
        return view('faculties.bca');
    }
    public function firstsem() //for nav
    {
        return view('bca_sem.1sem');
    }
       public function firstsemafterOpen() //for content
    {
        $firstSemData = true;
        $secSemData = false;
        bcasem::create([
        'first_sem' => $firstSemData,
        'sec_sem' => $secSemData,

    ]);
        return view('bca_sem.1sem');
    }
    public function secondsem()
    {
        return view('bca_sem.2sem');
    }
    public function secondsemafterOpen()
    {
        $firstSemData = false;
        $secSemData = true;
        bcasem::create([
        'first_sem' => $firstSemData,
        'sec_sem' => $secSemData,

    ]);
        return view('bca_sem.2sem');
    }

    public function firstsyl()
    {
        return view('bca_syl.1syl');
    }
    public function secondsyl()
    {
        return view('bca_syl.2syl');
    }
    public function firstold()
    {
        return view('bca_old.1old');
    }
    public function secondold()
    {
        return view('bca_old.2old');
    }
}
