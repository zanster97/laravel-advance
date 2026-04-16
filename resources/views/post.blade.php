<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($posts as $post)
        @can('update',$post)

        <h4><a href="{{ route('post.edit', $post->id) }}">{{ $post->name }}</a></h4>
        <p>Author:{{ $post->user->name}}</p>
        <p>Tags:</p>
        <ul>
            @foreach ($post->tags as $tag )
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
        <hr>
        @endcan
        @endforeach
    </div>
</body>
</html>
