<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($idUser, $nameUser)
    {
        return view(
            'user.index',
            ["id" => $idUser, "name" => $nameUser]
        );
    }
}
