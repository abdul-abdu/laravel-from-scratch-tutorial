@extends('components.layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')

    @if($posts->count())
        <x-post-featured-card :post="$posts[0]"/>
        <div class="lg:grid lg:grid-cols-2">
            @foreach($posts->skip(1) as $post)
                <x-post-card :post="$post"/>
            @endforeach
        </div>
    @else
        <p>Not Posts Yet</p>
    @endif


    {{--    <div class="lg:grid lg:grid-cols-3">--}}
    {{--        <x-post-card/>--}}
    {{--        <x-post-card/>--}}
    {{--        <x-post-card/>--}}
    {{--    </div>--}}

    {{--    @foreach ($posts as $post)--}}
    {{--        <article class="mb-2">--}}
    {{--            <h1><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>--}}

    {{--            <p>--}}
    {{--                By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>--}}
    {{--                in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
    {{--            </p>--}}

    {{--            <div>--}}
    {{--                {{ $post->excerpt }}--}}
    {{--            </div>--}}
    {{--        </article>--}}
    {{--    @endforeach--}}
@endsection
