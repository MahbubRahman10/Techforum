 @if(Auth::user())
<!DOCTYPE html>
<html ln="eng">
<head>
<head>
	<title>TechForum Admin Panel</title>
	<meta name="_token" content="{{ csrf_token() }}">
	<link href="../assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="../assets/style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php $up=Request::path();?>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
  		<li @if($up=='admin/home') class="active" @endif role="presentation" ><a href="home">Home</a></li>
		<li @if($up=='admin/admin') class="active" @endif role="presentation"><a href="admin"> Admin</a></li>
		<li @if($up=='admin/forum-post') class="active" @endif role="presentation"><a href="forum-post">Forum Post</a></li>
		<li @if($up=='admin/viewcomment') class="active" @endif role="presentation"><a href="viewcomment">View Comments</a></li>
		<li @if($up=='admin/category') class="active" @endif role="presentation"><a href="category">View Category</a></li>
  		<li @if($up=='admin/blog_post') class="active" @endif role="presentation"><a href="blog_post">Add Post</a></li>
  		<li @if($up=='admin/viewpost') class="active" @endif role="presentation"><a href="viewpost">View Post</a></li>
  		<li @if($up=='admin/viewuser') class="active" @endif role="presentation"><a href="viewuser">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>		
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Admin Panel</h3>
		  </div>
		<div class="panel-body">
			
			 @yield('content')
        
		</div>
	</div>
</div>

</body>
</html>
@endif


