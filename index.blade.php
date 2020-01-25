@extends("layout")
@section('content')  
<style>

.page-header {
    margin-top: 25px;
}

.page-header>.col.s3{
    margin-top: 5px;
    padding: 0;
}

.page_title {
    font-size: 34px;
    color: #2ea69a;
    text-transform: uppercase;
}

.todo-item {
    display: flex;
    max-width: 48vw;
    margin-bottom: 20px;
}

.todo_text {
    border-radius: 5px;
    color: #fff;
    padding: 10px 20px;
    box-shadow: 3px 3px 3px 1px #8eb7b3;
    border: 1px solid #dce8e7;
}

.todo_text>label {
    font-size: 14px;
    font-family: sans-serif;
}

.todo_text>span {
    font-size: 13px;
    color: #9e9e9e;
}
</style>

    <div class="row page-header">
        <div class="col s7">
            <label class="page_title">To Do List</label>
        </div>
        <div class="col s3">
            <a class="waves-effect waves-light btn" href="{{route('to_do_list.create')}}">Add New</a>
        </div>
    </div>
    @foreach($to_dos as $to_do)
    <div class="todo-item">
        <div>
            <form action="#">
                <p>
                    <label>
                    <input type="checkbox" class="filled-in" checked="checked" />
                    <span></span>
                    </label>
                </p>
            </form>
        </div>

        <div class="todo_text">
            <label for="">
                {{$to_do->content}}
            </label><br/>
            <span>{{date("d M, Y h:m A", strtotime($to_do->created_at))}}</span>
        </div>
               
    </div>
    @endforeach
@endsection