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
                <a class="btn btn-outline-light btn-sm" href="/Category/index">Categories</a>
                <a class="btn btn-outline-light btn-sm" href="/Tag/index">Tags</a>
            </div>
        </div>
    </nav>
    <div class="modal" tabindex="-1" id="createModal" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="postForm" action="{{ route("postController.store") }}" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">name</label>
                            <input type="Text" class="form-control" id="exampleInputText1" aria-describedby="TextHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">contenu</label>
                            <input type="Text" class="form-control" id="exampleInputText1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Category_id</label>
                            <input type="Text" class="form-control" id="exampleInputText1">
                        </div>
                        <button type="submit" value="" id="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3>Category</h3>
    <button type="button" class="btn btn-primary" id="create" data-bs-toggle="modal" data-bs-target="#createModal">Add post</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>description</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)            
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nom }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" id="edit" data-bs-toggle="modal" data-bs-target="#createModal">Edit post</button>
                        <a class="btn btn-sm btn-danger" href="/Category/delete">Delete</a>
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