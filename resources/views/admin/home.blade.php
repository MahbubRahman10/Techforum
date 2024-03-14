@extends('layouts.admin')

@section('content')

		<center><h3>Welcome!!! to TechForum Admin Panel...</h3>
		
			<p>Now you can control the TechForum as an admin...</p></center>


<div class="col-xs-12">
					<div class="row">
				    
					<div class="col-xs-2">
                            <div class="stat-box1">
                                <h4>Visitors</h4>
                                <h1>{{ $visitors }}</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box2">
                                <h4>Files</h4>
                                <h1>{{ $filecount }}</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box3">
                                <h4>Users</h4>
                                <h1>{{ $users }}</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box4">
                                <h4>Discussions</h4>
                                <h1>{{ $total_discussions }}</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box5">
                                <h4>Posts</h4>
                                <h1>{{ $blog_post }} </h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box6">
                                <h4>Comments</h4>
                                <h1>{{ $comments }}</h1>
                            </div>
                     </div>
						

					 
					</div>
					
					
					</div>
		 

	








@stop