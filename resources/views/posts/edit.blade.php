<x-app-layout>
    <x-slot name="header">
        Edit
    </x-slot>
    
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf <!--CSRFトークンを発行し、そのトークン情報をリクエスト時に一緒に送信-->
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="update">
        </form>
        <div class="back">
            [<a href="/posts/{{ $post->id }}">back</a>]
        </div>
    </body>
</html>
</x-app-layout>
