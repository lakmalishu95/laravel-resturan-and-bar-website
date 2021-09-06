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


// foods fieald admin dashboard

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
    public function searchfood(Request $request)
    {
        $search=$request->search;
        $data = food::where('title','Like','%'.$search.'%')->get();

        return view('admin.foodmenu',compact('data'));   
    }



//employer
    public function employersdash()
    {
        return view("admin.employersdash");
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
    
    public function employedashview()
    {
        $data = employee::all();
        return view("admin.employedash", compact("data"));
    }

    public function searchemployee(Request $request)
    {
        $search=$request->search;
        $data = employee::where('fname','Like','%'.$search.'%')->get();

        return view('admin.employedash',compact('data'));   
    }

    public function empdelete($id)
    {
        $data = employee::find($id);
        $data->delete();
        return redirect()->back();

    }
    

    
}
