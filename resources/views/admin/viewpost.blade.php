@extends('layouts.admin')

@section('content')

	
			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>Name</th>
			  		<th>Post Title</th>
			  		<th>Type</th>
			  		<th>Image</th>
			  		<th>Post Date</th>
			  		<th>Actions</th>
					<th>Actions</th>
			  	</thead>
			  	<tbody>
			  	@foreach ($posts as $post)
			  		<tr>
			  			<td>{{ $post->id }}</td>
				  		<td>{{ $post->name }}</td>
				  		<td>{{ $post->postTitle }}</td>
				  		<td>{{ $post->type }}</td>
				  		<td>{{ $post->image }}</td>
				  		<td>{{ $post->postDate }}</td>
				  		<td>
				  			<a href="javascript:delete_id6({{ $post->id }})">Delete</a>
				  		</td>
						<td>
				  			<a  href="{{ URL('admin/edit-post='.$post->id)}}">Edit</a>
				  		</td>
			  		</tr>
			  	@endforeach
			  	</tbody>
			</table>



@stop