<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\employee;
use App\Models\employee_review;




class HomeController extends Controller
{

// basic conteil components
    
    public function index()
    {
        $data = food::all();
        return view("home",compact("data"));
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
    
// food user view
    public function ourmenu()
    {
        $data = food::all();
        return view("ourmenu",compact("data"));
    }
    
//employee user view

    public function employeeregdata(Request $request)
    {
        $data = new employee;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('employeeimage', $imagename);
        $data->image = $imagename;

        $data->fname = $request->fname;

        $data->lname = $request->lname;

        $data->email = $request->email;
        
        $data->emp_j = $request->emp_j;

        $data->emp_a = $request->emp_a;

        $data->emp_licen = $request->emp_licen;

        $data->emp_age = $request->emp_age;

        $data->emp_d1 = $request->emp_d1;
        $data->review = $request->review;

        $data->emp_location = $request->emp_location;

        $data->emp_referances = $request->emp_referances;
        $data->save();
        return redirect()->back();
    }

    public function employeeview()
    {
        $data = employee::all();     
        return view("employees",compact("data"));
    }

    public function employeerev(Request $request, $id)
    {
        $data = employee::find($id);
        $data1 = new employee_review;

        $data1->review = $request->review;
        $data1->employee_id = $request->id;

        $data1->save();  

        return redirect()->back();
    }

    public function employeeprofile(Request $request, $id)
    {
        $data = employee::find($id);
         $p =$data->id;
        $data1 = employee_review::where('employee_id', '=', $p)
        ->get();

        return view("employeeprofile", compact("data","data1"));
    }
    
    public function searchemployeerc(Request $request)
    {
        $search=$request->search;
        $data = employee::where('emp_a','Like','%'.$search.'%')  
        ->where('fname', '=', 'sendit')
        ->get();

        return view('searchemployeerc',compact('data'));  
    }
      
}
