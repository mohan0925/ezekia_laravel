<?php

namespace App\Imports;

use App\candidates;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Http\Controllers\CandidatesController;

class CandidatesImport implements ToModel,WithStartRow
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
        return new candidates([
            'FirstName' => $row[1],
            'LastName' => $row[2],
            'Email' => $row[3],
        ]);
    }
}
