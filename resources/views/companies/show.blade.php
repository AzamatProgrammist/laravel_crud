
@extends('layouts.app')
@section('content')
<a href="{{ route('companies.index') }}" class="btn btn-success m-3">Orqaga</a>
	<h3 class="text-center p-2">Tashkilot haqida ma'lumot</h3>
	<h4>{{ $company->name }}</h4>
	<p> </p>
	<table class="table">
		<tr>
		<th>Tashkilot nomi:</th>
		<td>{{ $company->name }}</td>
		</tr>
		<tr>
			<th>Tashkilot manzili</th>
			<td>{{ $company->address }}</td>
		</tr>
		<tr>
			<th>Tashkilot telfon raqami</th>
			<td>{{ $company->phone}}</td>
		</tr>
		<tr>
			<th>Tashkilot qo'shilgan vaqti</th>
			<td>{{ $company->created_at }}</td>
		</tr>	
	</table>
	@endsection