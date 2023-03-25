<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class citys extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'citys';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'name',
        'province_id',
        'created_at',
        'update_at'
    ];

    public function provinces()
    {
        return $this->belongsTo(provinces::class, 'province_id', 'id');
    }
}
