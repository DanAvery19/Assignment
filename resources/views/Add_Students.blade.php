<!DOCTYPE html>
<html>
<head>
	<title>Add Students</title>
</head>

<style>
body{
	background-color: #ccff90;
}
#content{
	text-align: center;
	width: 700px;
	height: 650px;
	/*background-color: yellow;*/
	margin-left: 25%;
}
input{
	width: 250px;
	height: 20px;
	border-radius: 5px;
	border: none;
}
input[placeholder]{
	text-align: center;
}
form{
	margin-top: 5%;
	padding: 10px 20px 20px 20px;
	margin-top:15px;
	font-family: Chalkduster;
	background:radial-gradient( #43a047 30%, #2e7d32 80%);
	border-color: #ffcc80;
	color: white;
	outline-color: #ffb74d;
	outline-style: solid;
}
button{
	width: 100px;
	height: 40px;
	border-radius: 6px;
	font-size: 18px;
	font-family: Chalkboard;
	font-weight: bold;
	background-color: #9ccc65;
	border-color: #9ccc65;
	color:#1b5320;
}
button:hover{
	background-color: #a5d6a7;
	border-color: #a5d6a7;
}
</style>

<body>
	<div id="content">
		<form method="POST" action="{{url('add')}}">
			{!! csrf_field() !!}
			<h2>First Name:</h2>
			<input type="text" name="First_Name" placeholder="first name">

			<h2>Middle Name:</h2>
			<input type="text" name="Middle_Name" placeholder="middle name">

			<h2>Last Name:</h2>
			<input type="text" name="Last_Name" placeholder="last name">

			<h2>Course:</h2>
			<input type="text" name="Course" placeholder="course">

			<h2>Contact:</h2>
			<input type="text" name="Contact" placeholder="contact">

			<h2>Guardian Name:</h2>
			<input type="text" name="Guardian_Name" placeholder="guardian name">
			<br>
			<br>
			<br>
			<button type="submit">Add</button>

		</form>
	</div>
</body>
</html>