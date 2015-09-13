@extends('app')

@section('content')

@foreach($posts as $po)
	{{ $po }} <br>
@endforeach

@endsection