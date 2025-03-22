<?php

namespace Modules\Common\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Common\Fillters\Filterable;

/**
 * @mixin Builder
 * @mixin Eloquent
 */
class BaseModel extends Model
{
    use Filterable;
}
