<!DOCTYPE html>
<html>
<head>
	<title>Add Students</title>
</head>
<body>
		<form method="POST" action="{{url('update')}}">
			{!! csrf_field() !!}
			<input type="hidden" name="id" value="{{ $student->id }}">

			<h2>First Name:</h2>
			<input type="text" name="First_Name" value="{{ $student->First_Name }}">

			<h2>Middle Name:</h2>
			<input type="text" name="Middle_Name" value="{{ $student->Middle_Name }}">

			<h2>Last Name:</h2>
			<input type="text" name="Last_Name" value="{{ $student->Last_Name }}">

			<h2>Course:</h2>
			<input type="text" name="Course" value="{{ $student->Course }}">

			<h2>Contact:</h2>
			<input type="text" name="Contact" value="{{ $student->Contact }}">

			<h2>Guardian Name:</h2>
			<input type="text" name="Guardian_Name" value="{{ $student->Guardian_Name }}">
			
			<button type="submit">Update</button>

		</form>
</body>
</html>