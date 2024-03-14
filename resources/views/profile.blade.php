@extends('layouts.master')

@section('content')

	<ul class="breadcrumb" section="bc">
		<li>
			<a href="techforum.php">Home</a>
		</li>
		<li>
			<a href="login.php">User</a>
		</li>
		<li>
			<a href="login.php">{{$users->name}}</a>
		</li>
	</ul>	

	<li id="comments">
		<div id='us'>
			<h1>{{$users->name}}</h1>
		</div>
		<h1 class="user1">Join date : {{$users->updated_at}}<span></span></h1>
		<div class ="tab">
			<ul id="tabnav" class="nav nav-tabs">									 
				<li class="active"><a data-toggle="tab" href="#home">About Me</a></li>
				<li><a data-toggle="tab" href="#menu1">statistic</a></li>
				<li><a data-toggle="tab" href="#menu2">Contact Info</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h1 id="user2">location <a id="displayText" href="javascript:toggle();"><span>@if(Auth::user())  @if(Auth::user()->id=="$users->id")Edit @endif @endif</span></a></h1>
						<div id="toggleText" style="display: none">					
							<form method="post" class="user3">
							{{ csrf_field() }}												
								<input type="text" data-id="{{$users->id}}" class="location" name="location"  /></br></br>
								<td><button class="edit" id="edit" data-id="{{$users->id}}" data-name="{{$users->name}}"> Save</button></td>						
							</form>								
						</div>									
						<div id="body" class="user4">
							{{$users->location}}
						</div>
									
						<h1 id="user2">Occupation <a id="displayText2" href="javascript:toggle2();"><span>@if(Auth::user())  @if(Auth::user()->id=="$users->id")Edit @endif @endif</span></a></a></h1>
						<div id="toggleText2" style="display: none">
							<form method="post" class="user3">
							{{ csrf_field() }}	
								<input type="text" class="occupation" name="occupation" /></br></br>
								<td><button class="edit2" id="edit" data-id="{{$users->id}}" data-name="{{$users->name}}"> Save</button></td>	
							</form>
						</div>									
						<div id="body2" class="user4">
							<span>{{ $users-> occupation}}<span>
						</div>						
						<h1 id="user2">Interest <a id="displayText3" href="javascript:toggle3();"><span>@if(Auth::user())  @if(Auth::user()->id=="$users->id")Edit @endif @endif</span></a></a></h1>
						<div id="toggleText3" style="display:none">
							<form method="post" class="user3">	
							{{ csrf_field() }}								
								<input type="text" class="interest" name="interest" /></br></br>
								<td><button class="edit3"  id="edit" data-id="{{$users->id}}" data-name="{{$users->name}}"> Save</button></td>									
							</form>								
						</div>
						<div id="body3" class="user4">
							<span>{{ $users-> interest}}<span>
						</div>
				</div>
				<div id="menu1" class="tab-pane fade">			
         		</div>
				<div id="menu2" class="tab-pane fade">
					<h3>Contact Me</h3>
					<p>id@techforun.com.</p>
				</div>
			</div>										
		</div>

@stop
