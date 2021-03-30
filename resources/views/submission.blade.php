@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Daftar Submission</h3>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group button">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Matakuliah</th>
                            <th>Judul Tugas</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->matakuliah }}</td>
                            <td>{{ $d->judul_tugas }}</td>
                            <td>{{ $d->link }}</td>
                            <td>
                                <a href="{{url('read',array($d->id))}}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{url('delete',array($d->id))}}" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="{{url('edit',array($d->id))}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
