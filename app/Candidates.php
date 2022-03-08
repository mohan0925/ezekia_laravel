<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CandidatesController;

class Candidates extends Model
{
    protected $table = "candidates";
    protected $fillable = ['FirstName','LastName','Email'];

    public static function getcandidates()
    {
        $records = DB::table('candidates')->select('FirstName','LastName','Email');
        return $records;
    }
}
