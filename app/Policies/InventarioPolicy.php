<?php

namespace App\Policies;
use App\Models\Inventario;
use App\Models\User;

class InventarioPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function author(User $user, Inventario $inventario)
    {
        if($user->id == $inventario->user_id){
            return true;
        }
        else{
            return false;
        }
    }
}
