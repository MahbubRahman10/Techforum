@extends('layouts.admin')

@section('content')

	{{ csrf_field() }}
	<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Actions</th>
		</thead>
		<tbody>
		@foreach ($users as $user)
			<tr class="user{{$user->id}}">
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td><button class="deletes"  data-id="{{$user->id}}" data-name="{{$user->name}}"> Delete</button></td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<script>
       $('.deletes').click(function(){
		var id=$(this).data('id')
        $.ajax({
	
            type: 'post',
            url: '/admin/deleteItem',
            data: {
				'_token': $('input[name=_token]').val(),
				'id': id
            },
			success: function(data) {
                $('.user' + id).remove();
            }
        });
    });
</script>



@stop