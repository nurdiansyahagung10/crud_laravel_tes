<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\datamodel;

class categorymodel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $table = 'category';

    public function produk()
    {
        return $this->hasMany(datamodel::class, 'category_id');
    }
}
