<!DOCTYPE html>
<html>
<head>
    <title>Post index</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
      @foreach($posts as $post)
        <li>Title: {{$post['title']}} Body: {{$post['body']}}</li>
      @endforeach
    </ul>
</body>
</html>