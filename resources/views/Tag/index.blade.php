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

    <a href="/Tag/Create" class="btn btn-primary mb-3">Add Tag</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Laravel</td>
                <td>2026-01-26</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/Tag/Create">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/Tag/delete">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>