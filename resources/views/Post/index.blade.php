<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blog Admin</a>
            <div>
                <a class="btn btn-outline-light btn-sm" href="/Post/index">Posts</a>
                <a class="btn btn-outline-light btn-sm" href="/Categories/index">Categories</a>
                <a class="btn btn-outline-light btn-sm" href="/Tag/index">Tags</a>
            </div>
        </div>
    </nav>
    <a href="/Post/create">go</a>
    <h3>Posts</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contenu</th>
                <th>Category_id</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)                
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->titre }}</td>
                    <td>{{ $post->contenu }}</td>
                    <td>{{ $post->categorie_id }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href=" /Post/edit/{{ $post->id }}">Edit</a>
                        <form method="post" action="/Post/delete/{{ $post->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        let form = document.forms["postForm"]

        document.getElementById("edit").addEventListener("click", ()=>{
            form.submit.value = "edit"
        })

        document.getElementById("create").addEventListener("click", ()=>{
            console.log(form.submit.value)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>