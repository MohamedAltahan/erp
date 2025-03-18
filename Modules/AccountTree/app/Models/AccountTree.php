<?php

namespace Modules\AccountTree\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;

class AccountTree extends Model
{
    use HasFactory;
    use NodeTrait;
    use HasTranslations;
    use HasLocalizedName;

    public $translatable = ['description'];

    protected $fillable = [
        'account_code',
        'account_nature',
        'account_type',
        'allow_delete',
        'is_active',
        'name_ar',
        'name_en',
        'parent_id',
        'description'
    ];

    protected $casts = [
        'name' => 'array',
    ];

    //accessors
    public function getAccountNatureAttribute($value)
    {
        return __($value);
    }
}
