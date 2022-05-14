<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'father_name', 'father_occupation', 'father_nid', 'father_mobile', 'father_email',
        'mother_name', 'mother_occupation', 'mother_nid', 'mother_mobile',  'mother_email',
        'brothers', 'sisters'
    ];
}
