<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\jobController;

class Job extends Model
{
    protected $table = "jobs";
    protected $fillable = ['user_id','jobTittle','companyName','startDate','endDate'];

    public static function getjobs()
    {
        $records = DB::table('jobs')->all();
        return $records;
    }
}
