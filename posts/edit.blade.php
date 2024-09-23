<h1>Edit Post</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}" required><br><br><br>
        <textarea name="description" required>{{ $post->description }}</textarea><br><br><br>
        <input type="submit" value="update posts">
    </form>
