@extends('layouts.app')
@section('content')
	<head>
	<div class="list-group">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<title text-align="center">Jadwal IF</title>
	</head>
	<body>
    
		<h3> Jadwal Hari Jumat IF </h3><a href="jadwal" style="position: absolute; right: 0;" class =" btn bg-success">Kembali Ke Jadwal</a><br>
		<table class="table table-dark table-striped">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($tb_jumat as $tb_jumat)
            <tr>
				<td>{{$tb_jumat->jam5}}</td>
                <td>{{$tb_jumat->kode_matkul5}}</td>
                <td>{{$tb_jumat->matkul5}}</td>
                <td>{{$tb_jumat->jenis_kuliah5}}</td>
				
			</tr>
            @endforeach
            </table>
            </br>
			<div class="d-grid gap-2 d-md-block">
            <a href="kamis_IF" class="arranged btn btn-primary">Prev</a>

			</div>

		</table>
	</body>
	
@endsection