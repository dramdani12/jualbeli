@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>TransaksiPenjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">TransaksiPenjualan
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>
		<div class="panel-body">

			<form action="{{route('transaksipenjualan.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Tanggal Jual</label>
					<input type="date" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Customer</label>
					<input type="text" name="b" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="c" class="form-control" required=""></textarea>
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