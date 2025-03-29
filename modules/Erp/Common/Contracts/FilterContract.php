<?php

namespace Modules\Erp\Common\Contracts;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;

interface FilterContract
{
    public function handle(Builder $query, Closure $next);
}
