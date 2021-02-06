<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function add_user(){
        $user_role = Role::all();
    	return view('backEnd.user.add',['user_role'=>$user_role]);
    }
    public function save_user(Request $request){
        
    	$this->validate($request,[
    		'name'=>'required',
    		'username'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    		'designation'=>'required',
    		'role_id'=>'required',
    		'image'=>'required',
    		'status'=>'required',
    		'password'=>'required|min:6',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/user/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;
        // $userinfo=User::orderBy('id','DESC')->first();
        // $userId=$userinfo->id+1;
    	$store_data					=	new User();
    	// $store_data->id 			=	$userId;
        $store_data->name           =   $request->name;
    	$store_data->username 		=	$request->username;
    	$store_data->email  		= 	$request->email;
    	$store_data->phone  		= 	$request->phone;
    	$store_data->designation 	= 	$request->designation;
    	$store_data->role_id 		= 	$request->role_id;
    	$store_data->image 			= 	$fileUrl;
    	$store_data->password 		= 	bcrypt(request('password'));
    	$store_data->status 		= 	$request->status;
    	$store_data->save();
        Toastr::success('message', 'User  add successfully!');
    	return redirect('/superadmin/user/manage');
    }

    public function manage_user(){
    	$show_datas = DB::table('users')
    	->join('roles', 'users.role_id', '=', 'roles.id' )
    	->select('users.*', 'roles.user_role')
    	->paginate(25);
    	return view('backEnd.user.manage', [
    		'show_datas' => $show_datas,
    	]);
    }
}
