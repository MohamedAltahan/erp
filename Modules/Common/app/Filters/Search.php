<?php

namespace Modules\Common\Filters;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Modules\Common\Contracts\FilterContract;

class Search implements FilterContract
{
    public function handle(Builder $query, Closure $next)
    {
        return $next($query)->when(request('name'), function ($query) {
            $query->where('name', 'like', '%' . request('name') . '%');
        });
    }
}
