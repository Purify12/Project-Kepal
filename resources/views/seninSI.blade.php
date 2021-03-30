@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="list-group">
	<head>
		<title text-align="center">Jadwal SI </title><a href="jadwal" style="position: absolute; right: 0;" class =" btn bg-success">Kembali Ke Jadwal</a><br>
	</head>
    
		<h3> Jadwal Hari Senin SI</h3>
		<table class="table table-primary table-striped">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($tb_senin_si as $data)
            <tr>
				<td>{{$data->jam}}</td>
                <td>{{$data->kode_matkul}}</td>
                <td>{{$data->matkul}}</td>
                <td>{{$data->jenis_kuliah}}</td>
				
			</tr>
            @endforeach
            </table>
            </br>
			<div class="d-grid gap-2 d-md-block">
			<a href="selasa_SI" class="arranged btn btn-primary">Next</a>
			</div>
	</body>
	
@endsection