<?php

namespace Modules\Erp\Common\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Erp\Common\Traits\Filterable;
use Modules\Erp\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin Builder
 * @mixin Eloquent
 */
class BaseModel extends Model
{
    use Filterable;
    use HasFactory;
    use HasLocalizedName;
    use HasTranslations;
}
