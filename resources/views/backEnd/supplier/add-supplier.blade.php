@extends('backEnd.layouts.master')
@section('title','Supplier Add')
@section('main_content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
          <h3 class="card-title">Supplier information</h3>
          <div class="short_button">
            <a href="{{url('/editor/supplier/manage')}}"><i class="fa fa-cogs"></i>Manage</a>
          </div>
      </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-bg">
                    <form action="{{url('/editor/supplier/save')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Name <span>*</span></label>
                              <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">

                              @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Email <span>*</span></label>
                              <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Phone <span>*</span></label>
                              <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}">

                              @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>NID <span></span></label>
                              <input type="text" name="nid" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}" value="{{ old('nid') }}">

                              @if ($errors->has('nid'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nid') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Address <span></span></label>
                              <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}">

                              @if ($errors->has('address'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Type <span></span></label>
                                <select name="type" id="" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" value="{{ old('type') }}">
                                    <option value="1">Distributor</option>
                                    <option value="2">Hole Seller</option>
                                    <option value="3">Brochur</option>
                                    <option value="4">Others</option>
                                </select>
                              @if ($errors->has('type'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Shopname <span></span></label>
                              <input type="text" name="shopname" class="form-control{{ $errors->has('shopname') ? ' is-invalid' : '' }}" value="{{ old('shopname') }}">

                              @if ($errors->has('shopname'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('shopname') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Image <span></span></label>
                                <input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ old('image') }}" multiple="multiple">

                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       <!-- /.form-group -->
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account Holder <span></span></label>
                              <input type="text" name="accountholder" class="form-control{{ $errors->has('accountholder') ? ' is-invalid' : '' }}" value="{{ old('accountholder') }}">

                              @if ($errors->has('accountholder'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('accountholder') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account No <span></span></label>
                              <input type="text" name="accountno" class="form-control{{ $errors->has('accountno') ? ' is-invalid' : '' }}" value="{{ old('accountno') }}">

                              @if ($errors->has('accountno'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('accountno') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Bank Name <span></span></label>
                              <input type="text" name="bankname" class="form-control{{ $errors->has('bankname') ? ' is-invalid' : '' }}" value="{{ old('bankname') }}">

                              @if ($errors->has('bankname'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bankname') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Branch Name <span></span></label>
                              <input type="text" name="branchname" class="form-control{{ $errors->has('branchname') ? ' is-invalid' : '' }}" value="{{ old('branchname') }}">

                              @if ($errors->has('branchname'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('branchname') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->

                       
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>City <span></span></label>
                              <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}">

                              @if ($errors->has('city'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- /.form-group -->
                  
                        <!-- /.form-group -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="status">Publication Status</label>
                                <div class="box-body pub-stat display-inline">
                                <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" id="active" name="status" value="1">
                                <label for="active">Active</label>
                                @if ($errors->has('status'))
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="box-body pub-stat display-inline">
                                <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" name="status" value="0" id="inactive">
                                <label for="inactive">Inactive</label>
                                @if ($errors->has('status'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                                @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>
                        <div class="col-sm-12 mrt-30">
                            <div class="form-group">
                                <button type="submit" class="btn submit-button">submit</button>
                                <button type="reset" class="btn btn-default">clear</button>
                            </div>
                        </div>
                      <!-- /.form-group -->
                    </form>
                 </div>
                </div>
              </div>
            <!-- /.col -->
          </div>
        <!--card-body-->
      </div>
      <!--card-->
    </div>
  <!--container-fluid-->
  </section>
  <!-- /.content -->
@endsection