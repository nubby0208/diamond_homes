<?php

namespace App\Exports;

use App\Models\JobsModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;



class ExportJobs implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
      public function headings():array{
        return[
            'Id',
            'Title',
            'Description',
            'Order No',
            'Address',
            'External Job No',
            'ECD',
            'Type',
            'Client Name',
            'Priority',
            'Assigned',
            'Allocation',
            'From Date',
            'To Date',
            'Status',
            'Ret/Rem',
            'Comments',
            'Approved',
            'Value',
            'Your Ref',
            'CL/Access No',
            'Notes',
            'Created_at',
            'Updated_at' 
        ];
    }  
    
    public function collection()
    {
      
      
        return JobsModel::all();
    }
}
