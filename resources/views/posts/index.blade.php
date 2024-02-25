<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>All Posts</title>
    <style>
        h1 {
            color: #6c757d;
            margin-top: 10px;
        }
        a {
            color: #6c757d;
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        form {
            display: inline-block;
        }
        a .btn-secondary {
            display: inline-block;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center">All Posts</h1>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Process</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary m-auto mb-1">Edit</a>
                    <!-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger">Delete</a> -->
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger  d-block mt-1">Soft Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('posts.create')}}">Back To Add Post</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
