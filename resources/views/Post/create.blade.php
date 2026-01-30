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
                    <form id="postForm" action="/Post/store" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">name</label>
                            <input type="Text" class="form-control" id="titre" name="titre" aria-describedby="TextHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">contenu</label>
                            <input type="Text" class="form-control" id="contenu" name="contenu">
                        </div>
                        <select name="category">
                                @foreach ($categories as $category)
                                    <option class="form-control" value="{{ $category->id }}">{{ $category->nom }}</option>
                                @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Category_id</label>
                            <input type="number" class="form-control" name="categorie_id">
                        </div>
                        <button type="submit" value="" id="submit" class="btn btn-primary">Submit</button>
                    </form>
</body>
</html>