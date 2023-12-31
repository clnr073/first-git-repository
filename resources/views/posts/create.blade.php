<x-app-layout>
    <x-slot name="header">
        Create
    </x-slot>
    
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST"> <!--action属性でリクエストを送信するURLを定義、method属性でHTTPリクエストのメソッドを指定-->
            @csrf <!--CSRFトークンを発行し、そのトークン情報をリクエスト時に一緒に送信-->
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store">
        </form>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</html>
</x-app-layout>
