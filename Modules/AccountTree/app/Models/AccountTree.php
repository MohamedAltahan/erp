<?php

namespace Modules\AccountTree\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Translatable\HasTranslations;

class AccountTree extends Model
{
    use HasFactory;
    use NodeTrait;
    use HasTranslations;

    public $translatable = ['name', 'description'];

    protected $fillable = [
        'account_code',
        'account_nature',
        'account_type',
        'allow_delete',
        'is_active',
        'name',
        'parent_id',
        'description'
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function getAccountNatureAttribute($value)
    {
        return __($value);
    }
}
