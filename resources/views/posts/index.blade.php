<div>{{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}</div>

@foreach ($posts as $post)
    <div>
        {{ $post->id }}: {{ $post->body }}
    </div>
@endforeach
