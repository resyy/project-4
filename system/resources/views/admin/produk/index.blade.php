@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Data Produk
					<a href="{{url('admin/produk/create')}}" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama Brand</th>
								<th>Nama Produk</th>
								<th>Harga Produk</th>
								<th>Stok Produk</th>
								<th>Kategori</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
									  <a href="{{url('admin/produk/detail', $produk->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i></a>
									  <a href="{{url('admin/produk/edit', $produk->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									  <a href="{{url('admin/produk/hapus', $produk->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</div>
								</td>
								<td>{{$produk->brand}}</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
								<td>{{$produk->kategori}}</td>
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