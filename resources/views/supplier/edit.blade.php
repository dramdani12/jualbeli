@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Supplier</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Supplier
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>
		<div class="panel-body">

			<form action="{{route('supplier.update',$supplier->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama Supplier</label>
					<input type="text" name="a" class="form-control" value="{{$supplier->namasupplier}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="b" class="form-control" value="{{$supplier->alamat}}">{{$supplier->alamat}}</textarea>
				</div>
				<div class="form-group">
					<label class="control-lable">No Telepon</label>
					<input type="text" name="c" class="form-control" value="{{$supplier->notelp}}" required="">
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