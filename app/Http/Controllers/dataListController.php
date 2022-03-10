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
        $candidates = DB::table('jobs')
        ->join('candidates', 'candidates.id', '=', 'jobs.user_id')
        ->select('jobs.user_id','candidates.FirstName','candidates.LastName','candidates.Email',
        'jobs.jobTittle','jobs.companyName','jobs.startDate','jobs.endDate')
        ->orderBy('jobs.user_id', 'ASC')
        ->orderBy('jobs.endDate', 'DESC')
        ->get();

        return view('displayInfo',['data'=>$candidates]);
    }
}
