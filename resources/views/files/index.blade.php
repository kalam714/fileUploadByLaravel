<!DOCTYPE html>
<html>
<head>
<title>Files</title>
</head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
<body>
<a href="/create">Create</a>
<table>
<tr>
<th>Title</th>
<th>Desciption</th> 
<th>View</th>
<th>Download</th>

</tr>
<tr>
@foreach($files as $file) 
<tr>
<td>{{$file->title}}</td>
<td>{{$file->description}}</td>
<td><a href="/files/{{$file->id}}">View</a></td>
<td><a href="/file/download/{{$file->file}}">Download</a></td>


</tr>
@endforeach
</table>

</body>
</html>
