@extends("layout")
@section('content')
<div class="row">
    <div class="col s12">
        <h1 class="col s8">Post List</h1>
        <div class="col s4">
            <a href="{{route('post.create')}}" class="btn btn-primary">Create</a>
        </div>
    </div>


    <div class="col s8">
        @foreach($posts as $post)
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{$post->title}}</span>
                <p>{{$post->content}}</p>
            </div>
            <div class="card-action">
                <a href="/post/{{$post->id}}">View Detail</a>
                <a href="{{route('post.edit',$post->id)}}">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection