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
    <title>show by id</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="" href="/">ITI Blog</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link text-light" href="/index">All Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container ml-5 mt-5">
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">PostCreator</th>
                    <th scope="col">Created_At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $posts->id }}</td>
                    <td>{{ $posts->Title }}</td>
                    <td>{{ $posts->Description }}</td>
                    <td>{{ $posts->postCreator }}</td>
                    <td>{{ $posts->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>