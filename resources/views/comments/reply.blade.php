<form action="/posts/{{$post->id}}/comments/reply" method="post">

    <input type="hidden" name="parent_id" value="{{$comment->id}}">

    {{ csrf_field() }}

    <textarea name='body' id="body"></textarea>

    <button type="submit">invia</button>
</form>