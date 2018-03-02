@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        <h1>Register</h1>
        <form method="POST" action="/register/create">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" id="name" >
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection