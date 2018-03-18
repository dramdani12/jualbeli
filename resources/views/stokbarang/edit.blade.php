@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Stok Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Stok Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('stokbarang.update',$stokbarang->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$stokbarang->nama_barang}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">stok</label>
				<input type="text" name="b" value="{{$stokbarang->stok}}" class="form-control" required="">
			</div>		
			<div class="form-group">
				<label class="control-label">harga jual</label>
				<input type="text" name="c" value="{{$stokbarang->harga_jual}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">harga beli</label>
				<input type="text" name="d" value="{{$stokbarang->harga_beli}}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" required="" value="{{$stokbarang->cover}}"></input>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection