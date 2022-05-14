<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'name', 'designation', 
        'company_name', 'mobile', 'email', 'address'
    ];
}
