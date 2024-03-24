@extends('layout.main')
@section('title', 'Post Categories')
@section('content')
<h1 class="">{{ $judul }}</h1><hr><br>
<article>
    <ul>
        @foreach ($categories as $item)
        <li><a href="/categories/{{ $item->slug }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</article>
@endsection
