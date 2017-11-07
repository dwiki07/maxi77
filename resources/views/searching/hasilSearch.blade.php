@extends('layouts.app')

@section('content')

<form action="/searching" method="post">
	<h3 align="center"> BIS TERSEDIA </h3>
	<div class="table-responsive">          
		<table class="table">
		<th>
			Nama bus
		</th>
		<th>
			Tipe Bus
		</th>
		<th>
			Jumlah Kursi
		</th>
		<th>
			Harga perhari
		</th>
		<th>
			Action
		</th>
		<tr>
			<td>Roling Stone</td>
			<td>SHD</td>
			<td>60</td>
			<td>3.000.000</td>
			<td><a href="/pemesanan/create" class="btn btn-warning" role="button">Sewa</a></td>	
		</tr>
	</table>
</div>
	{{ csrf_field() }}

</form>
@endsection