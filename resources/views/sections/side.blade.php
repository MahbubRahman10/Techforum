<div class="col-md-4">
   	<div id='side'>
		<div id='side_title'>
			What's news
		</div>								
		@foreach ($post as $posts)
		<div id='blog_post'>
			<a href="{{ URL('/blogpost='.$posts->id)}}">{{ $posts->postTitle }}</a>
		</div>
		@endforeach
	</div>	

	<div id='side'>
		<div id='side_title'>
			HOT TOPIC
		</div>								
		@foreach ($hot as $data)
		<div id='blog_post'>
			<a href="{{ URL('/viewpost='.$data->id)}}">{{ $data->title }}</a>
		</div>
		@endforeach
	</div>
</div>
