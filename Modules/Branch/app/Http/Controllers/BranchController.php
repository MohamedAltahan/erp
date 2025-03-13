<?php

namespace Modules\Branch\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Branch\Models\Branch;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;

class BranchController extends ApiController
{
    use ApiResponse;

    public function index()
    {
        $branchs = Branch::paginate($this->perPage);

        return $this->sendResponse(
            BranchResource::paginate($branchs),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(BranchRequest $request, BranchService $branchService)
    {
        $branchService->create($request);

        return $this->sendResponse(
            [],
            __('Data created successfully'),
            StatusCodeEnum::Created_successfully->value
        );
    }

    public function show(Branch $branch)
    {
        return $this->sendResponse(
            BranchResource::make($branch),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function update(BranchRequest $request, Branch $branch, BranchService $branchService)
    {
        $branchService->update($request, $branch);

        return $this->sendResponse(
            [],
            __('Data updated successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function destroy(Branch $branch)
    {
        if ($branch->role == BranchRoleEnum::SuperAdmin) {
            return $this->sendResponse(
                [],
                __('Super admin can not be deleted'),
                StatusCodeEnum::Success->value
            );
        }

        $branch->delete();

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
