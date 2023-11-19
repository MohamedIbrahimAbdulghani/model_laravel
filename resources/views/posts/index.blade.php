<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Show Posts</title>
</head>
<style>
    a {
        color: #333;
        font-size: 20px;
        text-decoration: none;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>
<body>

<h1 class="text-center">Show All Posts</h1>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Pro</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $post)
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>
        <a class="btn btn-secondary" href="{{route('posts.edit', $post->id)}}" role="button">Edit</a>
        <a class="btn btn-danger" href="#" role="button">Delete</a>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>


<a href="{{route('posts.create')}}" class="d-block text-center">Create new post</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
