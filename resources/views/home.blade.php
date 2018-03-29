@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $key => $post)
        @can ('view_post', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b>
            <a href="{{url("/post/$post->id/update")}}">Edit</a>
            <hr>
        @endcan
    @empty
        <p>Nenhum Post Cadastrado</p>
    @endforelse
</div>
@endsection
