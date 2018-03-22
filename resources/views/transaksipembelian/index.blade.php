@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Transaksi Pembelian</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi Pembelian
		<div class="panel-title pull-right"><a href="transaksipembelian/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama barang</th>
						<th>tanggal beli</th>
						<th>nama supplier</th>
						<th>stok</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($transaksipembelian as $data)
					<tr>
						<td>{{$data->namabarang}}</td>
						<td>{{$data->tanggal_beli}}</td>
						<td>{{$data->namasupplier}}</td>
						<td>{{$data->stok}}</td>
						<td><a class="btn btn-warning" href="transaksipembelian/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('transaksipembelian.destroy',$data->id)}}" method="post">
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
</div>
@endsection