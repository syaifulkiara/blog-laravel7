@extends('layouts.master')
@section('sub-judul','Tag')
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
								<a href="{{ route('tag.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Tag</a><br/><br/>
								<table class="table table-bordered table-hover table-md">
									<thead class="thead-light">                                 
										<tr>
											<th>NO</th>
											<th>Nama Tag</th>
											<th>Slug</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($tag as $result => $hasil)                                 
										<tr>
											<td>{{$result + $tag->firstitem()}}</td>
											<td>{{$hasil->name}}</td>
											<td><h6><span class="badge badge-success">{{$hasil->slug}}</span></h6></td>
											<td>
												<form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
													@csrf
													@method('delete')
												<a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-link btn-sm">Edit</a>	
												<button type="submit" class="btn btn-link btn-sm" onclick="return confirm('Yakin Mau Dhapus')">Delete</button>
												</form>	
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								{{$tag->links()}}
							</div>
						</div>
					</div>
				</div>
			</div>  
		</div>

	@endsection