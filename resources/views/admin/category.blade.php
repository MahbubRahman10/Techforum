@extends('layouts.admin')

@section('content')

 <div class ="tab">
						<ul id="tabnav" class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">View category</a></li>
							<li><a data-toggle="tab" href="#menu1">Add Category</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">

						<table class="table table-bordered">
			  	<thead>
			  		<th>Category ID</th>
			  		<th>Category Name</th>
					<th>Action</th>
					<th>Action</th>
			  	</thead>
							
							
							
							@foreach($category as $categorys)
			  		<tr>
			  			<td>{{ $categorys->category_id }}</td>
				  		<td>{{ $categorys->category_name }}</td>
				  		<td>
				  			<a href="javascript:delete_id3({{ $categorys->category_id }})">Delete</a>
				  		</td>
						<td>
				  			<a href="edit-category.php?id={{ $categorys->category_id }}">Edit</a>
				  		</td>
			  		</tr>
			  	@endforeach
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">
							
							
							
							
		<form name="category_form" >
         
		<h1>Add Category:</h1>
		<input type="text" id="category" value=""  /><br><br>
		<div id="status_text" />
         <button type="submit" id="submit" class="btn btn-info btn-lg" role="button">Submit</button>
        </form>		
							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						
						
		 
		 
		 
		
		
		</div>
	</div>
</div>



	



@stop