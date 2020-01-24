@extends("layout")
@section('content')
<div class="row">
    <h1 class="col s12">List of articles</h1>

    <div class="col s8">
        @foreach($articles as $article)
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{$article->title}}</span>
                <p>{{$article->except}}</p>
            </div>
            <div class="card-action">
                <a href="/articles/{{$article->id}}">View Detail</a>
                <a href="#">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection