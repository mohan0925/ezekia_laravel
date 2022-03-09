<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\dataList;
use Illuminate\Support\Facades\DB;

class dataListController extends Controller
{
    public function displaydata()
    {
        $candidates = DB::table('candidates')->get();
        return view('displayInfo',['data'=>$candidates]);
    }
}
