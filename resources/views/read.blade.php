@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Detail Submission</h4>
            </div>
            <div class="panel-body">
                    <div class="form-group row">
                        <label for="matakuliah" class="col-sm-2 col-form-label">Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" name="matakuliah" id="matakuliah" value="{{$data->matakuliah}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_tugas" class="col-sm-2 col-form-label">Judul Tugas</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul_tugas" id="judul_tugas" value="{{$data->judul_tugas}}" class="form-control" readonly>
                        </div>
                    </div>                    
                    <div class="form-group row">    
                        <label for="link" class="col-sm-2 col-form-label">Link</label> 
                        <div class="col-sm-10">   
                            <input type="text" name="link" id="link" value="{{$data->link}}" class="form-control" readonly>
                        </div>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Kembali" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
@endsection