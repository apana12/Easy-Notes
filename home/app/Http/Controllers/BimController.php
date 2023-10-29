<?php

namespace App\Http\Controllers;
use App\Models\bimsem;
use App\Models\guest;
use Illuminate\Http\Request;

class BimController extends Controller
{
    public function index()
    {
        return view('faculties.bim');
    }

    public function firstsem() //for nav
    {
        return view('bim_sem.1sem');
    }
    public function firstsemafterOpen()
    {
    $firstSemData = true;
    $secSemData = false;
    $userId = auth()->id();
    // dd($userId);

    // Create a new Bimsem record with user_id and other data
    $bimsem = new bimsem;
    $bimsem->user_id = $userId;
    $bimsem->first_sem = $firstSemData;
    $bimsem->sec_sem = $secSemData;
    $bimsem->save();

    return view('bim_sem.1sem');
    }

    public function secondsem()
    {
        return view('bim_sem.1sem');
    }
    public function secondsemafterOpen()
    {
        $firstSemData = false;
        $secSemData = true;
        $userId = auth()->id();

        // Create a new Bimsem record with user_id and other data
        $bimsem = new bimsem;
        $bimsem->user_id = $userId;
        $bimsem->first_sem = $firstSemData;
        $bimsem->sec_sem = $secSemData;
        $bimsem->save();

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
