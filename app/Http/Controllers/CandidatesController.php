<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Imports\CandidatesImport;
use App\Candidates;
use Excel;

class CandidatesController extends Controller
{
    public function importcandidates()
    {
        Excel::import(new CandidatesImport,public_path('/candidates.csv'));
        return 'Records are imported successfully';
    }
}