@extends('backEnd.layouts.master')
@section('title','Manage Customer')
@section('main_content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title">Manage Customer</h3> <a href="{{url('/editor/customer/add')}}" class="btn btn-primary addsellerp">Add New</a>
          </div>
          <!-- /.card-header -->
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Shopname</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($customers as $key=>$value)
                  <tr>
                  <td><input type="checkbox"  value="{{$value->id}}" name="products_id[]" form="myform"></td>
                  <td>{{$loop->iteration}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->shopname}}</td>
                    <td><img src="{{asset($value->image)}}" alt="" class="small_image"></td>
                    <td> {{$value->status==1?'Active':'Inactive'}}</td>
                    <td>
                      <ul class="action_buttons dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action Button
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">

                            @if($value->status == 1)
                                <li>
                                <a class="edit_icon" href="{{url('editor/employee/inactive/'.$value->id)}}" title="View Details"><i class="fa fa-eye"></i>Active</a>
                            </li>
                            
                            @else
                                <li>
                                <a class="edit_icon" href="{{url('editor/employee/active/'.$value->id)}}" title="View Details"><i class="fa fa-eye"></i>Inactive</a>
                            </li>
                            
                            @endif
                            <li>
                                <a class="edit_icon" href="{{url('editor/customer/edit/'.$value->id)}}" title="View Details" ><i class="fa fa-edit"></i> Edit</a>
                            </li>
                            <li>
                                <a class="edit_icon" href="{{url('editor/customer/view/'.$value->id)}}" title="View Details" ><i class="fa fa-edit"></i> View</a>
                            </li>
                            <li>
                                <a class="edit_icon" href="{{url('editor/customer/delete/'.$value->id)}}" title="View Details" ><i class="fa fa-trash"></i> Delete</a>
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