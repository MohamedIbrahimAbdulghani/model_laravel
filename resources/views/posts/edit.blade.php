<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Posts</title>
</head>
<body>

<h1 class="text-center">Edit Post => ( {{$post->title}} ) </h1>

<div class="container">

<form action="{{route('posts.update', $post->id)}}" method="POST">
    @csrf
    <input type="text" name="my_title" value="{{$post->title}}" class="form-control mb-3">
    <input type="text" name="my_body" value="{{$post->body}}" class="form-control mb-3">
    <input type="submit" value="Update" class="btn btn-primary mb-3 d-block m-auto">
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
