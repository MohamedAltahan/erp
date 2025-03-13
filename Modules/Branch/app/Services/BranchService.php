<?php

namespace Modules\Branch\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Modules\Branch\Models\Branch;

class BranchService
{
    public function create(Request $request, Model $model)
    {
        $Data = $request->validated();
        $model::create($Data);
    }

    public function update(Request $request, Model $model)
    {
        $employeeData = $request->validated();
        $model->update($employeeData);
    }
}
