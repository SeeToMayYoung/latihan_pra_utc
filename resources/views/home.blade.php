@extends('layout.master')
@section('title','Book List')
@section('content')
    <div class="w-100 items-center justify-center flex align-center">
        <p class="w-100 text-black pr-4 text-4xl">BOOK LIST</p>
        @if (count($books) > 0)
            <table class="table-fixed mb-4">
                <thead class="border-2 border-black">
                <tr>
                    <th>Title</th>
                    <th class="border-l-2 border-black">Genre</th>
                    <th class="border-l-2 border-black">Author</th>
                </tr>
                </thead>
                <tbody class="border-2 border-black">
                    @foreach ($books as $book)
                    <tr class="bg-gray-300">

                                <td class="pl-2 pr-2 border-2 border-black"><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
                                <td class="pl-2 pr-2 border-2 border-black"><a href="/book/{{$book->id}}">{{$book->Category->category}}</a></td>
                                <td class="pl-2 pr-2 border-2 border-black"><a href="/book/{{$book->id}}">{{$book->Detail->author}}</a></td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <h1>NO DATA</h1>
        @endif
    </div>
@endsection
