

<form action="/posts/{{$post->id}}/comments" method="post">

    {{ csrf_field() }}

    <textarea name='body' id="body"></textarea>

    <button type="submit">invia</button>
</form>