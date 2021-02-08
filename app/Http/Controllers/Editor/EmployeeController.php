<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use File;

class EmployeeController extends Controller
{
    public function index(){
        return view('backEnd.employee.add-employee');
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
    	$uploadPath = 'public/uploads/employee/';
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
        Toastr::success('message', 'User  add successfully!');
        return redirect('editor/employee/manage');
    }

    public function manage(){
        $employess=Employee::all();
        return view('backEnd.employee.manage-employee',['employess'=>$employess]);
    }

    public function edit($id){
        $employess=Employee::find($id);
        return view('backEnd.employee.edit-employee',['employess'=>$employess]);
    }

    public function imagedelete($id){
        $delete_img = Employee::find($id);
        File::delete(public_path() . 'public/uploads/employee', $delete_img->image); 
        Toastr::success('message', 'employee image  delete successfully!');
        return redirect()->back();
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'nid'=>'required',
            'salary'=>'required',
            'status'=>'required',
        ]);

        $update_data = Employee::find($request->hidden_id);
        $images = $request->file('image');
        if ($images) {
           $file = $request->file('image');
            $name = str_replace( " ", "",time().'-'.$file->getClientOriginalName());
            $uploadPath = 'public/uploads/employee/';
            File::delete(public_path() . 'public/uploads/employee', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }
        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->phone = $request->phone;
        $update_data->nid = $request->nid;
        $update_data->address = $request->address;
        $update_data->image  	  	 = 	$fileUrl;
        $update_data->experience = $request->experience;
        $update_data->salary = $request->salary;
        $update_data->vacation = $request->vacation;
        $update_data->city = $request->city;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'User  add successfully!');
        return redirect('editor/employee/manage');
    }

}


