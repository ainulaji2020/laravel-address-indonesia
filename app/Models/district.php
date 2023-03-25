<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;

    protected $table = 'district';
    protected $fillable = [
        'id',
        'name',
        'province_id',
        'city_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
