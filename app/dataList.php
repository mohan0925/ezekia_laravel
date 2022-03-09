<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataList extends Model
{
    // protected $table = "candidates";
    // protected $fillable = ['FirstName','LastName','Email'];

    public static function getfiltereddata()
    {
        $results = jobs::whereIn('id', function($query){
            $query->select('id')->where('datetime', DB::raw("(select max('datetime') from table)"));
            })->orderBy('id', 'desc')->first();
    }
}
