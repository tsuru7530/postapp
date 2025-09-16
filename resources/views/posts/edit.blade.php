<!DOCTYPE html>
<html>
<head>
    <title>Post 編集</title>
</head>
<body>
    <h1>Post 編集</h1>

    <form action="{{ route('posts.update', $post->id )}}" method="POST">
        @include('posts._form')
    </form>
</body>
</html>
