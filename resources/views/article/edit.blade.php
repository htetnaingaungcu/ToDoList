<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$article->title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div>
        <form method="POST" action="/articles/{{ $article->id}}/">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $article->title}}"/><br/>
            <input type="text" name="except" value="{{ $article->except}}"/><br/>
            <input type=" text" name="content" value="{{ $article->content}}"/><br/>
            <button type=" submit">Update</button>
        </form>


    </div>
</body>

</html>