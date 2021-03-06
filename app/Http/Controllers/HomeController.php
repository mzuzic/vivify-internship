<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use DB;


class HomeController extends BaseController 
{   
    public function getView() 
    {
        return view('welcome');
    }

    public function getHello($name='') 
    {
        return View::make('hello', ['name' => $name]);
    }

    public function showLogin() 
    {
        return view('login');
    }

    public function showSignUp()
    {
        $countries = DB::table('countries')->get();
        return view('signup', ['countries' => $countries]);
    }
}