<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebsiteController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        else {
            return redirect()->route('dashboard');
        }
    }
}
