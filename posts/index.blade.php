
<body>
    <h1>All Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->id}}  -  {{ $post->title }} - {{ $post->description }}
                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete Post">
                </form>
            </li>
        @endforeach
    </ul>


