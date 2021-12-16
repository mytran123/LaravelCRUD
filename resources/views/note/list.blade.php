<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Note List</h2>
<a href="{{ route('notes.showFormCreate') }}">Create Note</a>
<table border="1px">
    @foreach($notes as $note)
        <tr>
            <td>{{ $note->id }}</td>
            <td>{{ $note->name }}</td>
            <td>{{ $note->category }}</td>
            <td>{{ $note->description }}</td>
            <td><a href="{{ route('notes.showDetail',$note->id) }}">Detail</a></td>
            <td><a href="{{ route('notes.update',$note->id) }}">Update</a></td>
            <td><a href="{{ route('notes.delete',$note->id) }}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
