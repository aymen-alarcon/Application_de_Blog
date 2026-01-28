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

    <h3>Tags</h3>
    <form class="mb-3 d-flex">
        <input type="text" class="form-control me-2" placeholder="Tag name">
        <button class="btn btn-primary">Add</button>
    </form>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between">
            Laravel
            <span>
                <a class="btn btn-sm btn-warning">Edit</a>
                <a class="btn btn-sm btn-danger">Delete</a>
            </span>
        </li>
    </ul>
</body>
</html>