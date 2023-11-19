<h1>Create New Post</h1>


<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="my_title" placeholder="Enter Title">
    <input type="text" name="my_body" placeholder="Enter Body">
    <input type="submit" value="Login">
</form>
