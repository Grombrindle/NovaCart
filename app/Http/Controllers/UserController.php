<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function create(Request $request)
    {
        $userAttributes = $request->validate([
            'name',
            'email',
            'number',
            'password',
        ]);
        User::create($userAttributes);
    }
    public function update(Request $request)
    {
        $logopath = $request->logo->store();
        User::update($logopath);
    }
}
