@extends ('layouts.master')

@section ('content')

<div class="col-sm-8">
    <h1>Publish a post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" >
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea  class="form-control" id="body" name="body" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include('layouts.errors')
    </form>

</div>

@endsection