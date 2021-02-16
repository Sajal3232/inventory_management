<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');                                                                                                                                                              ;
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['as'=>'superadmin.', 'prefix'=>'superadmin', 'namespace'=>'Superadmin','middleware'=>['auth', 'superadmin']], function(){
    // superadmin dashboard
    Route::get('/dashboard', [App\Http\Controllers\Superadmin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/add', [App\Http\Controllers\Superadmin\UserController::class, 'add_user']);
    Route::post('/user/save', [App\Http\Controllers\Superadmin\UserController::class, 'save_user']);
    Route::get('/user/manage', [App\Http\Controllers\Superadmin\UserController::class,'manage_user']);

});
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'admin','middleware'=>['auth', 'admin']], function(){
    Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['as'=>'editor.', 'prefix'=>'editor', 'namespace'=>'editor','middleware'=>['auth', 'editor']], function(){
    Route::get('/dashboard', [App\Http\Controllers\editor\DashboardController::class, 'index'])->name('dashboard');

    // employee section
    Route::get('/employee/add',[App\Http\Controllers\editor\EmployeeController::class, 'index']);
    Route::post('/employee/save',[App\Http\Controllers\editor\EmployeeController::class, 'save']);
    Route::get('/employee/manage',[App\Http\Controllers\editor\EmployeeController::class, 'manage']);
    Route::get('/employee/edit/{id}',[App\Http\Controllers\editor\EmployeeController::class, 'edit']);
    Route::get('/employee/image/delete/{id}',[App\Http\Controllers\editor\EmployeeController::class,'imagedelete']);
    Route::post('/employee/update/',[App\Http\Controllers\editor\EmployeeController::class, 'update']);
    Route::get('/employee/delete/{id}',[App\Http\Controllers\editor\EmployeeController::class, 'delete']);
    Route::get('/employee/active/{id}',[App\Http\Controllers\editor\EmployeeController::class, 'active']);
    Route::get('/employee/inactive/{id}',[App\Http\Controllers\editor\EmployeeController::class, 'inactive']);

    // customer section

    Route::get('/customer/add',[App\Http\Controllers\editor\CustomerController::class, 'index']);
    Route::post('/customer/save',[App\Http\Controllers\editor\CustomerController::class, 'save']);
    Route::get('/customer/manage',[App\Http\Controllers\editor\CustomerController::class, 'manage']);
    Route::get('/customer/view/{id}',[App\Http\Controllers\editor\CustomerController::class, 'customerview']);
    Route::get('/customer/edit/{id}',[App\Http\Controllers\editor\CustomerController::class, 'customeredit']);
    Route::get('/customer/image/delete/{id}',[App\Http\Controllers\editor\CustomerController::class,'imagedelete']);
    Route::post('/customer/update/',[App\Http\Controllers\editor\CustomerController::class, 'customerupdate']);
    Route::get('/customer/delete/{id}',[App\Http\Controllers\editor\CustomerController::class, 'delete']);
    
    //supplier section

    Route::get('/supplier/add',[App\Http\Controllers\editor\SupplierController::class, 'index']);
    Route::post('/supplier/save',[App\Http\Controllers\editor\SupplierController::class, 'save']);
    Route::get('/supplier/manage',[App\Http\Controllers\editor\SupplierController::class, 'manage']);
    Route::get('/supplier/view/{id}',[App\Http\Controllers\editor\SupplierController::class, 'supplierview']);
    Route::get('/supplier/edit/{id}',[App\Http\Controllers\editor\SupplierController::class, 'supplieredit']);
    Route::get('/supplier/image/delete/{id}',[App\Http\Controllers\editor\SupplierController::class,'imagedelete']);
    Route::post('/supplier/update/',[App\Http\Controllers\editor\SupplierController::class, 'supplierupdate']);
    Route::post('/supplier/delete/{id}',[App\Http\Controllers\editor\SupplierController::class, 'supplierdelete']);

    //salary section
    Route::get('/salary/advanced',[App\Http\Controllers\editor\SalaryController::class, 'index']);
    Route::post('/advanced_salary/save',[App\Http\Controllers\editor\SalaryController::class, 'advancedsave']);
    Route::get('/advancedsalary/manage',[App\Http\Controllers\editor\SalaryController::class, 'allsalarymanage']);
    Route::get('/advancedsalary/edit/{id}',[App\Http\Controllers\editor\SalaryController::class, 'editadvancedsalary']);
    Route::get('/advancedsalary/delete/{id}',[App\Http\Controllers\editor\SalaryController::class, 'deleteadvancedsalary']);
    Route::post('/advanced_salary/update',[App\Http\Controllers\editor\SalaryController::class, 'advancedupdate']);
    Route::get('/pay_salary',[App\Http\Controllers\editor\SalaryController::class, 'paysalary']);









    Route::get('/logo/add',[App\Http\Controllers\editor\LogoController::class, 'add']);
});

Route::get('/redirect', function(){
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    if(Auth::user() && Auth::user()->role_id == 1) {
        return redirect('superadmin/dashboard');
    }
    else if(Auth::user() && Auth::user()->role_id == 2) {
        return redirect('admin/dashboard');
    }
    else if(Auth::user() && Auth::user()->role_id == 3) {
        return redirect('editor/dashboard');
    }
    return redirect()->route('login'); // change to the regular user home page
});