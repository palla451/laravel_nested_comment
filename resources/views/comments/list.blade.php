<ul>
    @foreach($comments as $comment)
        <li>
             {{$comment->user->name}} said ...<br />
                   <b>{{$comment->body}}</b>
            @include('comments.reply')

            @if(isset($comment->children))
                @include('comments.show',['comments'=> $comment->children])
            @endif
        </li>

    @endforeach
</ul>