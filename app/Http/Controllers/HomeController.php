<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\employee;




class HomeController extends Controller
{
    
    public function index()
    {
        $data = food::all();
        return view("home",compact("data"));
    }

    public function ourmenu()
    {
        $data = food::all();
        return view("ourmenu",compact("data"));
    }

    public function employeeview()
    {
        $data = employee::all();
        return view("employees",compact("data"));
    }

  

    public function employeeprofile($id)
    {
        $data = employee::find($id);
        return view("employeeprofile", compact("data"));
    }
 

   



    
    public function redirects()
    {
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='admin')
        {
            return view('admin.adminhome');
        }
        elseif($usertype=='employee'){
            return view('bm',compact('data'));
        }
        else{
            return view('home',compact('data'));
        }
    }
}
