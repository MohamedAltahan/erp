<?php

namespace Modules\Common\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Common\app\Trait\ApiResponse;

class ApiController extends Controller
{
    use ApiResponse;

    protected ?int $perPage = 10;
}
