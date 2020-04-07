<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RazdelController extends Controller
{
    protected function create(array $data)
    {
        return RazdelController::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'surname' => $data['surname'],
            'photo' => $data['photo']->store('public/photos'),
            'roles' => $data['roles'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
