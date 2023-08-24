<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBiodata extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'age', 'gender', 'phone', 'address', 'cancer_name', 'cancer_stadium'
    ];
}
