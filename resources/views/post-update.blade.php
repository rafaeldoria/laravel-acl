@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $key => $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <b>Author: {{$post->user->name}}</b>
        <hr>
    @empty
        <p>Nenhum Post Cadastrado</p>
    @endforelse
</div>
@endsection
