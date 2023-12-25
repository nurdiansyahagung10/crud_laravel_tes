<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis'
    ];

    protected  $table = 'datamodels';
}
