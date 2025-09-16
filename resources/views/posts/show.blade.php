<!DOCTYPE html>
<html>
<head>
    <title>Post show</title>
</head>
<body>
    <h1>Post</h1>
    <p>タイトル: {{$post -> title}} 本文: {{$post -> body}}</p>
    <form action="{{ route('posts.comments.store', $post) }}" method="POST" style="display:inline;">
      @csrf
      <div>
          <label for="body">本文:</label>
          <textarea name="body" id="body">{{ old('body', $comment->body) }}</textarea>
          @error('body')
              <p style="color: red;">{{ $message }}</p>
          @enderror
      </div>
      <button type="submit">コメント投稿</button>
  </form>
    <p>コメント一覧</p>
    <ul>
      @foreach($comments as $comment)
          <li>{{$comment -> body}}</li>
      @endforeach
    </ul>
</body>
</html>