@extends('Buoi05.layout')
@section('title','Trang tín trong loại')
@section('pagetitle')
	@preent
Danh sách các tin trong loại:
@endsection
@section('content')
	@for($i=0; $i < 10; $i++)
Danh sách {{$i}} <br>
	@endfor
@endsection