<?php

namespace Modules\Common\app\Trait;

use Illuminate\Support\Facades\DB;

trait ApiResponse
{

    public function sendResponse(array $data = [], ?string $message = null, int $code = 200)
    {
        $response = [
            'status' => $code === 200,
            'code'   => $code,
            'data'    => $data,
            'message' => $message ?? __('Data created successfully'),
            'db' => DB::getDatabaseName(),
        ];

        return response()->json($response, $code);
    }
}
