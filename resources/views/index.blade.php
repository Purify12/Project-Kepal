@extends('layouts.app')

@section('content')
<style>
	.h1{
	text-align: center;
	
}
a {
    text-decoration: none ;
}

a:hover {
    color:white;
    text-decoration:none;
    cursor:pointer;
}


.col1{
	height:300px;
	width:100%;
}
.col2{
	height:300px;
	width:100%;
}
</style>

<div class="col1 bg-secondary "><p class="h1"><a href="{{route('jadwal')}}" id="jadwal">Jadwal</a></h1></p></div>
<div class="col2 bg-success"><h1><p class="h1"><a href="submit" id="tugas">Tugas</h1></p></div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


               

@endsection
