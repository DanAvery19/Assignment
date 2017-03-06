<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<style>
body{
	background-color: #ccff90;
}
.content{
	width: 900px;
	height: 400px;
	background:radial-gradient( #7cb342 15%, #43a047 30%, #2e7d32 70%);	
	margin-left: 19%;
	border-top-left-radius: 30px;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border: solid 4px #ffcc80;
	margin-top: 3%;
} 
#success{
	text-align: center;
	padding-top: 15px;
	font-size: 75px;
	font-family: Marker Felt;
	color: white;
	text-shadow: -3px 1px 4px #CCE0EB;
	opacity: 0.8
}
p{
	text-align: center;
	margin-top: 4%;
	font-family: Chalkboard SE;
	color: #ddd;
	font-size: 20px;
}
#back{
	margin-left: 395px;
	margin-top: 30px;
	width: 90px;
	height: 30px;
	border-radius: 4px;
	background-color: #aed581;
	border-color: #aed581;
	font-weight: 900;
	color: grey;
	font-family: Chalkboard;
}
#back:hover{
	background-color: #a5d6a7;
	border-color: #a5d6a7;
}
</style>
<body>
	<div class="content">
		<h1 id="success">SUCCESS!</h1>
		<hr>
		<p>The student has been successfully added to the table.</p>
		<a href="{{ url('assign') }}"><button id="back">Check Table</button></a>
	</div>
</body>
</html>