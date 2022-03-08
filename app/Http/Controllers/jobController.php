<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imports\jobImport;
use App\job;
use Excel;


class jobController extends Controller
{
    public function importjobs()
    {
        Excel::import(new jobImport,public_path('/jobs.csv'));
        return 'Records are imported successfully';
    }
}
