@extends('backEnd.layouts.master')
@section('title','bodypart Add')
@section('main_content')
<section class="content">
  <div class="container-fluid">
	  	<div class="row">
	  		<div class="col-sm-12">
	  			<div class="dashboard-head">
	  				<p>Short Reports</p>
	  			</div>
	  		</div>
			<div class="col-lg-3 col-6">
			<!-- small box -->
				<div class="small-box bg-info">
				  <div class="inner">
				    <h3></h3>

				    <p>Total Product</p>
				  </div>
				  <div class="icon">
				    <i class="fa fa-shopping-bag"></i>
				  </div>
				  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- col end -->
			<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>
                <p>Total Customer</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
			<!-- col end -->
		</div>
	</div>
</section>
@endsection