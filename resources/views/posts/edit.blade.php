<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Post</title>
    <style>
        h1 {
            color: #6c757d;
        }
        a {
            color: #6c757d;
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form class="border p-3 mt-3" action="{{ route('posts.update', $post->id) }}" method="post">
            <!-- it is very important to make edit -->
            @method("PUT")
            @csrf
            <h1 class="text-center">Edit Post : {{ $post->title }}</h1>
            <div class="form-group mb-3">
                <input type="text" class="form-control" value="{{ $post->title }}" name="title">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" value="{{ $post->body }}" name="body">
            </div>
            <button type="submit" class="btn btn-success m-auto d-table">Update</button>
        <a href="{{route('posts.index')}}">Show All Posts</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
