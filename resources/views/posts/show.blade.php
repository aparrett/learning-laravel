@extends ('layouts.master')

@section ('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <article>
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    <p>{{ $comment->body }}</p>
                </li>
            </article>
        @endforeach
        </ul>
    </div>
@endsection