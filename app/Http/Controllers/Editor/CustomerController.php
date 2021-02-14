<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Customer;
use File;
class CustomerController extends Controller
{
    public function index(){
        return view('backEnd.customer.add-customer');
    }

    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'nid'=>'required',
        ]);
        
        $file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/customer/';
    	$file->move($uploadPath,$name);
        $fileUrl =$uploadPath.$name;
        
        $store_data = new Customer();

        $store_data->name = $request->name;
        $store_data->email = $request->email;
        $store_data->phone = $request->phone;
        $store_data->nid = $request->nid;
        $store_data->address = $request->address;
        $store_data->shopname = $request->shopname;
        $store_data->image = $fileUrl;
        $store_data->accountholder = $request->accountholder;
        $store_data->accountno = $request->accountno;
        $store_data->bankname = $request->bankname;
        $store_data->branchname = $request->branchname;
        $store_data->city = $request->city;
        $store_data->status = $request->status;
        $store_data->save();
        Toastr::success('message', 'Customer  add successfully!');
        return redirect('editor/customer/manage');
    }

    public function manage(){
        $customers=Customer::all();
        return view('backEnd.customer.manage-customer',['customers'=>$customers]);
    }

    public function customerview($id){
        $customer=Customer::find($id)->first();
        return view('backEnd.customer.view-customer',['customer'=>$customer]);
    }

    public function customeredit($id){
        $customer=Customer::find($id);
        return view('backEnd.customer.edit-customer',['customer'=>$customer]);
    }

    public function imagedelete($id){
        $delete_img = Customer::find($id);
        File::delete(public_path() . 'public/uploads/customer', $delete_img->image); 
        Toastr::success('message', 'employee image  delete successfully!');
        return redirect()->back();
    }

    public function customerupdate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'nid'=>'required',
            'status'=>'required',
        ]);

        $update_data = Customer::find($request->hidden_id);
        $images = $request->file('image');
        if ($images) {
           $file = $request->file('image');
            $name = str_replace( " ", "",time().'-'.$file->getClientOriginalName());
            $uploadPath = 'public/uploads/customer/';
            File::delete(public_path() . 'public/uploads/customer', $update_data->image);
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
        $update_data->shopname = $request->shopname;
        $update_data->image = $fileUrl;
        $update_data->accountholder = $request->accountholder;
        $update_data->accountno = $request->accountno;
        $update_data->bankname = $request->bankname;
        $update_data->branchname = $request->branchname;
        $update_data->city = $request->city;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Customer  Update successfully!');
        return redirect('editor/customer/manage');
    }

    public function delete($id){
        $employee=Customer::find($id);
        $photo=$employee->image;
        unlink($photo);
        $employee->delete();
        Toastr::success('message', 'Customer  delete successfully!');
         return redirect('editor/customer/manage');
     }
}
