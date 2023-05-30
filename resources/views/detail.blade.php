@extends('layout.master')
@section('title','Book Detail')
@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl">BOOK DETAIL</h1>
        <h2>Title : {{$book->title}}</h2>
        <h2>Author : {{$book->Detail->author}}</h2>
        <h2>Publisher : {{$book->Detail->publisher}}</h2>
        <h2>Year : {{$book->Detail->year}}</h2>
        <h2>Description : </h2>
        <p class="text-sm text-gray-500">{{$book->Detail->description}}</p>
    </div>
@endsection
