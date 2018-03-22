@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Barang
		<div class="panel-title pull-right"><a href="stokbarang/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>stok</th>
						<th>harga jual</th>
						<th>harga beli</th>
						<th>gambar</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($stokbarang as $data)
					<tr>
						<td>{{$data->nama_barang}}</td>
						<td>{{$data->stok}}</td>
						<td>{{$data->harga_jual}}</td>
						<td>{{$data->harga_beli}}</td>
						<td><img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px">
						</td>

							<td>
							<a class="btn btn-warning" href="stokbarang/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('stokbarang.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
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
@endsection