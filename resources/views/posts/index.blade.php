<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <h2 class='title'>
             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        [<a href='/posts/create'>create</a>]
    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
     @csrf
     @method('DELETE')
    <button type="submit">delete</button> 
</form>
<a href="">{{ $post->category->name }}</a>
<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    </body>
</html>