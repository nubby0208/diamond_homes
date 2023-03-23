<?php

namespace App\Exports;

use App\Models\JobsModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCompleteJobs implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JobsModel::where('status','Completed')->get();
    }
}
