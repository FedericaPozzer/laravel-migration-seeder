<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>

    @vite('resources/js/app.js')

    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>
    <div class="container">
        <h1 class="mt-5"> <b>TRAINS:</b></h1>
        @forelse($trains as $train)

        <div class="row">
            <div class="col-12 mt-3">

                <div class="card">
                <h3 class="card-header py-3">Treno n.{{$train->codice_treno}} - {{$train->azienda}}</h3>
                <div class="card-body">
                    <h5 class="card-title row row-cols-2">
                        <div class="col">
                            <p class="mb-5"> Stazione di partenza: {{$train->stazione_di_partenza}}</p>
                            <p class="mb-0"> Stazione di arrivo: {{$train->stazione_di_arrivo}}</p>
                        </div>

                        <div class="col">
                            <p class="mb-5"> Data e orario di partenza: {{$train->orario_di_partenza}} </p>
                            <p class="mb-0"> Data e orario di arrivo: {{$train->orario_di_arrivo}} </p>
                        </div>
                    </h5>
                </div>
                </div>
               
            </div>
        </div>

        @empty <div class="mt-5">Nessun treno trovato <i class="bi bi-emoji-frown"></i> </div> 
        @endforelse
    </div>
</body>
</html>