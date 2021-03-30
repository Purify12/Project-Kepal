@extends('layouts.app')

@section('content')


<h1>Absensi Mahasiswa</h1>
<table class="table table-primary table-striped">
			<tr>
				<th>Kode Matakuliah</td>
				<th  colspan="2">Mata kuliah</td>
			</tr>
			@foreach($matakuliah as $matakuliah)
    
            <tr>
				<td>{{$matakuliah->Kode_Matkul}}</td>
				<td>{{$matakuliah->Matkul}}</td>
                            <td><button type="button" class="btn btn-primary">Hadir</button></td>
	       </tr>
           @endforeach
         
            </table>
@endsection