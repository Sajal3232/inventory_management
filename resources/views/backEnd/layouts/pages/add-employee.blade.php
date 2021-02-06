@extends('backEnd.layouts.master')
@section('title','Employee Add')
@section('main_content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
          <h3 class="card-title">Employee information</h3>
          <div class="short_button">
            <a href="{{url('/editor/employee/manage')}}"><i class="fa fa-cogs"></i>Manage</a>
          </div>
      </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-bg">
                    <form action="{{url('/editor/employee/save')}}" method="POST" enctype="multipart/form-data">
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
                              <label>NID <span>*</span></label>
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
                              <label>Address <span>*</span></label>
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
                              <label>Experience <span>*</span></label>
                              <input type="text" name="experience" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}" value="{{ old('experience') }}">

                              @if ($errors->has('experience'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('experience') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        <!-- form group end -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Image <span>*</span></label>
                                <input type="file" name="image[]" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ old('image') }}" multiple="multiple">

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
                              <label>Salary <span>*</span></label>
                              <input type="text" name="salary" class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}" value="{{ old('salary') }}">

                              @if ($errors->has('salary'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('salary') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                       <!-- /.form-group -->
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Vacation <span></span></label>
                              <input type="text" name="vacation" class="form-control{{ $errors->has('vacation') ? ' is-invalid' : '' }}" value="{{ old('vacation') }}">

                              @if ($errors->has('vacation'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('vacation') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>

                        <!-- /.form-group -->
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
                 </div>
                </div>
              </div>
            <!-- /.col -->
              </form>
          </div>
        <!--card-body-->
      </div>
      <!--card-->
    </div>
  <!--container-fluid-->
  </section>
  <!-- /.content -->
@endsection