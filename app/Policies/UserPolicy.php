<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Enables all abilities if the user is an admin.
     *
     * @param User $user
     * @return bool
     */
    public function before(User $user)
    {
        if ($user->admin) {
            return true;
        }
    }

    public function destroy() {
        return false;
    }
}
