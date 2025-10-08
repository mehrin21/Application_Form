<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;
    protected $table ='applications';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'dob',
        'shortbio',
        'file'
    ];
}
