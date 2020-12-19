<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){
        return view('admin.index');
    }
    public function admin_login(){
        
        return view('admin.index');
    }
}
