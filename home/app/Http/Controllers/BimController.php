<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bimController extends Controller
{
    public function index()
    {
        return view('faculties.bim');
    }

    public function firstsem()
    {
        return view('bim_sem.1sem');
    }
    public function secondsem()
    {
        return view('bim_sem.2sem');
    }
    public function firstsyl()
    {
        return view('bim_syl.1syl');
    }
    public function secondsyl()
    {
        return view('bim_syl.2syl');
    }
    public function firstold()
    {
        return view('bim_old.1old');
    }
    public function secondold()
    {
        return view('bim_old.2old');
    }
}
