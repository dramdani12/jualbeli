@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Transaksi Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi penjualan
		<div class="panel-title pull-right"><a href="transaksipenjualan/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>tanggal jual</th>
						<th>nama customer</th>
						<th>alamat</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($transaksipenjualan as $data)
					<tr>
						<td>{{$data->tanggal_jual}}</td>
						<td>{{$data->nama_customer}}</td>
						<td>{{$data->alamat}}</td>
						<td><a class="btn btn-warning" href="transaksipenjualan/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('transaksipenjualan.destroy',$data->id)}}" method="post">
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