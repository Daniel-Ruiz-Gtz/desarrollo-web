<?php

namespace App\Policies;

use App\Models\Recurso;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecursoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recurso  $recurso
     * @return mixed
     */
    public function view(User $user, Recurso $recurso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return ($user->tipo == 'Admin' || $user->tipo == 'Alumno');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recurso  $recurso
     * @return mixed
     */
    public function update(User $user, Recurso $recurso)
    {
        return ($acceso = $user->tipo == 'Admin' || ($user->tipo == 'Alumno' && $user->id == $recurso->user_id));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recurso  $recurso
     * @return mixed
     */
    public function delete(User $user, Recurso $recurso)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recurso  $recurso
     * @return mixed
     */
    public function restore(User $user, Recurso $recurso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recurso  $recurso
     * @return mixed
     */
    public function forceDelete(User $user, Recurso $recurso)
    {
        //
    }
}
