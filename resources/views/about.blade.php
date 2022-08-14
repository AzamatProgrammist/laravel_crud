@extends('app')

@section('title', 'about sahufasi')

@section('content')

<ul>
	@foreach($abouts as $about)
	<li>{{ $about }}</li>
	@endforeach
</ul>

@endsection