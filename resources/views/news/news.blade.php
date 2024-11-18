@extends('news.layout')

@section('title', 'Новости')

@section('content')
<div style="width:80%; margin:auto">
<h1>Категории</h1>
<hr>
  @foreach ($categories as $category)

    <p><b>{{$category->name}}</b></p>
    <p>автор: {{$category->authors->name}}</p>
    <p>Новости категории</p>
    @foreach ($category->news as $new)
        <p>Название новости : <b>{{$new->name}}</b></p>
        <p>автор: {{$new->authors->name}}</p>
        <p>Текст новости: {{$new->message}}</p>
        <hr>
    @endforeach
<hr>
  @endforeach
</div>
@endsection
