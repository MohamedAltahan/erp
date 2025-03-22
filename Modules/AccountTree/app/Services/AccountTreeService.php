<?php

namespace Modules\AccountTree\Services;

use Modules\AccountTree\Models\AccountTree;
use Modules\Common\Filters\Search;

class AccountTreeService
{
    public function getAccountsTree()
    {
        return AccountTree::filter([Search::class])->defaultOrder()->get()->toTree();
    }

    public function getAccountTreeDetails($id)
    {
        return AccountTree::find($id);
    }

    public function create($request)
    {
        $parentAccount = AccountTree::find($request->parent_id);

        if (! $parentAccount) {
            return false;
        }
        // auto generate account code
        $lastChild = $parentAccount->children()->orderByDesc('account_code')->first();
        $account_code = $lastChild ? $lastChild->account_code + 1 : $parentAccount->account_code. 1;

        $accountTree = AccountTree::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'account_code' => $account_code,
            'account_nature' => $request->account_nature ?? $parentAccount->account_nature,
            'account_category' => $request->account_category ?? $parentAccount->account_category,
            'is_active' => $request->is_active ?? 1,
            'allow_delete' => $request->allow_delete ?? 1,
            'description' => $request->description,
        ]);

        $accountTree->appendToNode($parentAccount)->save();
    }
}
