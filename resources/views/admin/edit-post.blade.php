@extends('layouts.admin')

@section('content')

	
	<div id="form">
		<h1>Add Post</h1>
        <form method="post" enctype="multipart/form-data" action="">
		<p><label>Title</label><br /></p>
		<tr>
       <p><td><input type="text" name="postTitle" value="{{ $blog->postTitle }}" required/></td></p>
      </tr>
	  <p><label>Type</label><br /></p>
	<tr>
     <p><td>
      <select id="radio" name="type" value="{{ $blog->type }}" required>
      <option selected="selected" disabled="disabled">(Select one)</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Internet" >Internet</option>
      </select>
	  </td></p>
	</tr>

	<p><label>Content</label><br /></p>
		<tr>
		<p><textarea name='postCont' cols='80' rows='10' placeholder="" required>{{ $blog->postCont }}</textarea></p>
		</tr>
		
		<tr>
        <td><button type="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>
	
	
@stop