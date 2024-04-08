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
            <a class="navbar-brand" href="#">Events</a>
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
            <div class="col-md-6">

                <h3>{{$event->title}}</h3>
                <h3>{{$event->description}}</h3>
                <h3>{{$event->date}}</h3>
                <h3>{{$event->location}}</h3>
            </div>
            <!-- Butonul -->
            <div class="col-md-6 align-self-center">
                <button class="btn btn-primary">Inregistreazate</button>
            </div>
        </div>
    </div>
</body>
</html>