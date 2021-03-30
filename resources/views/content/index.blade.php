@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="list-group">
	<head>
		<title text-align="center">Jadwal IF </title>
	</head>
	<body>
    
		<h3> Jadwal Hari Senin IF </h3><a href="jadwal" style="position: absolute; right: 0;" class =" btn bg-success">Kembali Ke Jadwal</a>
		<br>
		<table class="table table-primary table-striped">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($data as $item)
            <tr>
				<td>{{$item['jam']}}</td>
				<td>{{$item['kode_matkul']}}</td>
				<td>{{$item['matkul']}}</td>
				<td>{{$item['jenis_kuliah']}}</td>
			</tr>
            @endforeach
            </table>
			</br>
			<div class="d-grid gap-2 d-md-block">
            <a href="selasa_IF" class="arranged btn btn-primary"id="next">Next</a>
			</div>
		</table>
	</body>
	

@endsection