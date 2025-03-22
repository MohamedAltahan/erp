<?php

namespace Modules\AccountTree\Http\Controllers;

use Illuminate\Http\Request;
use Modules\AccountTree\Http\Requests\AccountTreeRequest;
use Modules\AccountTree\Models\AccountTree;
use Modules\AccountTree\Resources\AccountsTreeResource;
use Modules\AccountTree\Resources\AccountTreeDetailsResource;
use Modules\AccountTree\Services\AccountTreeService;
use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;

class AccountTreeController extends ApiController
{
    use ApiResponse;

    protected $accountTreeService;

    public function __construct(AccountTreeService $accountTreeService)
    {
        parent::__construct();
        $this->accountTreeService = $accountTreeService;
    }

    public function index()
    {
        $accountsTree = $this->accountTreeService->getAccountsTree();

        return $this->sendResponse(
            AccountsTreeResource::collection($accountsTree),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(AccountTreeRequest $request)
    {
        $this->accountTreeService->create($request);

        return $this->sendResponse(
            [],
            __('Data created successfully'),
            StatusCodeEnum::Created_successfully->value
        );
    }

    public function show(int $id)
    {
        $accountTree = $this->accountTreeService->getAccountTreeDetails($id);

        return $this->sendResponse(
            AccountTreeDetailsResource::make($accountTree),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function update(AccountTreeRequest $request, $id)
    {
        $this->accountTreeService->update($request, $id);
        return $this->sendResponse(
            [],
            __('Data updated successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function destroy(int $id)
    {
        $this->accountTreeService->destroy($id);

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
