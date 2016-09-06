<?php

namespace bdna\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use bdna\Http\Requests;
use bdna\bg_vothuanhan;

class Bg_vothuanhanController extends Controller
{
    public function index(){
        $bg_vothuanhans = bg_vothuanhan::all();
        $stt=1;
        return view('vothuanhan.index',[
            'bg_vothuanhans'=>$bg_vothuanhans,
            'stt'=>$stt,
        ]);
    }
    public function view_import(){
        return view('vothuanhan.import');
    }
    public function import(){
        Excel::load(Input::file('file'), function ($reader){
            $reader->each(function ($sheet){
                foreach ($sheet->toArray() as $row){
                    bg_vothuanhan::firstOrCreate($sheet->toArray());
                }
            });
        });
        return redirect('/vothuanhan');
    }
}
