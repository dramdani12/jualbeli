@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Detail Transaksi Pembelian</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Detail Transaksi Pembelian
		<div class="panel-title pull-right"><a href="detailtransaksipembelian/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Stok Barang</th>
						<th>Jumlah</th>
						<th>Tanggal Beli</th>
						<th>Nama Supplier</th>
						<th>Harga Beli</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($detailtransaksipembelian as $data)
					<tr>
						<td>{{$data->nama_barang}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->tanggal_beli}}</td>
						<td>{{$data->namasupplier}}</td>
						<td>{{$data->harga_beli}}</td>
						<td><a class="btn btn-warning" href="detailtransaksipembelian/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('detailtransaksipembelian.destroy',$data->id)}}" method="post">
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