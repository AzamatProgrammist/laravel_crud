@extends('layouts.app')
@section('content')

<h2 class="text-center p-3">Tashkilot qo'shish</h2>

		<div class="row">
			<div class="col-md-6">	
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif	
				@include('companies.form')
			</div>
		</div>
	
@endsection