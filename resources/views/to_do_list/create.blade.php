@extends("layout")
@section('content') 

<style>
.page-header {
    margin-top: 25px;
}

.page_title {
    font-size: 34px;
    color: #2ea69a;
    text-transform: uppercase;
}

.row>.col.s2{
    text-align: right;
}

.save-btn {
    width: 86px;
    height: 35px;
    background: #2ea69a;
    font-size: 14px;
    border: none;
    color: #fff;
    cursor: pointer;
}

</style>
<div class="row page-header">
    <div class="col s7">
        <label for="" class="page_title">Add To Do List</label>
    </div>
</div>

<div class="row">
    <form method="POST" action="{{route('to_do_list.store')}}" class="col s12">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="password" name="content" type="text" class="validate">
                <label for="password">Note</label>
            </div>
        </div>
        <div class="row">
            <div class="col s4"></div>
            <div class="col s2">
                <button type="submit" class="save-btn">Create</button>
            </div>
        </div>
    
    </form>
  </div>

@endsection