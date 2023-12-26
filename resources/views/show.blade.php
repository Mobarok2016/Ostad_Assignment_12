<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bus Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                @foreach ($data as $item)
        <form method="post" action="{{ url('/') }}/success">
            @csrf
            <h3>Bus Name: {{ $item['bus_name'] }}</h3>
            <h3>Bus Route: {{ $item['bus_route'] }}</h3>
            <h3>Departure Time: {{ $item['dep_time'] }}</h3>
            <h3>Available Seats: {{ $item['seats_available'] }}</h3>
            <h3>Bus Fare: {{ $item['fare'] }}</h3>
            <input type="hidden" name="bus_id" value="{{ $item['bus_name'] }}">
            <button type="submit" class="btn btn-primary">Book</button>
        </form>
        <br>
    @endforeach
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>