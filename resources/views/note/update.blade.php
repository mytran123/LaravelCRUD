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
<form action="" method="post">
    @csrf
    <h1>Update Note</h1>
    <input type="text" name="name" value="{{$note->name}}">
{{--    <input type="text" name="category" value="{{$note->category}}">--}}
    <select name="category" id="" value="{{$note->category}}">
        <option value="">Choose category note</option>
        <option value="Work">Work</option>
        <option value="Lear">Lear</option>
        <option value="Family">Family</option>
        <option value="Friend">Friend</option>
    </select>
    <input type="text" name="description" value="{{$note->description}}">
    <input type="submit" name="add" value="Add">
    <a href="{{ route('notes.index') }}">Back</a>
</form>
</body>
</html>
