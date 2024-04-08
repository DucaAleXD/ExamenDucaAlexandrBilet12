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
            <a class="navbar-brand" href="#">Event</a>
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
            <a href="{{route('events.create')}}" class="btn btn-success btn-sm">Adauga</a>

            <div class="row">
                <h4>Lista evenimentelor</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titlu</th>
                                <th>Descriere</th>
                                <th>Data</th>
                                <th>Locatia</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$events->id}}</td>
                                    <td>{{$events->titlu}}</td>
                                    <td>{{$events->autor}}</td>
                                    <td>{{$events->pagini}}</td>
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
    </div>
</body>
</html>