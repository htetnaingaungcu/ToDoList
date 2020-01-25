@extends("layout")
@section('content')    
    <form method="POST" action="/to_do/login">
        @csrf
        <label>User : <input name="email" required/></label><br/>
        <label>Password : <input name="password" type="password" required/></label><br/>
        <button type="submit">Login</button>
    </form>
@endsection