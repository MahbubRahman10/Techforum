@extends('layouts.admin')

@section('content')

	<div id="form">
		
		<h1>Add Post</h1>
        <form method="post" enctype="multipart/form-data" action="Blogpost">
        {{ csrf_field() }}

		<p><label>Title</label><br /></p>
		<tr>
       <p><td><input type="text" class="postTitle" name="postTitle" placeholder="" required/></td></p>
      </tr>
	    
	  <p><label>Type</label><br /></p>
	<tr>

     <p><td>
      <select id="radio" class="type" name="type" placeholder="" required>
      <option value="0" selected="selected" disabled="disabled">(Select one)</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Internet" >Internet</option>
      </select>
	  </td></p>
	</tr>

	  <p><label>Image</label><br /></p>
		<tr>
       <p><td><input type="file" class="image" name="image" placeholder="" required/></td></p>
      </tr>
	 

		<p><label>Content</label><br /></p>
		<tr>
		<p><textarea name='postCont' class="postCont" cols='80' rows='10' placeholder="" required></textarea></p>
		</tr>
		
		<tr>
        <td><button type="submit" class="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>

	
	
	
	
	
	
	
	
	
	
	
	
	

@stop