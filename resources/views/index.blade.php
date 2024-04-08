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
            <a class="navbar-brand" href="#">Evenimete Online</a>
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
            <div class="col-md-12">
                <h4>Lista evenimentelor</h4>
            </div>
        </div>

        <!-- Formular pentru filtrare -->
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('events.index') }}" method="GET">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Caută după titlu">
                    </div>
                    <div class="form-group">
                        <input type="text" name="location" class="form-control" placeholder="Caută după locație">
                    </div>
                    <button type="submit" class="btn btn-primary">Caută</button>
                </form>
            </div>
        </div>

        <!-- Tabel pentru afișarea evenimentelor -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Titlu</th>
                                <th>Descriere</th>
                                <th>Data</th>
                                <th>Locatia</th>
                                <th>Acțiuni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$event->id}}</td>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->description}}</td>
                                    <td>{{$event->date}}</td>
                                    <td>{{$event->location}}</td>
                                    <td>
                                        <a href="{{route('events.show',['event'=>$event->id])}}" class="btn btn-warning btn-sm">Show</a>
                                        <form action="{{route('events.destroy',['event'=>$event])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <a href="{{route('events.create')}}" class="btn btn-success btn-sm">Adauga</a>
            </div>
    </div>
</body>
</html>