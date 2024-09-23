<h1>Add Post</h1>
    <form action="/posts" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" id="" required><br><br><br>
        <textarea name="description" placeholder="Description" id="" required></textarea><br><br><br>
        <input type="submit" value="add posts">
    </form>
</body>
</html>
</form>