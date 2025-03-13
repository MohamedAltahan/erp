<?php

namespace Modules\Branch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

// use Modules\$MODULE$\Database\Factories\$NAME$Factory;

class Branch extends Model
{
    use HasFactory, HasTranslations;

    public $timestamps = false;

    protected $translatable = ['name', 'description', 'address'];

    protected $fillable = ['name', 'description', 'address', 'status', 'phone', 'created_at'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'address' => 'array',

    ];
}
