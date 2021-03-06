@extends('layouts.app')

@section('content')


<form action="/pemesanan/{{$pemesanan->id}}" method="post">
	<h3 align="center">EDIT PEMESANAN</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
		Nama Pemesan 
	</div>
	<input type="text" name="nama" value="{{$pemesanan->namaPemesan}}" /><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Alamat</div> 
	<input type="text" name="alamat" value="{{$pemesanan->alamatPemesan}}"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tujuan </div>


	<select name="tujuan">
		<option @if($pemesanan->tujuan == "Surabaya") selected="selected" @endif>Surabaya</option>
		<option @if($pemesanan->tujuan == "Malang") selected="selected" @endif>Malang</option>
		<option @if($pemesanan->tujuan == "Jogja") selected="selected" @endif>Jogja</option>
		<option @if($pemesanan->tujuan == "Bali") selected="selected" @endif>Bali</option>
	</select><hr>

	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalPesan</div>
	<input type="date" name="tanggalPesan" value="{{$pemesanan->tanggalPesan}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalBerangkat</div> 
	<input type="date" name="tanggalBerangkat" value="{{$pemesanan->tanggalberangkat}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	totalHari</div>
	<input type="number" name="totalHari" value="{{$pemesanan->totalhari}}"> <hr>

	<div class="col-md-8"></div>
	<a href="/pemesanan" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">
	
</form>


@endsection
