<?php

namespace App\Policies;


use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function create(User $currentUser)
    {
        return $currentUser->role === 0;
    }
}
