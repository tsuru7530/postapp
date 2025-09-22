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
<button type="button", id="submitBtn">
  {{isset($post -> id) ? '更新する' : '作成する'}}
</button>
<script>
    var submitBtn = document.getElementById('submitBtn');
    submitBtn.addEventListener('click', async() => {
        var title = document.getElementById('title').value;
        var body = document.getElementById('body').value;
        const token = document.querySelector('input[name="_token"]').value;
        const response = await fetch('/posts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({title, body})
        });
        const data = await response.json();
        console.log(data);
        if (data.success){
            alert('保存しました');
        }
    } );
</script>