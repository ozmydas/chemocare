<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBeranda extends Model
{
    $table->bigIncrements('id');
    $table->text('name');
    $table->int('age');
    $table->text('gender');
    $table->text('address')->nullable();
    $table->text('phone');
    $table->varchar('cancer_name')->nullable(100);
    $table->int('cancer_stadium');
    $table->timestamps('created_at');
    $table->timestamps('updated_at');
    
    use HasFactory;

    protected $fillable = [
        'type', 'name', 'description'
    ];
}
