<!DOCTYPE html>
<html>
<head>
	<title>CRUD ASSIGN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.css">
</head>

<style>
body{
	background-color: #ccff90;
}
.main_content{
	width: 1000;
	height: 1000px;
	margin-left: 14%;
	position: absolute;
}
table{
	margin-top:15px;
	font-family: Chalkduster;
	width: 1020px;
	border-collapse: collapse;
	background:radial-gradient( #43a047 30%, #2e7d32 80%);
	border-color: #ffcc80;
	color: white;
	outline-color: #ffb74d;
	outline-style: solid;
}
th{
	padding: 20px 20px 20px 20px;
	font-size: 30px;
	text-align: center;
}
td{
	padding: 3px 10px 3px 10px;
	border-right: 2px solid #ddd;

}
td:last-child{
	border-right: none;
}
#fields td{
	border-right: none;
}
#add{
	margin-left: 43%;
	width: 130px;
	height: 40px;
	font-size: 17px;
	border-radius: 5px;
	margin-top: 5%;
	margin-right: 1950px;
}
#fields{
	text-align: center;
	font-weight: 900;
	border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}
#data{
	color: #dcedc8;
}
#data:hover {
	background-color: #2e7d32;
}
.actions{
	border-radius: 5px;
	border:none;
	background-color: #aed581;
}

</style>

<body>
	<div class="main_content">
		<a href="{{url('add')}}"><button id="add">Add Students</button></a>
			<table border="0"> 
				<tr>
					<th colspan="500">StudentsTable</th>
				</tr>
				<tr id="fields">
					<td class="odd">
						ID
					</td>
					<td>
						First Name
					</td>
					<td class="odd">
						Middle Name
					</td>
					<td>
						Last Name
					</td>
					<td class="odd">
						Course
					</td>
					<td>
						Contact
					</td>
					<td class="odd">
						Guardian_Name
					</td>
					<td>
						Action
					</td>
				</tr>
				@foreach($students as $student)
					<tr id="data">
						<td>{{ $student->id }}</td>
						<td>{{ $student->First_Name }}</td>
						<td>{{ $student->Middle_Name }}</td>
						<td>{{ $student->Last_Name }}</td>
						<td>{{ $student->Course }}</td>
						<td>{{ $student->Contact }}</td>
						<td>{{ $student->Guardian_Name }}</td>
						<td>
							<a href="{{ url('delete', $student->id) }}">
							<button class="actions"><i class="glyphicon glyphicon-trash"></i></button>
							</a> 
							| 
							<a href="{{ url('edit', $student->id) }}">
							<button class="actions"><i class="glyphicon glyphicon-pencil"></i></button>
							</a>
							</td>
					</tr>
				@endforeach
			</table>
		<br>
		<br>
	</div>
</body>
</html>