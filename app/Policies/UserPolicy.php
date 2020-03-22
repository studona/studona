<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Determine whether the user can view any students.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can view the student.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user, User $userToSee)
    {
        return ($user->role_id == 1 || $user->id == $userToSee->id);
    }

    /**
     * Determine whether the user can create students.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can update the student.
     *
     * @param  \App\User  $user
     * @param  \App\User  $userToUpdate
     * @return mixed
     */
    public function update(User $user, User $userToUpdate)
    {
        return ($user->role_id == 1 || $user->id == $userToUpdate->id);
    }

    /**
     * Determine whether the user can delete the student.
     *
     * @param  \App\User  $user
     * @param  \App\User  $userToDel
     * @return mixed
     */
    public function delete(User $user, User $userToDel)
    {
        return $user->role_id == 1;
    }

}
