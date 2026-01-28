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
<h3>Create Category</h3>

                    <form id="postForm" action="{{ route("categories.store") }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">name</label>
                            <input type="Text" class="form-control" id="titre" name="nom" aria-describedby="TextHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">description</label>
                            <input type="Text" class="form-control" id="description" name="description">
                        </div>
                        <button type="submit" value="" id="submit" class="btn btn-primary">Submit</button>
                    </form>
</body>
</html>