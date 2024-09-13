<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        if (Auth::user()->type=="user") 
        {
            return view('dashboard');
        } else {
            return view('admin.index');
        }
    }
}





