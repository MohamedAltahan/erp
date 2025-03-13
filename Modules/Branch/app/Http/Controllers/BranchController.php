<?php

namespace Modules\Branch\Http\Controllers;

use Modules\Branch\Http\Requests\BranchRequest;
use Modules\Branch\Http\Resources\BranchResource;
use Modules\Branch\Models\Branch;
use Modules\Branch\Services\BranchService;
use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;
use Modules\Employee\Models\Employee;

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
        $branchService->create($request, new Branch());

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
        $branch->delete();

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
