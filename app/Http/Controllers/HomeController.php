<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home', [
            'users' => User::all(),
        ]);
    }

    public function masuk()
    {
        return view('masuk');
    }

    public function contact()
    {
        return view('contact');
    }
}
