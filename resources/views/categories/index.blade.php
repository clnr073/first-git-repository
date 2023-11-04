<x-app-layout>
    <x-slot name="header">
        　Index
    </x-slot>
    
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> <!--onclickでJavaScriptのdeletePost関数を実行-->
                    </form>
                </div>
            @endforeach
        </div>
        <div class="back">
            [<a href="/">back</a>]
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    // getElementByIdの引数にidを設定し、設定したidの要素を取得
                    // 引数にform_がついているのは、投稿ごとに区別するため
                }
            }
        </script>
    </body>
</x-app-layout>
