@extends('layouts.admin')

@section('content')

			 <div class ="tab">
						<ul id="tabnav" class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">Blog post comment</a></li>
							<li><a data-toggle="tab" href="#menu1">Forum post Discussion</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
							
						<table class="table table-bordered">
			  	<thead>
			  		<th>Comment ID</th>
			  		<th>Post ID</th>
					<th>Parent ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Comment</th>
					<th>Date</th>
					<th>Action</th>
			  	</thead>
							
							
							
							@foreach($comment as $comments)
			  		<tr>
			  			<td>{{ $comments->id }}</td>
				  		<td>{{ $comments->post_id }}</td>
						<td>{{ $comments->parent_id }}</td>
						<td>{{ $comments->name }}</td>
						<td>{{ $comments->email }}</td>
						<td>{{ $comments->comment }}</td>
						<td>{{ $comments->date }}</td>
				  		<td>
				  			<a href="javascript:delete_id1({{ $comments->id }})">Delete</a>
				  		</td>
					
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">

			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>Forum Post ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Date</th>
					<th>Action</th>
			  	</thead>
							
						@foreach($reply as $replys)
			  		<tr>
			  			<td>{{ $replys->id }}</td>
				  		<td>{{ $replys->forum_post_id }}</td>
						<td>{{ $replys->name }}</td>
						<td>{{ $replys->description }}</td>
						<td>{{ $replys->date }}</td>
				  		<td>
				  			<a href="javascript:delete_id2({{ $replys->id }})">Delete</a>
				  		</td>
					
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
		
							
							
							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						
		


@stop