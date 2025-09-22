<!DOCTYPE html>
<html>
<head>
    <title>Post index</title>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
</head>
<body>
    <h1>Posts</h1>
    <ul>
      @foreach($posts as $post)
        <li>タイトル: {{$post -> title}} 本文: {{$post -> body}}</li>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
      @endforeach
    </ul>
    <div id='react-root'></div>
    <script>
      var userName = @json($userName);
      console.log(userName);
    </script>
</body>
</html>