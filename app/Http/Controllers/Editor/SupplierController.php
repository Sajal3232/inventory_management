<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\supplier;
use Brian2694\Toastr\Facades\Toastr;
use File;

class SupplierController extends Controller
{
    public function index(){
        return view('backEnd.supplier.add-supplier');
    }

    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'type'=>'required',
        ]);
        
        $file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/supplier/';
    	$file->move($uploadPath,$name);
        $fileUrl =$uploadPath.$name;
        
        $store_data = new Supplier();

        $store_data->name = $request->name;
        $store_data->email = $request->email;
        $store_data->phone = $request->phone;
        $store_data->nid = $request->nid;
        $store_data->address = $request->address;
        $store_data->type = $request->type;
        $store_data->shopname = $request->shopname;
        $store_data->image = $fileUrl;
        $store_data->accountholder = $request->accountholder;
        $store_data->accountno = $request->accountno;
        $store_data->bankname = $request->bankname;
        $store_data->branchname = $request->branchname;
        $store_data->city = $request->city;
        $store_data->status = $request->status;
        $store_data->save();
        Toastr::success('message', 'Supplier  add successfully!');
        return redirect('editor/supplier/manage');
    }
    public function manage(){
        $suppliers=Supplier::all();
        return view('backEnd.supplier.manage-supplier',['suppliers'=>$suppliers]);
    }

    public function supplieredit($id){
        $supplier=Supplier::find($id);
        return view('backEnd.supplier.edit-supplier',['supplier'=>$supplier]);
    }

    public function imagedelete($id){
        $delete_img=Supplier::find($id);
        File::delete(public_path() . 'public/uploads/supplier' , $delete_img->image);
        Toastr::success('message', 'Supplier image  delete successfully!');
        return redirect()->back();
    }

    public function supplierupdate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'type'=>'required',
            'status'=>'required',
        ]);

        $update_data = Supplier::find($request->hidden_id);
            $images= $request->file('image');
            if($images){
               $file= $request->file('image');
               $name = str_replace( " ", "",time().'-'.$file->getClientOriginalName());
               $uploadPath = 'public/uploads/supplier/';
               File::delete(public_path() . 'public/uploads/supplier', $update_data->image);
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
        $update_data->type = $request->type;
        $update_data->shopname = $request->shopname;
        $update_data->image = $fileUrl;
        $update_data->accountholder = $request->accountholder;
        $update_data->accountno = $request->accountno;
        $update_data->bankname = $request->bankname;
        $update_data->branchname = $request->branchname;
        $update_data->city = $request->city;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Supplier  Update successfully!');
        return redirect('editor/supplier/manage');

    }

    public function supplierview($id){
        $supplier=Supplier::find($id)->first();
        return view('backEnd.supplier.view-supplier',['supplier'=>$supplier]);
    }

    public function supplierdelete($id){
        $employee=Supplier::find($id);
        $photo=$employee->image;
        unlink($photo);
        $employee->delete();
        Toastr::success('message', 'Supplier  delete successfully!');
         return redirect('editor/supplier/manage');
     }

}
