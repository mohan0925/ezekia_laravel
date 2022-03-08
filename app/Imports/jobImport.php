<?php

namespace App\Imports;

use App\job;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Http\Controllers\jobController;

class jobImport implements ToModel,WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 1;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new job([
                'user_id' => $row[1],
                'jobTittle' => $row[2],
                'companyName' => $row[3],
                'startDate' => $row[4],
                'endDate' => $row[5],
        ]);
    }
}
