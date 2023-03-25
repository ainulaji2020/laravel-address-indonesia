<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class provinces extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'provinces';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'update_at',
    ];

   

}
