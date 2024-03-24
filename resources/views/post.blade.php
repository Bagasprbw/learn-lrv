@extends('layout.main')
@section('title', 'Post')
@section('content')
<h1 class="">{{ $judul }}</h1><hr><br>

@if($posts->count())
    <div class="card mb-5 shadow-sm">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted"> 
                    By. <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> 
                    in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary btn-sm mb-3">Read More</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No Post Found!</p>
@endif

@foreach ($posts->skip(1) as $item)    
    <article class="mb-5 border-bottom">
        <h2><a class="text-decoration-none" href="/post/{{ $item->slug }}">{{ $item->title }}</a></h2>
        <p> 
            By. <a class="text-decoration-none" href="/authors/{{ $item->author->username }}">{{ $item->author->name }}</a> 
            in <a class="text-decoration-none" href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a> {{ $item->created_at->diffForHumans() }}
        </p>
        <small class="d-block mb-3 text-muted">{{ date("d F Y", strtotime($item->created_at)) }}</small>
        <h6 class="">{{ $item->excerpt }} ....</h6>
        <a href="/post/{{ $item->slug }}" class="btn btn-info btn-sm mb-3">Read more...</a>
    </article>
@endforeach

@endsection
