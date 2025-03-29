<?php

namespace Modules\Erp\Common\Enums\AccountTree;

enum AccountTreeNatureEnum: string
{
    case Debit = 'debit';
    case credit = 'credit';
    case both = 'both';
}
