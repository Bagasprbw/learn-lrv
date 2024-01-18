@extends('layout.main');
@section('title', 'Post')
@section('content')
<h1>
    @foreach ($itemotivasi as $item)
        <a href="/post={{ $item['slug'] }}"><h2>{{ $item['judul'] }}</h2></a>
        <h6>{{ $item['deskripsi'] }}</h6>
    @endforeach
</h1>
@endsection