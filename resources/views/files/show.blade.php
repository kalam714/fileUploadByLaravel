<!DOCTYPE html>
<html>
<head>
<title>Show File</title>
</head>
<body>
<a href="/index">Index</a>
<h2>{{$file->title}}</h2>
<h3>{{$file->description}}</h3>
<p>
 <iframe width="500px" height="500px" src="{{url('storage/files/'.$file->file)}}"></iframe>
</p>
</body>
</html>
