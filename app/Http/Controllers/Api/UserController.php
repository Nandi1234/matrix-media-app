<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::paginate(15);
    }

    public function show(User $user)
    {
        return $user;
    }
}
