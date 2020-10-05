<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>
<a href="/index">Index</a>
<form action="/files" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<input type="text" name="title" placeholder="enter the title">
<input type="text" name="description" placeholder="enter the description">
<input type="file" name="file" >
<input type="submit" value="submit">
</form>
</body>
</html>
