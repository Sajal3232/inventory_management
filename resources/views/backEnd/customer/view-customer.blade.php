@extends('backEnd.layouts.master')
@section('title','Manage Customer')
@section('main_content')
 <!-- Main content -->
    <section class="content">
      <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-bg">
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Name </label>
                              <p>{{$customer->name}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Email</label>
                              <p>{{$customer->email}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Phone </label>
                              <p>{{$customer->phone}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nid </label>
                              <p>{{$customer->nid}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Address </label>
                              <p>{{$customer->address}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Shopname </label>
                              <p>{{$customer->shopname}}</p>
                            </div>
                        </div>
                        <!-- form group end -->


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Image <span></span></label>
                                <img src="{{asset($customer->image)}}" style="height:80px;width:80px" alt="">
                            </div>
                        </div>
                       <!-- /.form-group -->
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account Holder <span></span></label>
                              <p>{{$customer->accountholder}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account No <span></span></label>
                              <p>{{$customer->accountno}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Bank Name <span></span></label>
                              <p>{{$customer->bankno}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Branch Name <span></span></label>
                              <p>{{$customer->branchname}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                       
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>City <span></span></label>
                              <p>{{$customer->city}}</p>
                            </div>
                        </div>
                        <!-- /.form-group -->
                  
                        <!-- /.form-group -->
                        
                      </div>
                 </div>
                </div>
              </div>
            <!-- /.col -->
          </div>
    </section>
    <!-- /.content -->
@endsection