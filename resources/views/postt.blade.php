@extends('layout.main')
@section('title', 'Single post')
@section('content')
    <h2>{{ $motivation['judul']; }}</h2>
    <h6>{{ $motivation['deskripsi']; }}</h6>
@endsection