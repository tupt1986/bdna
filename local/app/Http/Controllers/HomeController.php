<?php

namespace bdna\Http\Controllers;

use bdna\Http\Requests;
use Illuminate\Http\Request;
use bdna\bg_vothuanhan;

class HomeController extends Controller
{
    public function index()
    {
        $bg_vothuanhans = bg_vothuanhan::paginate(10);
        $stt=1;

        return view('welcome',[
            'bg_vothuanhans'=>$bg_vothuanhans,
            'stt'=>$stt,
        ]);
    }
}
