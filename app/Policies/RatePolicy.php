<?php

namespace App\Policies;

use App\Rate;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the rate.
     *
     * @param  \App\User  $user
     * @param  \App\Rate  $rate
     * @return mixed
     */
    public function view(User $user, Rate $rate)
    {
        //
    }

    /**
     * Determine whether the user can create rates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the rate.
     *
     * @param  \App\User  $user
     * @param  \App\Rate  $rate
     * @return mixed
     */
    public function update(User $user, Rate $rate)
    {
        return auth()->user()->positon('ceo');
    }

    /**
     * Determine whether the user can delete the rate.
     *
     * @param  \App\User  $user
     * @param  \App\Rate  $rate
     * @return mixed
     */
    public function delete(User $user, Rate $rate)
    {
        //
    }

    /**
     * Determine whether the user can restore the rate.
     *
     * @param  \App\User  $user
     * @param  \App\Rate  $rate
     * @return mixed
     */
    public function restore(User $user, Rate $rate)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the rate.
     *
     * @param  \App\User  $user
     * @param  \App\Rate  $rate
     * @return mixed
     */
    public function forceDelete(User $user, Rate $rate)
    {
        //
    }
}
