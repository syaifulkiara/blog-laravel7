@extends('layouts.master')
@section('sub-judul','Post Yang sudah Dihapus')
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
						<table class="table table-bordered table-hover table-md">
							<thead class="thead-light">                                 
								<tr>
									<th>NO</th>
									<th>Judul</th>
									<th>Category</th>
									<th>Content</th>
									<th>Tags</th>
									<th>Gambar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($post as $result => $hasil)                                 
								<tr>
									<td>{{$result + $post->firstitem()}}</td>
									<td>{{$hasil->judul}}</td>
									<td><h6><span class="badge badge-primary">{{$hasil->category->name ??'no-categoy'}}</span></h6></td>
									<td>{!! $hasil->content !!}</td>
									<td>
									@foreach($hasil->tags as $tag)
									<ul>
										<h6><span class="badge badge-info">{{ $tag->name}}</span></h6>
									</ul>
									
									@endforeach
									</td>
									<td><img src="{{ asset( $hasil->gambar )}}" class="img-fluid" style="width: 80px"></td>
									<td>
										<form action="{{ route('post.kill', $hasil->id)}}" method="POST">
											@csrf
											@method('delete')
											<a href="{{ route('post.restore',$hasil->id)}}" class="btn btn-info btn-sm">Restore</a>	
											<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dhapus')">Delete</button>
										</form>	
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$post->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>  
</div>

@endsection