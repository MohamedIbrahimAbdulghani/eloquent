<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Post</title>
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
            display: table;
            margin: auto;
        }
        form {
            width: 75%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form class="border p-3 mt-3" action="{{route('posts.store')}}" method="post">
            @csrf
            <h1 class="text-center">Create New Post</h1>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Title" name="title">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control"  placeholder="Enter Body" name="body">
            </div>
            <button type="submit" class="btn btn-primary m-auto d-table mb-2">Add</button>
        <a href="{{route('posts.index')}}">Show All Posts</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
