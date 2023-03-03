<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPanel extends Controller
{
    public function dashboard(){

        dd('Asdasd');

        return view('adminpanel.pages.main.dashboard');
    }
}
