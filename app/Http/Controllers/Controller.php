<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view_index(){
        $home = "home";
        return view('log_in')->with('home',$home);
    }

    public function view_dashbord(){
        $home = "dashboard";
        return view('dashboard')->with('home',$home);
    }

    

    public function view_index2(){
        return view('welcome');
    }

}
