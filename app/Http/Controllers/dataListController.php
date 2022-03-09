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
        $filtereddata = [];
        // $candidates = DB::table('candidates')->get();

        $candidates = DB::table('jobs')
        ->select('jobs.user_id','candidates.FirstName','candidates.LastName','candidates.Email',
        'jobs.jobTittle','jobs.companyName','jobs.startDate','jobs.endDate')
        ->join('candidates', function ($join) {
            $join->on('jobs.user_id', '=', 'candidates.id')
            ->orderBy('jobs.endDate', 'DESC')
            ->orderBy('jobs.user_id', 'ASC');
        })
        ->get();

        return view('displayInfo',['data'=>$candidates]);
    }
}
