<?php

namespace Modules\AccountTree\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $parent = $this->accountTreeService->create($request);
    }

    public function show($id)
    {
        $accountTree = $this->accountTreeService->getAccountTreeDetails($id);

        return $this->sendResponse(
            AccountTreeDetailsResource::make($accountTree),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
