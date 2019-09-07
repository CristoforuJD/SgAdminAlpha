<?php

namespace App\Policies;

use App\User;
use App\Bordero;
use Illuminate\Auth\Access\HandlesAuthorization;

class BorderoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bordero.
     *
     * @param  \App\User  $user
     * @param  \App\Bordero  $bordero
     * @return mixed
     */
    public function view(User $user, Bordero $bordero)
    {
        dd($user->id);
       return $user->id === ($bordero->dprojeto)->usu_gestor;
    }

    /**
     * Determine whether the user can create borderos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }



    /**
     * Determine whether the user can update the bordero.
     *
     * @param  \App\User  $user
     * @param  \App\Bordero  $bordero
     * @return mixed
     */
    public function update(User $user, Bordero $bordero)
    {

        return $user->usu_id === ($bordero->dprojeto)->usu_gestor;
    }
    public function edit(User $user, Bordero $bordero)
    {

        return $user->usu_id === ($bordero->dprojeto)->usu_gestor;
    }

    /**
     * Determine whether the user can delete the bordero.
     *
     * @param  \App\User  $user
     * @param  \App\Bordero  $bordero
     * @return mixed
     */
    public function delete(User $user, Bordero $bordero)
    {

        return $user->usu_id === ($bordero->dprojeto)->usu_gestor;
    }

    /**
     * Determine whether the user can restore the bordero.
     *
     * @param  \App\User  $user
     * @param  \App\Bordero  $bordero
     * @return mixed
     */
    public function restore(User $user, Bordero $bordero)
    {

        return $user->usu_id === ($bordero->dprojeto)->usu_gestor;
    }

    /**
     * Determine whether the user can permanently delete the bordero.
     *
     * @param  \App\User  $user
     * @param  \App\Bordero  $bordero
     * @return mixed
     */
    public function forceDelete(User $user, Bordero $bordero)
    {

        return $user->usu_id === ($bordero->dprojeto)->usu_gestor;
    }
}
