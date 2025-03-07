<?php

namespace Modules\Common\Enums;

enum StatusCodeEnum: int
{
    public const Success = 200;
    public const Unprocessable_content = 422;
    public const Bad_request = 400;
    public const Unauthorized = 401;
    public const Forbidden = 403;
    public const Not_Found = 404;
    public const Server_Error = 500;
}
