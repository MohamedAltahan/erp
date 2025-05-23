<?php

namespace App\Policies;

use App\Models\PurchaseItem;
use Modules\Erp\User\Models\User;

class PurchaseItemPolicy extends BasePolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_purchase_item');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PurchaseItem $purchaseItem)
    {
        return $user->can('view_purchase_item');
    }

    /**
     * Determine whether the user can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_purchase_item');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PurchaseItem $purchaseItem)
    {
        return $user->can('update_purchase_item');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PurchaseItem $purchaseItem)
    {
        return $user->can('delete_purchase_item');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PurchaseItem $purchaseItem)
    {
        return $user->can('restore_purchase_item');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PurchaseItem $purchaseItem)
    {
        return $user->can('force_delete_purchase_item');
    }
}
