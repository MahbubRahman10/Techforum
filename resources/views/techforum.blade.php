@extends('layouts.master')

@section('content')

	<table class="tborder" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
	<thead class="a">
		<tr align="center">
			  <td class="thead" width="45%" align="left">Topic</td>
			  <td class="thead" width="20%">Category</td>
			  <td class="thead">User</td>
			  <td class="thead">Replies</td>
			  <td class="thead">Views</td>
		</tr>
	</thead>
	<?php 
		use Carbon\Carbon;
	?>
	@foreach ($data as $value)
	<tbody id="coll" style="">										
			<tr align="center" class="abc">									
				<td class="main-link" colspan="0" align="left">											
				<a class="title" href="{{ URL('/viewpost='.$value->id)}}">{{ $value->title }}</a>
					<p>Asked {{ Carbon::parse($value->date)->diffForHumans() }} </p>
				</td>
				<td class="category">
				    <a>{{ $value->category }}</a>
				</td>
				<td class="posters">
					<a>{{ strtok($value->name, " ") }}</a>
				</td>
				<td>
					<a>{{ $value->num_comments }}</a>
				</td>
				<td class="num_views">
					<a>{{ $value->visitor }}</a>
				</td>													
			</tr> 									
	</tbody>
	@endforeach	
	</table>

	{{  $data->links() }}
	

@stop