<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tvproduction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth')->except('welcome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  

    public function welcome()
    {
       $all_tvproductions = Tvproduction::latest()->get();
        return view('welcome',compact('all_tvproductions'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin-home');
    }


    public function contentcreatorHome()
{
    return view('contentcreator-home');
}

public function companyHome()
{
    return view('company-home');
}
    
}

