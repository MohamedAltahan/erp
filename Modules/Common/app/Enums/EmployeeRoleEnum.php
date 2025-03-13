<?php

namespace Modules\Common\Enums;

enum EmployeeRoleEnum: int
{
    case SuperAdmin = 1;
    case Admin = 2;
    case Employee = 3;
}
