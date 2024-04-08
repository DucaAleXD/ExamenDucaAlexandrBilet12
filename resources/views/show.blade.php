<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborator2</title>
     @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carti</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('books.index')}}">Carti</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3>{{$book->titlu}}</h3>
                <h3>{{$book->autor}}</h3>
                <h3>{{$book->pagini}}</h3>
                <h3>{{$book->pret}}</h3>
            </div>
        </div>
    </div>
</body>
</html>