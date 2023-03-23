<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'order_no',
        'address',
        'external_job_no',
        'ecd',
        'type',
        'client_name',
        'priority',
        'assigned',
        'allocation',
        'from_date',       
        'to_date',       
        'status',       
        'ret_rem',       
        'comments',
        'approved',
        'value',
        'your_ref',
        'cl_access_no',
        'notes'
    ];

 
}
