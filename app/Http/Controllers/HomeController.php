<?php

namespace App\Http\Controllers;

use App\Models\Businesscontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\employee;
use App\Models\employee_review;
use App\Models\employers_review;





class HomeController extends Controller
{

    // basic  components
    
    public function index()
    {       
        return view("home");
    }
    
    public function redirects()
    {
        $data = user::all();
        $data1 = employee::all();
        $data2 = businesscontact::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='admin')
        {
            return view('admin.adminhome');
        }
        elseif($usertype=='0'){
            return view('home',compact('data'));
        }
        elseif($usertype=='1')
        {
            return view('home', compact('data'));
        }
        else{
            return view('home',compact('data'));
        }
    }


    //employee 

    public function employeereg(Request $request)
    {
        $data = new employee;
    
         
    
    
        $employee = employee::where('email', '=', $request->input('email'))->first();


            if ($employee === null) {

                

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
                return redirect('register');               
            }
            else { 
                return redirect()->back()->with('message' , 'this email is already use ');
            }
     
        
        
    }
       
       
    public function employeeview()
    {
        $data = employee::all();     
        return view("employees",compact("data"));
    }
    public function searchemployeerc(Request $request)
    {
        $search=$request->search;
        $data = employee::where('emp_a','Like','%'.$search.'%')  
        ->where('fname', '=', 'sendit')
        ->get();

        return view('searchemployeerc',compact('data'));  
    }
    public function employeeprofile(Request $request, $id)
    {
        $data = employee::find($id);
         $p =$data->id;
        $data1 = employee_review::where('employee_id', '=', $p)
        ->get();

        return view("employeeprofile", compact("data","data1"));
    }
    public function employeerev(Request $request, $id)
    {
        
        $data = employee::find($id);
        $data1 = new employee_review;
        $data2 = user::all();
       
        $usertype = Auth::user()->email;
        $x = $data->email;   


        if($usertype == $x)
        {
            return redirect()->back()->with('message1', "Sorry you can't add Review for your Profile...!");
        }
        else{

            $data1->review = $request->review;
            $data1->employee_id = $request->id;

            $data1->save();  
            return redirect()->back()->with('message2', 'Review added to employee....!');


        }

        
        
        
    }


    /// employer user view

    public function businesscontact(Request $request)
    {
        $data = new businesscontact;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('bcimage', $imagename);
        $data->image = $imagename;


        $data->fname = $request->fname;

        $data->lname = $request->lname;

        $data->email = $request->email;
        
        $data->bname = $request->bname;

        $data->category = $request->category;

        $data->eorc = $request->eorc;

        $data->helpful = $request->helpful;

        $data->seek = $request->seek;

        $data->location = $request->location;

        $data->seek = $request->seek;


        $data->save();

        return redirect('register');
    }   
    public function employers()
    {
        $data = Businesscontact::all();

        return view('employers',compact('data'));
    }
    public function employerprofile(Request $request, $id)
    {
        $data = Businesscontact::find($id);
        $p =$data->id;
        $data1 = employers_review::where('employee_id', '=', $p)
        ->get();
        return view('employerprofile', compact('data','data1'));
    }
    public function employerrev(Request $request ,$id)
    {
        $data = Businesscontact::find($id);
        $data1 = new employers_review;
        $data2 = user::all();

        $email = Auth::user()->email;
        $y = $data->email;
        if($email == $y){
            return redirect()->back()->with('message1', "Sorry you can't add Review for your Profile...!");
        }
        else{

            $data1->employee_id = $request->id;
            $data1->review = $request->review;

            $data1->save(); 
            return redirect()->back()->with('message2', 'Review added to employer....!');
        }
    }

    public function bar(Request $request)
    {
     
        $data = Businesscontact::where('category', '=', 'bar')
        ->get();

        return view('subpages.employers.bar',compact('data'));
    }
    public function restaraurents(Request $request)
    {
        $data = Businesscontact::where('category', '=', 'restaurant')
        ->get();

        return view('subpages.employers.restaraunts',compact('data'));
    }
    
  
//food menu

    public function ourmenu()
    {
        $data = food::all();
        return view('/ourmenu' ,compact('data'));
    }

    

      



}
