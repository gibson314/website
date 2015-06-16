<!--
<!doctype html>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>About me</h1>
<p>个人简介<br> I'm  </p>
<p></p>
</body>
</html>
-->
@extends('main')

@section ('content')
    <h1>About me</h1>
    @if (count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
@stop