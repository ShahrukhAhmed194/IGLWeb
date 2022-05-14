<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_number','NID_BRN','passport','driving_license','nationality',
        'district','thana','present_address','permanent_address'
      ];
}
