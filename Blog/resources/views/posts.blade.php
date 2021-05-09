{{----------------------------- Approach with Blade Components -------------------------------}}
<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif


{{--        <div class="lg:grid lg:grid-cols-3">--}}
{{--            <x-post-card />--}}
{{--            <x-post-card />--}}
{{--            <x-post-card />--}}
{{--        </div>--}}
    </main>
</x-layout>

{{----------------------------- Approach without Components ---------------------------------}}
{{--@extends ('layout')--}}

{{--@section ('content')--}}
{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{ $post->slug}}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <h3>--}}
{{--                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}<a/> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--            </h3>--}}
{{--            <div> {{ $post->excerpt }} </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--@endsection--}}
