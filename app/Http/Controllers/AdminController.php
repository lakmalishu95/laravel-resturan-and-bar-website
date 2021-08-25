<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Businesscontact;
use App\Models\employee;



class AdminController extends Controller
{

//user login

    public function user()
    {
        $data = user::all();
        return view("admin.user", compact("data"));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }


// foods fieald

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu", compact("data"));
    }
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }
    public function update(Request $request, $id)
    {
        $data = food::find($id);

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;


        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }
    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;


        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }



//employer
    public function employersdash()
    {

        return view("admin.employersdash");
    }
    public function employerreg()
    {
        return view('employerreg');
    }

// business contact controllers
    public function businesscontact(Request $request)
    {
        $data = new businesscontact;


        $data->fname = $request->fname;

        $data->lname = $request->lname;

        $data->email = $request->email;
        
        $data->bname = $request->bname;

        $data->category = $request->category;

        $data->eorc = $request->eorc;

        $data->helpful = $request->helpful;


        $data->save();

        return redirect()->back();
    }
    public function bcdash(Request $request)
    {
        $data = businesscontact::all();
        return view("admin.bcdash", compact("data"));
    }
    public function deletebc($id)
    {
        $data = businesscontact::find($id);
        $data->delete();
        return redirect()->back();
    }

//employee

    public function employedash()
    {
        
        return view("admin.employedash");
    }
    public function employeereg()
    {
        return view('employeereg');
    }
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

        $data->emp_location = $request->emp_location;

        $data->emp_referances = $request->emp_referances;

        $data->save();

        return redirect()->back();

    }
    public function employedashview()
    {
        $data = employee::all();
        return view("admin.employedash", compact("data"));
    }
   
      
}
