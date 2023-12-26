<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorymodel;


class datamodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'harga',
        'category_id'
    ];

    protected  $table = 'datamodels';


    public function category()
    {
        return $this->belongsTo(categorymodel::class);
    }

}
