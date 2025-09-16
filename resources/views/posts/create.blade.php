<!DOCTYPE html>
<html>
<head>
    <title>Post 新規作成</title>
</head>
<body>
    <h1>Post 新規作成</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @include('posts._form')
    </form>
</body>
</html>