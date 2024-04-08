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
        <div class="card">
        <h4 class="card-header">{{$event->title}}</h4>
            <div class="card-body">
                <h5 class="card-title">{{$event->location}}</h5>
                <h6 class="card-title">{{$event->date}}</h6>
                <p class="card-text">{{$event->description}}</p>
                <!-- Adăugați un ID la buton pentru a putea accesa elementul în JavaScript -->
                <a href="#" id="registerBtn" class="btn btn-primary">Inregistreazate</a>
            </div>
        </div>
    
    </div>

    <!-- Încorporați scriptul JavaScript -->
    <script>
        // Obțineți butonul de înregistrare din DOM
        const registerBtn = document.getElementById('registerBtn');

        // Adăugați un eveniment de clic la buton
        registerBtn.addEventListener('click', function() {
            // Afișați un mesaj de confirmare că sunteți înregistrat la eveniment
            alert('Ai fost înregistrat la eveniment!');

            // Redirecționați utilizatorul către pagina principală
            window.location.href = "{{route('events.index')}}";
        });
    </script>
</body>
</html>
