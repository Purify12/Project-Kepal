
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="list-group">
	<head>
		<title text-align="center">Jadwal IF</title>
	</head>
    
		<h3> Jadwal Hari Rabu IF </h3><a href="jadwal" style="position: absolute; right: 0;" class =" btn bg-success">Kembali Ke Jadwal</a><br>
		<table class="table table-danger table-striped">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($tb_rabu as $tb_rabu)
            <tr>
				<td>{{$tb_rabu->jam3}}</td>
                <td>{{$tb_rabu->kode_matkul3}}</td>
                <td>{{$tb_rabu->matkul3}}</td>
                <td>{{$tb_rabu->jenis_kuliah3}}</td>
				
			</tr>
            @endforeach
            </table>
            </br>
			<div class="d-grid gap-2 d-md-block">
            <a href="selasa_IF" class="arranged btn btn-primary">Prev</a>
			<a href="kamis_IF" class="arranged btn btn-primary">Next</a>
			</div>
	</body>
	
@endsection