@extends('layouts.master')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users List</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  
		  <div class="x_content">
		    
		    <table id="datatable-buttons" class="table table-striped table-bordered">
		      <thead>
		        <tr>
		          <th>NIK</th>
		          <th>Name</th>
		          <th>Email</th>
		          <th>Role</th>
		          <th>Avatar</th>
		          <th>Action</th>
		        </tr>
		      </thead>
		      <tbody>
		      	@foreach ($data as $value)	
		        <tr>
		          <td>{{ $value->nik }}</td>
		          <td>{{ $value->name }}</td>
		          <td>{{ $value->email }}</td>
		          <td>{{ $value->role }}</td>
		          <td>{{ $value->role }}</td>
		          <td>

		            <form action="{{ route('user.destroy', $value->id)}}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('user.edit', $value->id)}}" class="btn btn-warning btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dhapus')">Delete</button>
					</form>	
		          </td>
		        </tr>
		      	@endforeach
		        
		      </tbody>
		    </table>
		  </div>
		</div>
		</div>
		</div>
		</div>
		</div>

@endsection

@section('footer')
 <!-- Datatables -->
    <script src="{{ asset('admin')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ asset('admin')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('admin')}}/vendors/pdfmake/build/vfs_fonts.js"></script>
@endsection