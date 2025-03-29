<?php

namespace Modules\Erp\Branch\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Modules\Erp\Branch\Models\Branch;
use Modules\Common\Filters\Search;

class BranchService
{
    public function getPaginatedBranchs($perPage)
    {
        return Branch::filter([Search::class])->paginate($perPage);
    }

    public function create(Request $request, Model $model)
    {
        $Data = $request->validated();
        $model::create($Data);
    }

    public function update(Request $request, Model $model)
    {
        $userData = $request->validated();
        $model->update($userData);
    }

    public function destroy(Branch $branch)
    {
        return $branch->delete();
    }
}
