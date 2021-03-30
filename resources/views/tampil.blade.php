@extends('layouts.app')
@section('content')
<div class="list-group">
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<title text-align="center">Jadwal Kelas 13IF Hari Selasa</title>
	</head>
	<body>
    
		<h3> Jadwal Hari Selasa IF </h3><a href="jadwal" style="position: absolute; right: 0;" class =" btn bg-success" id="back">Kembali Ke Jadwal</a>
		<br>
		<table class="table table-secondary table-striped">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($tb_selasa as $tb_selasa)
            <tr>
				<td>{{$tb_selasa->jam2}}</td>
                <td>{{$tb_selasa->kode_matkul2}}</td>
                <td>{{$tb_selasa->matkul2}}</td>
                <td>{{$tb_selasa->jenis_kuliah2}}</td>
				
			</tr>
            @endforeach
            </table>
            </br>
			<div class="d-grid gap-2 d-md-block">
            <a href="senin_IF" class="arranged btn btn-primary">Prev</a>
			<a href="rabu_IF" class="arranged btn btn-primary">Next</a>
			</div>

		</table>
	</body>
	@endsection