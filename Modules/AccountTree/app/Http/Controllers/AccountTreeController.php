<?php

namespace Modules\AccountTree\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\AccountTree\Models\AccountTree;
use Modules\AccountTree\Resources\AccountResource;
use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;

class AccountTreeController extends ApiController
{
    use ApiResponse;

    public function index()
    {
        $accountTree = AccountTree::defaultOrder()->get()->toTree();

        return $this->sendResponse(
            AccountResource::collection($accountTree),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
