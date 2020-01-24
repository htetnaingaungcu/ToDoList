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
        <h1>{{$article->title}}</h1> 
        <p> Written by : {{$article->author->name}}<br/>
        <a href="{{route('articles.edit',['article'=>$article->id])}}">Edit</a>

        <p>{{$article->content}}</p>
        @foreach($article->tags as $tag)
            <a href="{{route('articles.index',['tag'=>$tag->name])}}">{{$tag->name}}</a> | 
        @endforeach
    </div>
</body>

</html>