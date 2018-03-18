@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Transaksi Pembelian</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi Pembelian
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('transaksipembelian.update',$transaksipembelian->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama Supplier</label>
					<select class="form-control" name="b">
					@foreach($supplier as $b)
					<option value="{{$a->id}}">{{$b->namasupplier}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Tanggal</label>
					<input type="date" name="c" class="form-control" value="{{$pembelian->tanggal}}" required="">
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