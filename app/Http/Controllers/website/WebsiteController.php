<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
