<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>All Posts</title>
</head>

<body>
    @include('posts.navbar')
    <div class=" container text-center">
        <a type=" button" class="btn btn-success mt-5" href="{{ route('create') }}">CreatePost</a>
    </div>
    <div class="container ml-5 mt-5">
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">PostCreator</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->Title }}</td>
                        <td>{{ $post->Description }}</td>
                        <td>{{ $post->creator->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <div class="container d-flex ">
                                <a type=" button" class="btn btn-info me-2"
                                    href="{{ route('show', $post->id) }}">view</a>
                                <a href=" {{ route('update', $post->id) }}" class="btn btn-primary me-2">Edit</a>
                                <form action="{{ route('destroy', $post->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf()
                                    <button type="submit" class="btn btn-danger me-2">delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</body>

</html>
