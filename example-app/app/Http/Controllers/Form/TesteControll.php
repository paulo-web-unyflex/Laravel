<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TesteControll extends Controller
{
    public function listAllUsers()
    {
        $users= User:: all();
        dd($users);
    }
}
