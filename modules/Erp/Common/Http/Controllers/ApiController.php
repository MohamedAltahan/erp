<?php

namespace Modules\Erp\Common\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Erp\Common\Traits\ApiResponse;

class ApiController extends Controller
{
    use ApiResponse;

    protected ?int $perPage;

    public function __construct()
    {
        $this->perPage = request()->input('per_page', 10);
    }
}
