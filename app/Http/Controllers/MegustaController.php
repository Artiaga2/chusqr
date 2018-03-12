<?php

namespace App\Http\Controllers;

use App\Chusqer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

class MegustaController extends Controller
{
    public function like($username){

        $user = User::class->findUserByUsername($username);
        $megusta = $user->megusta;


        return view('users.megusta', [
            'user' => $user,
            'megusta' => $megusta
        ]);
    }
}
