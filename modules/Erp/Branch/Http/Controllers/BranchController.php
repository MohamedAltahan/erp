<?php

namespace Modules\Erp\Branch\Http\Controllers;

use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;
use Modules\Erp\Branch\Http\Requests\BranchRequest;
use Modules\Erp\Branch\Http\Resources\BranchResource;
use Modules\Erp\Branch\Models\Branch;
use Modules\Erp\Branch\Services\BranchService;

class BranchController extends ApiController
{
    use ApiResponse;

    protected $branchService;

    public function __construct(BranchService $branchService)
    {
        parent::__construct();
        $this->branchService = $branchService;
    }

    public function index()
    {
        $branchs = $this->branchService->getPaginatedBranchs($this->perPage);

        return $this->sendResponse(
            BranchResource::paginate($branchs),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(BranchRequest $request, BranchService $branchService)
    {
        $branchService->create($request, new Branch);

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
        $this->branchService->destroy($branch);

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
