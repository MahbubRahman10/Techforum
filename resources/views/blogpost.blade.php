@extends('layouts.master')
@section('content')
	<?php 
		use Carbon\Carbon;
	?>
	<div id='sst'>
		<h2>{{  $blog->postTitle  }}</h2>
		{{ Carbon::parse($blog->postDate)->diffForHumans() }} by {{ $blog->name }}
		<div id='image'>
			<img src="{{ asset($blog->image) }}" height='350px' width='85%'>
		</div><br />
		<div id='pt'>
		{!! nl2br(e( $blog->postCont )) !!}<br/>
		</div><br />
	</div>
	<hr/>


@stop










