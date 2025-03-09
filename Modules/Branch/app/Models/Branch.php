<?php

namespace Modules\Branch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Modules\$MODULE$\Database\Factories\$NAME$Factory;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = ['name_ar', 'name_en', 'description', 'address', 'note', 'phone', 'created_at'];

    protected $casts = [
        'description' => 'array',
        'address' => 'array',
        'note' => 'array',
    ];
}
