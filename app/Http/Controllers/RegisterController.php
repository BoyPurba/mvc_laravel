<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RegisterController extends Controller
{
    public function form() {
        return view('form');
    }

    
    public function dashboard() {
        return view('dashboard');
    }

    public function dashboard_post(Request $request) {
        // dd($request->all());
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        return view ('dashboard', ["first_name" => $first_name, "last_name" => $last_name]);
    }


}
