@csrf

@if(isset($post -> id))
    @method('PUT')
@endif

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
<button type="submit">
  {{isset($post -> id) ? '更新する' : '作成する'}}
</button>