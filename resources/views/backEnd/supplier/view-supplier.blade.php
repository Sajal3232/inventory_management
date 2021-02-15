@extends('backEnd.layouts.master')
@section('title','View Supplier')
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
                              <p>{{$supplier->name}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Email</label>
                              <p>{{$supplier->email}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Phone </label>
                              <p>{{$supplier->phone}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nid </label>
                              <p>{{$supplier->nid}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Address </label>
                              <p>{{$supplier->address}}</p>
                            </div>
                        </div>
                      <!-- /.form-group -->
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label>Shopname </label>
                              <p>{{$supplier->shopname}}</p>
                            </div>
                        </div>
                        <!-- form group end -->


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Image <span></span></label>
                                <img src="{{asset($supplier->image)}}" style="height:80px;width:80px" alt="">
                            </div>
                        </div>
                       <!-- /.form-group -->
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account Holder <span></span></label>
                              <p>{{$supplier->accountholder}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account No <span></span></label>
                              <p>{{$supplier->accountno}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Bank Name <span></span></label>
                              <p>{{$supplier->bankno}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Branch Name <span></span></label>
                              <p>{{$supplier->branchname}}</p>
                            </div>
                        </div>
                        <!-- form group end -->

                       
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>City <span></span></label>
                              <p>{{$supplier->city}}</p>
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