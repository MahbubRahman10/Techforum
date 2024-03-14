@extends('layouts.master')
@section('content')
	
<h1 class="page_title">Ask Question</h1>
<div class="seper"></div>
	<form method="post" action="question" class="form-inline" role="form">
	{{ csrf_field() }}
		<div class="form-group">
			<td ><h6 class="cc">Title:</h6></td>
			<h6><input type="text" class="title" name="title" ><br>
			{{ $errors->first('title')}}</h6>
			
			<td><h6>Catagory:</h6>
				<h6>
					<select class="source" id="source" name="source">
						<option value="0" selected="selected" disabled="disabled">Select catagory</option>	
						 @foreach($data as $value)
						<option value="{{ $value->category_name }}">{{ $value->category_name }}</option>
						@endforeach
					</select>
					<br>
			{{ $errors->first('source')}}
				</h6>
			</td><br><br>  
			<td><h6>Description:</h6></td>
			<h5><textarea name='description' cols='80' rows='10' ></textarea></h5><br>  
			<button type="submit" class="btn btn-info btn-lg" name="submit"  role="button">Submit</button>
		</div>
	</form>
	       		<script type="text/javascript">
	    			$(document).ready(function() {	    				
	    				@if($errors->first('title') && $errors->first('source'))
	        			    $(".title").css("border-color", "red");
	        			    $(".source").css("border-color", "red");
						@elseif($errors->first('title'))
	        			    $(".title").css("border-color", "red");
	        			@elseif($errors->first('source'))
	        			  	$(".source").css("border-color", "red");
	        			@endif	
	    			});
	    		
				</script>



@stop
