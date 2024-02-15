<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

   <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Storico Treni</h2>
            </div>
            @foreach ($trains as $train)
            <div class="col-3 my-5 ">
                <h6>Azienda: {{$train->company_name}}</h6>
                <h6>Stazione di partenza: {{$train->departure_station}}</h6>
                <h6>Stazione di arrivo: {{$train->arrival_station}}</h6>
                <h6>Data di partenza: {{$train->departure_date}}</h6>
                <h6>Orario di partenza: {{$train->departure_time}}</h6>
                <h6>Orario di arrivo: {{$train->arrival_time}}</h6>
                <h6>Codice Treno: {{$train->train_code}}</h6>
                <h6>Numero Carrozze: {{$train->number_of_carriages}}</h6>
                <h6>In orario: {{$train->in_time}}</h6>
                <h6>Cancellato: {{$train->deleted}}</h6>
            </div>
            @endforeach
            <div class="col-12">
                <h2 class="text-center">Treni in partenza oggi</h2>
            </div>
            @foreach ($today_trains as $train)
            <div class="col-3 my-5 ">
                <h6>Azienda: {{$train->company_name}}</h6>
                <h6>Stazione di partenza: {{$train->departure_station}}</h6>
                <h6>Stazione di arrivo: {{$train->arrival_station}}</h6>
                <h6>Data di partenza: {{$train->departure_date}}</h6>
                <h6>Orario di partenza: {{$train->departure_time}}</h6>
                <h6>Orario di arrivo: {{$train->arrival_time}}</h6>
                <h6>Codice Treno: {{$train->train_code}}</h6>
                <h6>Numero Carrozze: {{$train->number_of_carriages}}</h6>
                <h6>In orario: {{$train->in_time}}</h6>
                <h6>Cancellato: {{$train->deleted}}</h6>
            </div>
            @endforeach
        </div>
   </div>

</body>

</html>