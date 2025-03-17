<?php

namespace Modules\Common\Fillters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pipeline\Pipeline;
use Modules\Common\Contracts\FilterContract;

trait Filterable
{

    /**
     * Apply the given filters to the query.
     *
     * @param Builder $query
     * @param array<FilterContract> $filters
     * @return Builder
     */
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        // Handle empty filters to avoid unnecessary processing
        if (empty($filters)) {
            return $query;
        }

        // Ensure all filters implement FilterContract
        $filters = array_filter($filters, fn($filter) => $filter instanceof FilterContract);

        // Apply filters using Laravel's pipeline
        return app(Pipeline::class) // 1. Get an instance of Laravel's Pipeline
            ->send($query)          // 2. Pass the Eloquent query to the pipeline
            ->through($filters)     // 3. Apply each filter in the $filters array sequentially
            ->thenReturn();         // 4. Return the modified query
    }
}
