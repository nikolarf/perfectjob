<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mail</title>
</head>
<body>
	<h1>Job Title: {{$title}}</h1>
	<br>
	<h2>Job Description: {{$description}}</h2>
	<a href="http://localhost/perfectjob/public/notspam/{{$email}}">Approve</a><br><br>
	<a href="http://localhost/perfectjob/public/spam/{{$email}}">Mark as a spam</a><br>
	<!--a href="http://mail.test/email">Kliknuti za Localhost</a-->
</body>
</html>