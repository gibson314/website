@extends('main')

@section('content')
<h1>{{$article->title}}</h1>
    <article>{{$article->body}}</article>
    <h4>{{$article->published_at}}</h4>
@endsection