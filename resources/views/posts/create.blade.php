<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">タイトル</label>
    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}">

    <label for="body">本文</label>
    <textarea name="body">{{ old('body', $post->body ?? '') }}</textarea>

    <button type="submit">保存</button>
</form>