@extends('layouts.master')

@section('content')

	<div id='st'>									
		<div id='sst'>
			<h2>{!! $iid->title !!}</h2>
		</div>
		<div id='sstt'>
			{!! $iid->date !!} by <a href="">{!! $iid->name !!}</a>
		</div>
		<div id='ssttt'>
			<p>{!! $iid->description !!}</p>
		</div>
		<a href="#comments" class="linkbtn answer">Answer This</a>
		<hr>
		<h3>All discussion<span><b>{!! $iid->num_comments !!}</b> discussion</span></h3>
		<i class="glyphicon glyphicon-thumbs-up"></i>
		<hr>
	</div>
		<li id="comments">
			@foreach ($comment as $comments)
				<div id='forum-comment'>									
				<div id='ssttt'>
				<p>{!! $comments->description !!}</p>
				</div>
				<div id='sstt'>
				{{ $comments->date }} by {{ $comments->name }}
				</div>
				</div>
				<hr>
		</li>				
	 	@endforeach
   	    @if(Auth::user())										
			@if($errors->any())
	       		<script type="text/javascript">
	    			$(document).ready(function() {
	        			alert("Please fill out this field");
	    			});
				</script>
			@endif

			<form class="comment" action="{{ URL('forumreply'.$iid->id)}}" method="post" enctype="multipart/form-data">
			 {{ csrf_field() }}
			<div class="form-group">
				<textarea name="description" class="form-control" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-info btn-lg" name="submit">Reply</button>
			</form>
		@else
			<div id='pp'>
			<h7>You are not logged in.Quickly <a href="login.php">sign in</a> to TechForum</h7>
			</div>
		@endif	
		
@stop
