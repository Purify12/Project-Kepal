@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Upload link submission</h2>
            </div>
            <div class="panel-body">
                <form action="{{url('insert')}}" method="post">
                    <div class="form-group row">
                        <label for="matakuliah" class="col-sm-2 col-form-label">Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" name="matakuliah" id="matakuliah" class="form-control" required="require">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_tugas" class="col-sm-2 col-form-label">Judul Tugas</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul_tugas" id="judul_tugas" class="form-control">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection