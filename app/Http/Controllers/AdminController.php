<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function admin_view(){
        $home = "home";
        return view('admin.admin_login',compact('home'));
    }
}
