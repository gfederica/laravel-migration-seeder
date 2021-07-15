<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travel Agency</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        @include('partials.header')

        <main>
            <section class="container">
                <h2>Pacchetti viaggio</h2>
                <div class="cards">
                    @foreach ($travels as $travel)
                        <div class="card">
                        <h3>{{$travel->destination}}</h3>
                        <p>Giorni: {{$travel->days}}</p>
                        <p>Tipo di viaggio: {{$travel->type}}</p>
                        <p>Pensione: {{$travel->roomAndBoard}}</p>
                        <p>Tour Guidati: {{ $travel->guidedTours ? 'Sì' : 'No' }}</p>
                        <small>Prezzo pacchetto: {{ $travel->price }} €</small>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </body>
</html>
