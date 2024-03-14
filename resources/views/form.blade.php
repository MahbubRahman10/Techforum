<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<style type="text/css">

		table tr td{
 			padding: 10px 10px; 
 			text-align: center;
		}
		table{
			border-collapse: collapse;
		}

	</style>
</head>
<body>

		<div class="Mahbub">
			<CENTER>				
				<form action="insert"  method="post">	

				{{ csrf_field() }}
					<td>Name: </td>
					<input type="name" name="name" class="name"><br><br>
					<button class="button">Submit</button>
				</form>
			</CENTER>
	<br><br><br><br>
<center>
		<table border="1px">
			<tr>
				<td>Username</td>
				<td>action</td>
				<td>action</td>
			</tr>

			<?php foreach ($data as $value): ?>
			<tr>
				<td><?php  echo "$value->name";  ?></td>
				<td><a href="{{ URL('/edit/'.$value->id )}}">Edit</a></td>
				<td><a href="{{ URL('/data/'.$value->id )}}">Delete</a></td>
			</tr>
			<?php endforeach; ?>
		</table
		</div>

</center>

</body>
</html>

