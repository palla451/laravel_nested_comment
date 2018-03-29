<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show Post</title>
   <!--  <link rel="stylesheet" href="style.css">
    <script src="script.js"></script> -->

</head>
<body>

    <h1>{{$post->title}}</h1>

    <article>
        <h3>{{$post->body}}</h3>
    </article>

    @include('comments.list')


    <h3>New Comment to the post</h3>
    @include('comments.new_comment')


</body>
</html>
