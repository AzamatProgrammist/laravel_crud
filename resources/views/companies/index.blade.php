@extends('layouts.app')
@section('content')
	<h3 class="text-center p-2">Tashkilotlar</h3>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<a href="{{ route('companies.create')}}"><button class="btn btn-success" type="button">Tashkilot qo'shish</button></a>
</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>T/R</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Amallar</th>

			</tr>
		</thead>
		<tbody>
				@foreach($companies as $company)
			<tr>
				<td>{{ ($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1) }}</td>
				<td>
					<a href="{{ route('companies.show', ['company' => $company->id])}}">{{ $company->name }}
					</a>
				</td>
				<td>{{ $company->address }}</td>
				<td>{{ $company->phone }}</td>
				<td>
					<a href="{{ route('companies.edit', ['company' => $company->id]) }}"><i class="bi bi-pencil-square btn btn-success"></i></a>
				</td>
				<td>
					<form action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
					</form>
				</td>
				
			</tr>
				@endforeach
		</tbody>
	</table>
	{{ $companies->links() }}
@endsection