@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Transaksi Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi Penjualan
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>
		<div class="panel-body">

			<form action="{{route('transaksipenjualan.update',$transaksipenjualan->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Tanggal Beli</label>
					<input type="date" name="a" class="form-control" value="{{$transaksipenjualan->tanggal_beli}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Cutomer</label>
					<input type="text" name="b" class="form-control" value="{{$transaksipenjualan->nama_customer}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="c" class="form-control" value="{{$transaksipenjualan->alamat}}">{{$transaksipenjualan->alamat}}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
</div>
@endsection