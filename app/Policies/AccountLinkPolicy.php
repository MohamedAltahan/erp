<?php

namespace App\Policies;

use App\Models\AccountLink;
use Modules\Erp\User\Models\User;

class AccountLinkPolicy extends BasePolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_account_link');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, AccountLink $accountLink)
    {
        return ! $accountLink->is_private && $user->can('view_account_link');
    }

    /**
     * Determine whether the user can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_account_link');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, AccountLink $accountLink)
    {
        return ! $accountLink->is_private && $user->can('update_account_link');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, AccountLink $accountLink)
    {
        return ! $accountLink->is_private && $user->can('delete_account_link');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, AccountLink $accountLink)
    {
        return ! $accountLink->is_private && $user->can('restore_account_link');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, AccountLink $accountLink)
    {
        return ! $accountLink->is_private && $user->can('force_delete_account_link');
    }
}
