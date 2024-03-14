@extends('layouts.admin')

@section('content')

 
		 <div class ="tab">
						<ul id="tabnav" class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">All admin</a></li>
							<li><a data-toggle="tab" href="#menu1">Add admin</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">

							<table class="table table-bordered">
							<thead>
							<th>ID</th>
							<th>USERNAME</th>
							<th>ABOUT</th>
							</thead>
							
							
						
			  		@foreach($admin as $admins)	
			  		<tr>
			  			<td>{{ $admins->id }}</td>
				  		<td>{{ $admins->username }}</td>
						<td>{{ $admins->About }}</td>
			  		</tr>
					@endforeach
					
					
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">
		
<div id="form">
		
		<h1>Add Admin</h1>
        <form method="post" enctype="multipart/form-data" action="">

		<p><label>Name</label><br /></p>
		<tr>
       <p><td><input type="text" name="name" placeholder="" required/></td></p>
      </tr>
	  
	  <p><label>About</label><br /></p>
		<tr>
       <p><td><textarea name='about' cols='80' rows='10' placeholder="" required> </textarea></td></p>
      </tr>
	  
	  <p><label>Image</label><br /></p>
		<tr>
       <p><td><input type="file" name="image" placeholder="" required/></td></p>
      </tr>
	 
	 <p><label>Password</label><br /></p>
		<tr>
       <p><td><input type="text" name="password" placeholder="" required/></td></p>
      </tr>
	  
	  
	 
	 
	 
		<tr>
        <td><button type="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>
































							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						




@stop