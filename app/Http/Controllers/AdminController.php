<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createAdmin()
    {
        if (User::where('email', 'residence@gmail.com')->exists()) {
            return "Un utilisateur avec cet email existe déjà.";
        }

        User::create([
            'name' => 'Admin',
            'email' => 'residence@gmail.com',
            'password' => bcrypt('residence@2004'),
            'role' => 'admin',
        ]);

        return "Admin user created!";
    }
}
