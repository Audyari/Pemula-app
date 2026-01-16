<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'name' => 'Audyari Wiyono',
            'email' => 'audyari.wiyono@gmail.com',
        ]);
    }
}
