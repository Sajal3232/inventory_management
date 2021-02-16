@extends('backEnd.layouts.master')
@section('title','Manage Advanced')
@section('main_content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title">Manage Advanced</h3> <a href="{{url('/editor/salary/advanced')}}" class="btn btn-primary addsellerp">Add New</a>
          </div>
          <!-- /.card-header -->
          <h3>{{date("F Y")}}</h3>
            <div class="card-body user-border">
              <form action="{{url('editor/seller/product/bulk-option')}}" method="POST" id="myform">
                @csrf
               <table id="example1" class="table table-bordered table-striped table-responsive">
                <select name="selectptions" class="bulkselect" form="myform">
                  <option value="">Bulk Action</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                  <option value="2">Edit</option>
                </select>
                <button type="submit" class="bulkbutton">Apply</button>
                <thead>
                  <tr>
                    <th><input type="checkbox"  id="My-Button"></th>
                    <th>Sl</th>
                    <th>Employee Name</th>
                    <th>Image</th>
                    <th>Salary</th>
                    <!-- <th>Advanced</th> -->
                    <th>Month</th>
                    <!-- <th>Year</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($employess as $key=>$value)
                  <tr>
                  <td><input type="checkbox"  value="{{$value->id}}" name="products_id[]" form="myform"></td>
                  <td>{{$loop->iteration}}</td>
                    <td>{{$value->name}}</td>
                    <td><img src="{{asset($value->image)}}" alt="" class="small_image"></td>
                    <td>{{$value->salary}}</td>
                    <!-- <td>{{$value->advanced_salary}}</td> -->
                    <td>{{date("F",strtotime("-1 months"))}}</td>
                    <!-- <td>{{$value->year}}</td> -->
                    <td>
                      <ul class="action_buttons dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action Button
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li>
                                <a class="edit_icon" href="{{url('editor/advancedsalary/edit/'.$value->id)}}" title="View Details" ><i class="fa fa-edit"></i> Edit</a>
                            </li>
                            <!-- <li>
                                <a class="edit_icon" href="{{url('editor/customer/view/'.$value->id)}}" title="View Details" ><i class="fa fa-edit"></i> View</a>
                            </li> -->
                            <li>
                                <a class="edit_icon" href="{{url('editor/advancedsalary/delete/'.$value->id)}}" title="View Details" ><i class="fa fa-trash"></i> Delete</a>
                            </li>

                          </ul>
                      </ul>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection