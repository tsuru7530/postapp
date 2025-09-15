<!DOCTYPE html>
<html>
<head>
    <title>Post index</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
      @foreach($posts as $post)
        <li>Title: {{$post -> title}} Body: {{$post -> body}}</li>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
      @endforeach
    </ul>
</body>
</html>