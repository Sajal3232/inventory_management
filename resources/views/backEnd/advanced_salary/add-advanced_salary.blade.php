@extends('backEnd.layouts.master')
@section('title','Advanced Salary Add')
@section('main_content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
          <h3 class="card-title">Advanced Salary information</h3>
          <div class="short_button">
            <a href="{{url('/editor/advancedsalary/manage')}}"><i class="fa fa-cogs"></i>Manage</a>
          </div>
      </div>
      <!--card-header -->
            <div id="form_body" class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-bg">
                    <form action="{{url('/editor/advanced_salary/save')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Employee <span>*</span></label>
                                
                                <select name="emp_id" id="" class="form-control{{ $errors->has('emp_id') ? ' is-invalid' : '' }}" value="{{ old('emp_id') }}">
                                    <option value="" class="active">====select===</option>
                                    @foreach($employess as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>

                              @if ($errors->has('emp_id'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('emp_id') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Month <span>*</span></label>
                              <select name="month" id="" class="form-control{{ $errors->has('month') ? ' is-invalid' : '' }}" value="{{ old('month') }}">
                                    <option value="">====select===</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="Augest">Augest</option>
                                    <option value="September">september</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>

                                </select>

                              @if ($errors->has('month'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('month') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Year <span>*</span></label>
                              <input type="text" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" value="{{ old('year') }}">

                              @if ($errors->has('year'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('year') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Advanced Salary <span>*</span></label>
                              <input type="text" name="advanced_salary" class="form-control{{ $errors->has('advanced_salary') ? ' is-invalid' : '' }}" value="{{ old('advanced_salary') }}">

                              @if ($errors->has('advanced_salary'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('advanced_salary') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                      <!-- /.form-group -->
                        
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