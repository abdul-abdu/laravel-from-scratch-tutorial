@extends('components.layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article class="mb-2">
            <h1><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
