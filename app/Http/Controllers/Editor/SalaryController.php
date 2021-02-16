<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use App\Models\Advanced_salary;
use Illuminate\Http\Request;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class SalaryController extends Controller
{
    public function index(){
        $employess=Employee::all();
        return view('backEnd.advanced_salary.add-advanced_salary',compact('employess'));
    }
    public function advancedsave(Request $request){
        $request->validate([
            'emp_id'=>'required',
            'month'=>'required',
            'year'=>'required',
            'advanced_salary'=>'required',
        ]);

        $emp_id=$request->emp_id;
        $month=$request->month;
        $year=$request->year;

        $alladvanced=Advanced_salary::where('emp_id',$emp_id)
                                    ->where('month',$month)
                                    ->where('year',$year)
                                    ->first();
        if($alladvanced){
            Toastr::warning('Advanceed already paid in this month!');
            return redirect()->back();
        }else{
            $store_data= new Advanced_salary();
            $store_data->emp_id = $request->emp_id;
            $store_data->month = $request->month;
            $store_data->year = $request->year;
            $store_data->advanced_salary = $request->advanced_salary;
            $store_data->save();
        
            Toastr::Success('Advanced Information Add Successfully!');
            return redirect('editor/advancedsalary/manage/');
        }
    }

    public function allsalarymanage(){
        $allsalaries=DB::table('advanced_salaries')
                    ->join('employees', 'advanced_salaries.emp_id', 'employees.id')
                    ->select('advanced_salaries.*','employees.name','employees.salary','employees.image')
                    ->get();
        return view('backend.advanced_salary.all-advancedsalary-manage',compact('allsalaries'));

    }

    public function editadvancedsalary($id){
       $advancedsalary= Advanced_salary::find($id);
       return view('backEnd.advanced_salary.edit_advanced_salary', compact('advancedsalary'));
    }

    public function advancedupdate(Request $request){
        $request->validate([
            'emp_id'=>'required',
            'month'=>'required',
            'year'=>'required',
            'advanced_salary'=>'required',
        ]);

            $update_data=Advanced_salary::find($request->hidden_id);
            $update_data->emp_id = $request->emp_id;
            $update_data->month = $request->month;
            $update_data->year = $request->year;
            $update_data->advanced_salary = $request->advanced_salary;
            $update_data->save();
            Toastr::Success('Update Advanced Information Successfully!');
            return redirect('editor/advancedsalary/manage/');
    }

    public function deleteadvancedsalary($id){
        $employee=Advanced_salary::find($id);
        $employee->delete();
        Toastr::success('message', 'Advanced Salary  delete successfully!');
         return redirect('editor/advancedsalary/manage/');
    }

    public function paysalary(){
        $employess=Employee::all();
        return view('backEnd.salary.paysalary',compact('employess'));
    }

}
