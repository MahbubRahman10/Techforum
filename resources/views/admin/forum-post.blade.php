@extends('layouts.admin')

@section('content')


			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>User Name</th>
			  		<th>Title</th>
			  		<th>Category</th>
			  		<th>Description</th>
			  		<th>Post Date</th>
			  		<th>Actions</th>
			  	</thead>
			  	<tbody>
						@foreach($forum as $forums)
					<tr>
			  			<td>{{ $forums->id }}</td>
				  		<td>{{ $forums->name }}</td>
				  		<td>{{ $forums->title }}</td>
				  		<td>{{ $forums->category }}</td>
				  		<td>{{ $forums->description }}</td>
				  		<td>{{ $forums->date }}</td>
				  		<td>
				  			<a href="javascript:delete_id5({{ $forums->id }})">Delete</a>
				  		</td>
			  		</tr>
						@endforeach	
			  	</tbody>
			</table>


@stop