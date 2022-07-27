@extends('layouts.master')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="row top_tiles">
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-table"></i></div>
					<div class="count">{{totalFormTabel()}}</div>
					<h3>Total FormTabel</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-users"></i></div>
					<div class="count">{{totalUser()}}</div>
					<h3>Total Users</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
					<div class="count">179</div>
					<h3>New Sign ups</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-check-square-o"></i></div>
					<div class="count">179</div>
					<h3>New Sign ups</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>

			<div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tables Users</h2>  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Name</th>
                          <th>Email</th>                         
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($data as $value)
                        <tr>
                          <th scope="row">{{ $value->nik }}</th>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->email }}</td>                        
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table Form</h2>                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

		</div>
	</div>
  </div>
 </div>
 </div>
</div>
<!-- /page content -->

@endsection