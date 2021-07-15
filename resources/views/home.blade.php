<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
        <section class="container">
            <h2>Pacchetti viaggio:</h2>
            <div class="cards">
                @foreach ($travels as $travel)
                    <div class="card">
                       <h2>{{$travel->destination}}</h2>
                       <h4>Giorni: {{$travel->days}}</h4>
                       <h4>Tipo di viaggio: {{$travel->type}}</h4>
                       <h4>Pensione: {{$travel->roomAndBoard}}</h4>
                       <h4>Tour Guidati: {{ $travel->guidedTours ? 'Sì' : 'No' }}</h4>
                       <small>Prezzo pacchetto: {{ $travel->price }} €</small>
                    </div>
                @endforeach
            </div>
        </section>
    </body>
</html>

{{-- 
"days" => "15",
"type" => "Crociera",
"roomAndBoard" => "Pensione Completa",
"guidedTours" => true,
"price" => "5000" --}}