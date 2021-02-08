<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view('backEnd.layouts.pages.add-employee');
    }
    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'nid'=>'required',
            'salary'=>'required',
            'status'=>'required',
        ]);
        
        $file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/user/';
    	$file->move($uploadPath,$name);
        $fileUrl =$uploadPath.$name;
        
        $store_data = new Employee();

        $store_data->name = $request->name;
        $store_data->email = $request->email;
        $store_data->phone = $request->phone;
        $store_data->nid = $request->nid;
        $store_data->address = $request->address;
        $store_data->experience = $request->experience;
        $store_data->image = $fileUrl;
        $store_data->salary = $request->salary;
        $store_data->vacation = $request->vacation;
        $store_data->city = $request->city;
        $store_data->status = $request->status;
        $store_data->save();
        return redirect('editor/employee/manage');
    }
}
