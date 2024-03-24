@extends('layout.main')
@section('title', 'Single post')
@section('content')
    <h2>{{ $post['title']; }}</h2>

    <p> 
        By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> 
        in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <small class="d-block mb-3 text-muted">{{ date("d F Y", strtotime($post->created_at)) }}</small>

    <h6>{!! $post['body']; !!}</h6>
@endsection