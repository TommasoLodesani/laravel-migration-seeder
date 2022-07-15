<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($trains as $train)

    <div>
        <h3>Il treno {{$train->azienda}} numero:</h3>
        <h4>{{$train->codice_treno}}</h4>
        <h3>In arrivo da</h3>
        <h4>{{$train->stazione_di_partenza}} </h4>
        <h3>Diretto a </h3>
        <h4>{{$train->stazione_di_arrivo}} </h4>
        <h5>Delle ore : {{$train->orario_di_partenza}} </h5>


    </div>

    @endforeach

</body>
</html>
