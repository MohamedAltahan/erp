<?php

namespace Modules\Employee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

// use Modules\Employee\Database\Factories\EmployeeFactory;

class Employee extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [];
}
