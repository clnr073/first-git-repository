<x-app-layout>
    <x-slot name="header">
        　Show
    </x-slot>
    <body class="antialiased">
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <small>{{ $post->user->name }}</small>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="edit">
            [<a href="/posts/{{ $post->id }}/edit">edit</a>]
        </div>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</html>
</x-app-layout>
