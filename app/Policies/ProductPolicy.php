<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user)
    {
        return $user->email ==='admin@admin.com';
    }

    public function update(User $user,Product $product)
    {
        return $user->email === 'admin@admin.com';
    }
}
