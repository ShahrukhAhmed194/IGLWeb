<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'phone','company_name','company_address','company_mobile',
        'designation','reporting_boss','reason'
      ];
}
