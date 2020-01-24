<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$post->title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div>
        <form method="POST" action="/post/{{ $post->id}}/">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $post->title}}"/><br/>
            <input type=" text" name="content" value="{{ $post->content}}"/><br/>
            <button type=" submit">Update</button>
        </form>


    </div>
</body>

</html>