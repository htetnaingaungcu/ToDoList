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

        <form method="POST" action="/post/">
            @csrf
            Title : <input type="text" @error("title") class="error" @enderror name="title" value="{{ old('title') }}" /><br />
            Content : <input type=" text" @error("content") class="error" @enderror name="content" value="{{ old('content') }}" /><br />
            <br />
            <button type="submit">Create</button>
        </form>


    </div>
</body>

</html>