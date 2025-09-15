<!DOCTYPE html>
<html>
<head>
    <title>Post 編集</title>
</head>
<body>
    <h1>Post 編集</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body">本文:</label>
            <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">更新する</button>
    </form>
</body>
</html>
