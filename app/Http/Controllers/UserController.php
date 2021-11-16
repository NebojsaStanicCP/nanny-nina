<?php

namespace App\Http\Controllers;

use App\ModelFilters\UserFilter;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->request->add([
            'firstname' => 'Emma',
            'nickname' => 'Kristina',
        ]);

        return User::filter($request->all(), UserFilter::class)->get();
    }
}
