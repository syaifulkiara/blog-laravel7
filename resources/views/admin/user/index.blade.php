@extends('layouts.master')
@section('sub-judul','User')
@section('content')

		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								@if(Session::has('success'))
								<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
							        <button class="close" data-dismiss="alert">
							          <span>×</span>
							        </button>
									{{ Session('success')}}
								  </div>
								</div>
								@endif
								<a href="{{ route('user.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add User</a><br/><br/>
								<table class="table table-bordered table-hover table-md">
									<thead class="thead-light">                                 
										<tr>
											<th>NO</th>
											<th>Nama User</th>
											<th>Email</th>
											<th>Tipe</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($user as $result => $hasil)                                 
										<tr>
											<td>{{$result + $user->firstitem()}}</td>
											<td>{{$hasil->name}}</td>

											<td>{{$hasil->email}}</td>
											<td>
												@if($hasil->tipe)
												<h6><span class="badge badge-success">Administrator</span></h6>
												@else
												<h6><span class="badge badge-warning">Author</span></h6>
												@endif
												</td>
											<td>
												<form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
													@csrf
													@method('delete')
												<a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>	
												<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dhapus')">Delete</button>
												</form>	
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								{{$user->links()}}
							</div>
						</div>
					</div>
				</div>
			</div>  
		</div>
	@endsection