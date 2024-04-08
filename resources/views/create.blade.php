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
            <a class="navbar-brand" href="#">Creaza Evenimente</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('events.index')}}">Events</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <form action="{{route('events.store')}}" method="post" class="mt-4">
                    @csrf
                    <div class="mb-3">

                        <input type="text" name="title" class="form-control" placeholder="Titlu">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="description" class="form-control" placeholder="Descriere">

                         @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="date" name="date" class="form-control" placeholder="Data">

                         @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="location" class="form-control" placeholder="Locatia">

                         @error('location')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-dark btn-sm">Salveaza</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>