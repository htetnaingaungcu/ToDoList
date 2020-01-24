<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create new article</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div>
        <style>
            .error {
                border-color: red;
            }
        </style>

        @if($errors->any)
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="/articles/">
            @csrf
            Title : <input type="text" @error("title") class="error" @enderror name="title" value="{{ old('title') }}" /><br />
            Except : <input type="text" @error("except") class="error" @enderror name="except" value="{{ old('except') }}" /><br />
            Content : <input type=" text" @error("content") class="error" @enderror name="content" value="{{ old('content') }}" /><br />
            Tags :
            @foreach($tags as $index=>$tag)
            <label>
                <input type="checkbox" value="{{$index}}" name="tags[]" @if(is_array(old('tags')) && in_array($index,old('tags'))) checked @endif>
                {{$tag}}
                </input>
            </label>
            @endforeach
            <br />
            <button type="submit">Create</button>
        </form>


    </div>
</body>

</html>