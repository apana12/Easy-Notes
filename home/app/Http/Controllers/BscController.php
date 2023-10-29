<?php

namespace App\Http\Controllers;
use App\Models\bscsem;
use App\Models\guest;
use Illuminate\Http\Request;

class BscController extends Controller
{
    public function index()
    {
        return view('faculties.bsc');
    }

    public function firstsem()
    {
        return view('bsc_sem.1sem');
    }
    public function firstsemafterOpen() //for content
    {
        $firstSemData = true;
        $secSemData = false;
        $userId = auth()->id();

        // Create a new Bimsem record with user_id and other data
        $bscsem = new bscsem;
        $bscsem->user_id = $userId;
        $bscsem->first_sem = $firstSemData;
        $bscsem->sec_sem = $secSemData;
        $bscsem->save();

        return view('bsc_sem.1sem');
    }

    public function secondsem()
    {
        return view('bsc_sem.2sem');
    }
    public function secondsemafterOpen()
    {
        $firstSemData = true;
        $secSemData = false;
        $userId = auth()->id();

        // // Create a new Bscsem record with user_id and other data
        $bscsem = new bscsem;
        $bscsem->user_id = $userId;
        $bscsem->first_sem = $firstSemData;
        $bscsem->sec_sem = $secSemData;
        $bscsem->save();

        return view('bsc_sem.2sem');
    }
    public function firstsyl()
    {
        return view('bsc_syl.1syl');
    }
    public function secondsyl()
    {
        return view('bsc_syl.2syl');
    }
    public function firstold()
    {
        return view('bsc_old.1old');
    }
    public function secondold()
    {
        return view('bsc_old.2old');
    }
}
